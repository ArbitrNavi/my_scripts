function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    var handler = "sendMail.php";

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200) {

                responsive = xmlhttp.responseText;
                // document.getElementById("myDiv").innerHTML = responsive;
                console.log(responsive)
            } else if (xmlhttp.status == 400) {
                console.log('Произошла ошибка 400');
            } else {
                console.log('было возвращено что-то еще, кроме 200');
            }
        }
    };

    xmlhttp.open("POST", handler, true);
    xmlhttp.send();
}

loadXMLDoc();