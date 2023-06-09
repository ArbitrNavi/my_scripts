<?php function formating_post($string)
{
    // убираем спец символы
    $string = htmlspecialchars($string);
    // декодирует любые кодирования
    $string = urldecode($string);
    // убираем отступы вначале и конце
    $string = trim($string);

    return $string;
} ?><!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Открыть счет Standard MT5</title>
</head>
<body>
<style>
    .row, button {
        /*outline: 1px solid red;*/
    }
</style>

<div class="container">
    <div class="row justify-content-center  mt-5">
        <div class="col-10 col-lg-4 col-sm-8">
            <form action="form.php" method="post">
                <div class="text-center">
                    <img src="192-192.png" alt="">
                </div>
                <br>
                <h4>Standard-Konto eröffnen</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Ihr Name *</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                </div>

                <div class="mb-3">
                    <label for="surname" class="form-label">Ihr Nachname *</label>
                    <input type="text" class="form-control" id="surname" name="surname" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>


                <div class="mb-3">
                    <label for="phone" class="form-label">Telefonnummer *</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" required>
                </div>

<!--                <a class="link-secondary" href="#">У меня есть код партнера</a>-->
                <br>
                <br>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check" required>
                    <label class="form-check-label" for="check">Durch das Senden dieses Formulars bestätige ich meine Einwilligung zur Verarbeitung meiner personenbezogenen Daten.</label>
                </div>

                <input type="text" style="display: none;" name="key_private" value="<?php echo formating_post($_GET["key_private"]); ?>">
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success text-center">Senden</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Дополнительный JavaScript; выберите один из двух! -->

<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

<!-- Вариант 2: Bootstrap JS отдельно от Popper
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>
</html>