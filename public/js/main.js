function showUser(str) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/ajax/temper/date',         /* Куда пойдет запрос */
        method: 'post',             /* Метод передачи (post или get) */
        dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
        data: { date : str },     /* Параметры передаваемые в запросе. */
        success: function(resp){
            $("#resposnse").html(resp);
        },
        error: function(e){
            console.log('Error: ' + e);
        }
    });
}

$(document).on('change', '#davaToday', function(){
    showUser($(this).val());
});

function change( el )
{
    if ( el.value === "Полный список" )
    { el.value = "Текущий день";
        showUser('Полный список');
    }
    else
    { el.value = "Полный список";
        showUser('Текущий день');
    }


}
