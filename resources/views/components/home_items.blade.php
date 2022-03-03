<div>
<div>    Температура на <span class="js-insert-time" >{{$data->datatime->format('H:i:s')}}</span> </div>
<div>    в доме  <span class="js-insert-dom" style="background-color:{{getRGBFromTemper($data->dom)}};font-size:24px">  {{$data->dom}} </span></div>
<div>    за окном <span class="js-insert-ulica" style="background-color:{{getRGBFromTemper($data->ulica)}};font-size:24px"> {{$data->ulica}} </span></div>
<div>    в теплице <span class="js-insert-teplica" style="background-color:{{getRGBFromTemper($data->teplica)}};font-size:24px"> {{round($data->teplica,2)}} </span></div>
</div>
    <div id="gisDataWrapper"></div>
<script src="/js/gisWeather.js"></script>

<script>

    $(document).ready(function (){
        setInterval(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/ajax/temper/getHomeTemper',         /* Куда пойдет запрос */
                method: 'post',             /* Метод передачи (post или get) */
                success: function(resp){

                        $('.js-insert-time').html(resp.date)
                        $('.js-insert-dom').html(resp.dom)
                        $('.js-insert-ulica').html(resp.ulica)
                        $('.js-insert-teplica').html(resp.teplica)
                },
                error: function(e){
                    console.log('Error: ' + e);
                }
            })
        },20000)
    })

</script>
