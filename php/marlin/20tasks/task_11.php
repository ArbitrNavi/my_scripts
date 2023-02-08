<?php session_start();
//var_dump($_SESSION);
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
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
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
							<?php if (array_key_exists("isAddUser", $_SESSION) && !$_SESSION["isAddUser"]) { ?>
								<div class="alert alert-danger fade show" role="alert">Текущий пользователь существует</div>
							<?php } ?>
							<form action="answer11.php" method="POST">
								<label class="form-label" for="simpleinput">Text</label>
								<input type="text" id="simpleinput" class="form-control" name="email">
								<button class="btn btn-success mt-3">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php if (array_key_exists("isAddUser", $_SESSION)) {
	$arrUserStatus = $_SESSION["addUser"]; ?>
	<ol>
		<?php
		foreach ($arrUserStatus as $userInfo) { ?>

			<?php if ($userInfo["userStatus"]) {
				$text = "ПОЛЬЗОВАТЕЛЬ ДОБАВЛЕН";
				$class = "user-good";
			} else {
				$text = "ПОЛЬЗОВАТЕЛЬ СУЩЕСТВУЕТ";
				$class = "user-bad";
			}

			?>
			<li class="<?php echo $class; ?>"><?php echo $userInfo["email"]; ?> пользователя и <?php echo $text; ?></li>

		<?php }
		?>
		<!--	<li class="user-bad">email пользователя и УЖЕ СУЩЕСТВУЕТ</li>-->
	</ol>

<?php }; ?>

<style>
	.user-good {
		color: green;
	}

	.user-bad {
		color: red;
	}

</style>


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