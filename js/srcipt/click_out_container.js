// клик вне элемента
jQuery(document).mouseup(function(e) {
    // что отслеживаем
    var container = jQuery("#sa_modal_container");

    // если нажато вне элемента и если не потомок
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        // вне элемента нажал
        console.log('снаружи');
    } else {
        // внутри элемента
        console.log('внутри');
    }
});