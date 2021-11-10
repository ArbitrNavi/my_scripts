<?php
//print_r($_REQUEST);
//echo '$_POST
//';
//print_r($_POST);
//echo '$_GET
//';
//print_r($_GET);
//
//echo "ip = " . $_SERVER['HTTP_CF_CONNECTING_IP'];
//echo "test";
//var_dump(substr(date('U'),4));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form page</title>
</head>
<body>
<style>
    /*.remove-logo {*/
    /*    position: absolute;*/
    /*    width: calc(100% - 20px);*/
    /*    height: 74px;*/
    /*    background: #ffffff;*/
    /*    top: 60px;*/
    /*    left: 0;*/
    /*}*/

    /*.wrap{*/
    /*    position: relative;*/
    /*}*/

    body {
        overflow: hidden;
    }

    iframe {
        width: 100vw;
        height: calc(100vh + 120px);
        margin-top: -130px;
    }

    @media (max-width: 768px) {
        iframe {
            width: 100vw;
            height: calc(100vh + 120px);
            margin-top: -150px;
        }
    }

</style>
<!--<div class="wrap">-->
<!--    <div class="remove-logo"></div>-->
<?php
$transaction = $_REQUEST['transaction'];
$token = $_REQUEST['token'];
?>
<iframe id="iframeName"
        src="https://interac.express-connect.com/webflow?transaction=<?php echo $transaction; ?>&token=<?php echo $token; ?>"
        frameborder="0">

</iframe>
<!--</div>-->

<script>
    // window.onload = () => {
    //     let iframeName = document.getElementById('iframeName');
    //     let iframeContent = iframeName.contentDocument;
    //     iframeContent.body.innerHTML = iframeContent.body.innerHTML + '<style>header{display: none};</style>';
    // }
</script>

</body>
</html>
