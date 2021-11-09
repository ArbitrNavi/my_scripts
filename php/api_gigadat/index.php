<!doctype html>
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
            <!--            <form action="https://interac.express-connect.com/webflow?transaction=333" method="post">-->
            <form action="info.php" method="post" id="form_gigadat">
                <div class="text-center">
                    <!--                    <img src="192-192.png" alt="">-->
                </div>
                <br>
                <h4>form title</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                           value="test name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                           required>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile *</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp"
                           required>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Amount *</label>
                    <input type="number" class="form-control" id="amount" name="amount" step=""
                           aria-describedby="emailHelp" required>
                </div>

                <!--                <a class="link-secondary" href="#">У меня есть код партнера</a>-->
                <br>
                <br>

                <input type="hidden1" name="token" value=""/>
                <div class="text-center">
                    <button type="submit" class="btn btn-success text-center" id="form_send">Senden</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const getQueryArray = (obj, path = [], result = []) =>
        Object.entries(obj).reduce((acc, [k, v]) => {
            path.push(k);

            if (v instanceof Object) {
                getQueryArray(v, path, acc);
            } else {
                acc.push(`${path.map((n, i) => i ? `[${n}]` : n).join('')}=${v}`);
            }

            path.pop();

            return acc;
        }, result);

    const getQueryString = obj => getQueryArray(obj).join('&');


    data = {
        'userId': '11112222',
        'transactionId': 'AB12CD123456', // merchant defined value
        'name': 'John Smith',
        'email': 'john.smith@example.com',
        'userIp': '70.67.168.5',
        'mobile': '4031234567',
        'amount': '33.33',
    }
    data = getQueryString(data);
    console.log(data);

    var trueRequest = new XMLHttpRequest();
    trueRequest.open('POST', 'info.php', true);
    trueRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    trueRequest.send(data);
    // trueRequest.send('foo1=foo=bar');

    trueRequest.onload = function () {

        var result = this.response;
        console.log(result);
        console.log('trueRequest.onload');

    };
    console.log('result end');

</script>
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
