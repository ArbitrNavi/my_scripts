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


// document.querySelectorAll(".rating__edit").onclick = function(){
//
// }

var divs = document.querySelectorAll('.rating__edit');

for (i = 0; i < divs.length; ++i) {
    divs[i].onclick = function (e) {
        e.preventDefault();

        if (this.getAttribute("data-like") == "like") {
            post_like = 1;
            post_dislike = 0;
        } else {
            post_like = 0;
            post_dislike = 1
        }

        data = {
            'action': 'post_like',
            'post_ID': this.closest(".rating").getAttribute("data-postID"),
            'client_IP': ajax_obj.userIP,
            'post_like': post_like,
            'post_dislike': post_dislike,
        };

        sendAjax(data, this);
    }
}

function sendAjax(dataObj, btnClick) {
    handler = ajax_obj.ajaxurl;

    // console.log(dataObj)
    data = getQueryString(dataObj);

    var xmlhttp = new XMLHttpRequest();
//отправка POST
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200) {
                responsive = xmlhttp.responseText;// Ответ сервера

                thisTotalElem = btnClick.closest(".rating").querySelector('.rating__total');
                if (dataObj.post_like == "1") {
                    thisTotalElem.innerHTML = +thisTotalElem.innerHTML + 1;
                } else {
                    thisTotalElem.innerHTML = +thisTotalElem.innerHTML - 1;
                }

                console.log(responsive);// выводим ответ сервера
            } else if (xmlhttp.status == 400) {
                alert('Произошла ошибка 400');
            } else {
                alert('было возвращено что-то еще, кроме 200');
            }
        }
    };

    xmlhttp.open("POST", handler, true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xmlhttp.send(data);
}