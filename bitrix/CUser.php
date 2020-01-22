<div class="wrc_body wrap_white">
	<div class="on2_wrap">
			<a href="<?=$arParams["LINK_BLOCK"]?>" class="title18"><?=$arParams["NAME_BLOCK"]?></a>
		<div class="smb_container">
			<?foreach ($arResult["ITEMS"] as $arElement):?> 
			<div class="smb_item wrap_silver">
				<div class="smbi_left">
					<div class="smbi_container_img">
					<?php if (!$arElement["PREVIEW_PICTURE"]){ ?>
						<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/img/no_image.jpg" alt="" />
					<?php }else{ ?>
 						<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					<?php }; ?>
					</div>
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="gil2_left_add_new btn_white">Написать</a>
				</div>
				<div class="smbi_info">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="smbi_title"><?=$arElement["NAME"]?></a>
					<div class="bni_raiting">
					<?$APPLICATION->IncludeComponent(
						    "bitrix:iblock.vote",
						    "my_star",
						    Array(
						        "IBLOCK_TYPE" => $arElement["IBLOCK_TYPE"],
						        "IBLOCK_ID" => $arElement["IBLOCK_ID"],
						        "ELEMENT_ID" => $arElement["ID"],
						        "MAX_VOTE" => $arElement["MAX_VOTE"],
						        "VOTE_NAMES" => $arElement["VOTE_NAMES"],
						        "CACHE_TYPE" => $arElement["CACHE_TYPE"],
						        "CACHE_TIME" => $arElement["CACHE_TIME"],
						        "DISPLAY_AS_RATING" => $arElement["DISPLAY_AS_RATING"],
						    ),
						    $component
						);?>
 						<span class="bni_raiting_time"><?=$arElement["ACTIVE_FROM"]?></span>
					</div>
					<ul class="smb_list">
						<li class="smb_list_li"><span class="smb_list_name">Специальность:</span><a href="#" class="smb_list_value"><?=$arElement['PROPERTIES']['specialty']["VALUE"]?></a></li>
						<li class="smb_list_li"><span class="smb_list_name">Город:</span><a href="#" class="smb_list_value"><?=$arElement['PROPERTIES']['city']["VALUE"]?></a></li>
						<li class="smb_list_li"><span class="smb_list_name">Опыт работы:</span><a href="#" class="smb_list_value"><?=$arElement['PROPERTIES']['experience']["VALUE"]?></a></li>
					</ul>
					<div class="smb_content">
						<p class="bni_text"><?=$arElement["PREVIEW_TEXT"]?></p>
					</div>
					<div class="bni_soc_info">
 						<span class="bni_like">115</span> <span class="bni_repost">0</span> <span class="bni_comments">0</span> <span class="bni_views">1250</span>
					</div>
				</div>
			</div>
			 <!-- .smb_item -->
			 			 <!-- .bni_item -->
			 <?endforeach;?>
		</div>
	</div>
	 <!-- .on2_wrap -->
</div>


