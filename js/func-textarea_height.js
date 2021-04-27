// TODO textarea - auto height content подбирает высоту в зависимости от контента
function textarea_height(wrap_textarea){
    h_max = 0;
    $(wrap_textarea).on( 'keyup', 'textarea', function (e){
        $(this).css({'height' : 'auto', 'overflow-y':'hidden'});
        $(this).height( this.scrollHeight );
        if (h_max < parseInt(this.scrollHeight)){h_max = parseInt(this.scrollHeight)}
    });
    $(wrap_textarea).on( 'keyup', 'textarea', function (e){
        $(this).height(h_max);

    });
    $(wrap_textarea).find( 'textarea' ).keyup();
    console.log(h_max);
}