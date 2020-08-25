$( document ).ready(function() {
    /*Обрезка даты*/
    $('.time').each(function( index ) {
        var text = $( this ).text();
        var data = text.split(' ');
        $( this ).text(data[0]);
    });

    /*Статус счетчиков*/
    $('.status').each(function ( index ) {
        var text = $(this).text();
        if (text == 'Саботаж'){
            $(this).css({"backgroundColor":"red"});
        } else {
            $(this).css({"backgroundColor":"green"});
        }
    });

    /*скрытие пустых*/
    $('.counter').each(function ( index ) {
        var target = $(this).find('.status').text();
        if (target == ''){
            $( this ).css({"display":"none"});
        }
    });

});
