<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Deposit</title>
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
            <form action="login" method="post" id="form_gigadat">
                <div class="text-center">
                        <img src="logo_iterac.png" style="width: 150px;height: 150px;margin:auto;" alt="">
                </div>
                <br>
                <p class="fs-6">®Trade-mark of Interac Corp. Used under license</p>
                <h4>Deposit</h4>
                <p class="fs-4">Cash balance: <b>$<span id="balance">0</span></b> CAD</p>
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                           required>
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
                           aria-describedby="emailHelp" min="5" max="3000" onchange="document.querySelector('#balance').innerHTML = this.value" required>
                </div>

                <!--                <a class="link-secondary" href="#">У меня есть код партнера</a>-->
                <!--                <a class="link-secondary" href="#">У меня есть код партнера</a>-->
                <br>
                <br>

                <input type="hidden" name="token" id="token" value=""/>
                <div class="text-center">
                    <button type="submit" class="btn btn-success text-center" id="form_send">Deposit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    form_gigadat = document.querySelector("#form_gigadat");
    form_gigadat_submit = document.querySelector("#form_gigadat button[type=submit]");

    form_gigadat.onsubmit = function (event) {
        event.preventDefault();//убираем стандартное поведение
        // выполняем нужные манипуляции перед отправкой формы

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

        name = document.querySelector("#name").value;
        email = document.querySelector("#email").value;
        mobile = document.querySelector("#mobile").value;
        amount = document.querySelector("#amount").value;

        data = {
            'name': name,
            'email': email,
            'mobile': mobile,
            'amount': amount,
        }

        // console.log(data)


        data = getQueryString(data);
        // console.log(data);

        var trueRequest = new XMLHttpRequest();
        trueRequest.open('POST', 'token.php', true);
        trueRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        trueRequest.send(data);

        form_gigadat_submit.disabled=true;
        form_gigadat_submit.innerText = "loading...";

        //result
        trueRequest.onload = function () {
            var result = this.response;
            console.log(result);
            result = JSON.parse(result);
            // console.log(result);
            document.querySelector("#token").value = result.token;
            // console.log('trueRequest.onload');
            // form_gigadat.action='https://interac.express-connect.com/webflow?transaction=' + result.data.transactionId + '&token=' + result.token;
            form_gigadat.action='https://interac.express-connect.com/webflow?transaction=' + result.data.transactionId;
            // form_gigadat.action='info.php?transaction=' + result.data.transactionId;
            form_gigadat.submit();//выполняем отправку формы
        };

        // form_gigadat.submit();//выполняем отправку формы

    }; //.onsubmit
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
