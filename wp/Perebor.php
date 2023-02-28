<?php class Perebor
{
	const countElements = 4;
	const nameField     = 'insertPosts';

	public static function pereborGroup($arrPosts = false, $countLinks = 4) {
		if ($arrPosts) {
			foreach ($arrPosts as $index => $item) {
				$arrPostsLinks[$index] = ["ids" => [], "repeat" => 0,];
			}

			$i = 0;
			foreach ($arrPosts as $idParent => $arrPost) {
				$numberElement = 0;

				foreach ($arrPosts as $idChild => $arrPost2) {
					if (count($arrPostsLinks[$idParent]["ids"]) < $countLinks) {
						if ($i <= $countLinks) {  // 3 < 4 начальный перебор
							if ($idParent <> $idChild) {
								if ($arrPostsLinks[$idChild]["repeat"] < $countLinks) {
									$arrPostsLinks[$idChild]["repeat"]++;
									$arrPostsLinks[$idParent]["ids"][] = $idChild;
								}
							}
						} elseif ($numberElement < $countLinks) { //3 > 4 смешивание
							$thisId = $arrPostsLinks[$idChild]["ids"][$numberElement];
							if (in_array($thisId, $arrPostsLinks[$idParent]["ids"])) {
							} else {
								$arrPostsLinks[$idChild]["ids"][$numberElement] = $idParent;//заменил значение
								$arrPostsLinks[$idParent]["ids"][$numberElement] = $thisId;//добавил значение
								$arrPostsLinks[$idParent]["repeat"]++;
								$numberElement++;
							}
						}
					}
				}
				$i++;
			}

			foreach ($arrPosts as $idParent => $arrPost) {
				$arrPostsLinks[$idParent] = $arrPostsLinks[$idParent]["ids"];
				unset($arrPostsLinks[$idParent]["repeat"]);
				unset($arrPostsLinks[$idParent]["ids"]);
			}

			return $arrPostsLinks;
		} else {
			return false;
		}
	}

	public static function updateFields() {
		$fieldsPosts = self::nameField;
		$countLinks = self::countElements;
		// задаем нужные нам критерии выборки данных из БД
		$args = array(
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		);

		$query = new WP_Query($args);
		$postIdArray = [];
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$postIdArray[get_the_ID()] = [];
			}
		}
		// Возвращаем оригинальные данные поста. Сбрасываем $post.
		wp_reset_postdata();

		$pereborGroup = self::pereborGroup($postIdArray, self::countElements);

		foreach ($pereborGroup as $key => $item) {
			$stringIds = implode(",", $item);
			//		$stringIds .= "__" . date( 'U' );
			update_post_meta($key, $fieldsPosts, $stringIds);
		}

		//	return [$fieldsPosts, $countLinks];
	}

	public function useUpdateFields() {
		//first check
		add_action('wp_footer', 'wp_kama_footer_action');

		/**
		 * Function for `wp_footer` action-hook.
		 *
		 * @return void
		 */

		function wp_kama_footer_action() {
			if (is_single()) {
				if (!empty(get_post_field('insertPosts'))) {
					namespace \Perebor::updateFields();
				}
			}
		}


		add_action('save_post', 'wp_kama_save_post_action', 10, 3);

		/**
		 * Function for `save_post` action-hook.
		 *
		 * @param int $post_ID Post ID.
		 * @param WP_Post $post Post object.
		 * @param bool $update Whether this is an existing post being updated.
		 *
		 * @return void
		 */
		function wp_kama_save_post_action($post_ID, $post, $update) {
			namespace \Perebor::updateFields();
		}


		add_action('delete_post', 'wp_kama_delete_post_action', 10, 2);

		/**
		 * Function for `delete_post` action-hook.
		 *
		 * @param int $postid Post ID.
		 * @param WP_Post $post Post object.
		 *
		 * @return void
		 */
		function wp_kama_delete_post_action($postid, $post) {
			namespace \Perebor::updateFields();
		}
	}

	public static function getPereborPosts() {
		$result = explode(',', get_post_field(self::nameField));
		return $result;
	}
}

$perebor = new Perebor();
$perebor->useUpdateFields();
?>