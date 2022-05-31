jQuery(document).ready(function ($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    var burgerMenu = document.getElementById('burger-menu');
    var overlay = document.getElementById('mobile-block');
    burgerMenu.addEventListener('click', function () {
        this.classList.toggle("close");
        overlay.classList.toggle("mobile-block_active");
    });
}); //конец ready