<?php

class workBd {
	const BDNAME = "like_info";

	public function __construct() {}

	private static function createBd() {
		$isBd = get_option( $optionsName );

		if ( ! $isBd ) {
			global $wpdb;

			$bdPrefix    = $wpdb->get_blog_prefix();
			$bgCharset   = $wpdb->charset;
			$bdCollate   = $wpdb->collate;
			$bdFullName  = $bdPrefix . self::BDNAME;
			$optionsName = "isBd_" . self::BDNAME;

			$table_name      = $bdFullName;
			$charset_collate = "DEFAULT CHARACTER SET {$bgCharset} COLLATE {$bdCollate}";

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			$sql = "CREATE TABLE {$table_name} (
			    id INT PRIMARY KEY AUTO_INCREMENT,
			    post_ID INT,
			    post_like INT DEFAULT 0,
			    post_dislike INT DEFAULT 0,
			    ip VARCHAR(15)
			
			) {$charset_collate};";

			// Создать таблицу.
			dbDelta( $sql );

			add_option( $optionsName, true );
		}
	}

	public static function addData( $post_ID = 0, $post_like = 0, $post_dislike = 0, $ip = 0 ) {
		self::createBd();

		global $wpdb;

		$table = $wpdb->prefix . self::BDNAME;
		$data  = [
			'post_ID'      => $post_ID,
			'post_like'    => $post_like,
			'post_dislike' => $post_dislike,
			'ip'           => $ip,
		];

		$wpdb->insert( $table, $data );

		$my_id = $wpdb->insert_id;


		var_dump( $my_id );

		//		echo "postID" . $postID . "|" ."post_like" . $post_like . "|" ."post_dislike" . $post_dislike . "|" ."ip" . $ip . "|";
	}

	public static function getPostLike( $postID = false ) {
		global $wpdb;

		$query = "SELECT * FROM wp_like_info";
		$arrBd = $wpdb->get_results( $query, "ARRAY_A" );

		$arrStatic = [];

		foreach ( $arrBd as $lineBd ) {
			$arrStatic[ $lineBd["post_ID"] ]["post_title"]   = self::getPostLink( $lineBd["post_ID"] );
			$arrStatic[ $lineBd["post_ID"] ]["post_like"]    += (int) $lineBd["post_like"];
			$arrStatic[ $lineBd["post_ID"] ]["post_dislike"] += (int) $lineBd["post_dislike"];

			if ( (int) $lineBd["post_like"] ) {
				$arrStatic[ $lineBd["post_ID"] ]["post_total"] += 1;
			} else {
				$arrStatic[ $lineBd["post_ID"] ]["post_total"] -= 1;
			}
		}

		if ( $postID ) {
			$result = ( ! empty( $arrStatic[ $postID ] ) && array_key_exists( 'post_total', $arrStatic[ $postID ] ) ) ? $arrStatic[ $postID ]["post_total"] : "0";
		} else {
			$result = $arrStatic;
		}

		return $result;
	}

	public static function getDataAdmin() {
		foreach ( self::getPostLike() as $postData ) {
			$arrPostData[] = $postData;
		}

		$result = $arrPostData;

		$result = json_decode( json_encode( $result ), false );

		return $result;

	}

	private static function getPostLink( $postID = false ) {

		if ( $postID ) {
			$link   = get_edit_post_link( $postID );
			$title  = get_the_title( $postID );
			$html   = "<a href=\"" . $link . "\">" . $title . "</a>";
			$result = $html;
		} else {
			$result = null;
		}

		return $result;
	}


}