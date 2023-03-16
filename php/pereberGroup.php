<?php
$countElements = 10;
for ($i = 1; $i <= $countElements; $i++) {
	$arrPosts[$i] = [];
}

function pereborGroup($arrPosts = false, $countLinks = 4) {
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
//			unset($arrPostsLinks[$idParent]["repeat"]);
//			unset($arrPostsLinks[$idParent]["ids"]);
		}

		return $arrPostsLinks;
	} else {
		return false;
	}
}

echo "<pre>";
print_r(pereborGroup($arrPosts, 5));
//get_vd($arrPosts);
//get_pr(perebor($arrPosts, 4));