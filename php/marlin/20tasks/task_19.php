<?php session_start();
//$_SESSION["galleryID"] = 48;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Подготовительные задания к курсу </title>
	<meta name="description" content="Chartist.html">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
	<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
	<link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
	<link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
	<link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
	<link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
	<link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
	<link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
	<link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
	<div class="row">
		<div class="col-md-6">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>
						Задание </h2>
					<div class="panel-toolbar">
						<button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
						<button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
					</div>
				</div>
				<div class="panel-container show">
					<div class="panel-content">
						<div class="panel-content">
							<div class="form-group">
								<form action="upload.php" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label class="form-label" for="simpleinput">Image</label>
										<input type="file" id="simpleinput" class="form-control" name="file[]" multiple>
									</div>
									<button class="btn btn-success mt-3">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>
						Загруженные картинки </h2>
					<div class="panel-toolbar">
						<button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
						<button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
					</div>
				</div>
				<div class="panel-container show">
					<div class="panel-content">
						<div class="panel-content image-gallery">
							<div class="row">


								<?php

								if (!empty($_SESSION["galleryID"])) {
									$galleryID = $_SESSION["galleryID"];
									$arrGalleryID = json_decode($galleryID);//48
									//									var_dump($arrGallery);
									function connectBD() {
										$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
										$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);
										return $pdo;
									}

									$pdo = connectBD();

									$field = 'gallery';
									$sql = "SELECT {$field} FROM my_table WHERE id=:id";
									$statement = $pdo->prepare($sql);
									$statement->execute([
											"id" => $arrGalleryID//48
									]);

									$thisGallery = $statement->fetchAll(PDO::FETCH_ASSOC)[0]["gallery"];//array
									$thisGallery = json_decode($thisGallery);// to decode for Array
									//								echo "<pre>";
									//								var_dump($thisGallery);
									//								echo "</pre>";

									foreach ($thisGallery as $index => $item) {
										$imgUrl = "uploads/" . $item[0];
										$imgTitle = $item[1];
										?>
										<div class="col-md-3 image">
											<img src="<?php echo $imgUrl ?>" alt="<?php echo $imgTitle; ?>">
										</div>
									<?php }

								}//!empty($_SESSION["galleryID"])
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
	// default list filter
	initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
	// custom response message
	initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
