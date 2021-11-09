//Отправка данных с формы, получения ответа и имитация отправки с переходом на страницу


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
        result = JSON.parse(result);
        // console.log(result);
        document.querySelector("#token").value = result.token;
        // console.log('trueRequest.onload');
        // form_gigadat.action='https://interac.express-connect.com/webflow?transaction=' + result.data.transactionId + '&token=' + result.token;
        form_gigadat.action='https://interac.express-connect.com/webflow?transaction=' + result.data.transactionId;
        form_gigadat.submit();//выполняем отправку формы
    };

    // form_gigadat.submit();//выполняем отправку формы

}; //.onsubmit