<div class="temper-table">
    <fieldset>
        <legend>Показания датчиков</legend>
        <input value="{{$current_date ?? ''}}" type="date" id="davaToday">
        <!--input type="button" value="Полный список" onclick="return change(this);" /-->
        <div class="scroll-table">

            <table>
                <tr>
                    <th rowspan=2 width="90">Bремя</th>
                    <th colspan=3>Температура</th>
                </tr>
                <tr>
                    <th>в доме </th>
                    <th>за окном</th>
                    <th>в теплице</th>
                </tr>
            </table>

            <div class="scroll-table-body">
                <div>
                    <table id="resposnse">
                        @include('components.temper_items')
                    </table>
                </div>
            </div>
        </div>
    </fieldset>
</div>

<script>

    $(document).ready(function (){
        setInterval(function () {
            let date = $('#davaToday').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/ajax/temper/date',          /* Куда пойдет запрос */
                method: 'post',             /* Метод передачи (post или get) */
                data: {date: date},


                success: function(outresp){
                        $('#resposnse').html(outresp)
                },
                error: function(e){
                    console.log('Error: ' + e);
                }
            })
        },20000)
    })

</script>
