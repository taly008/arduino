@foreach($data ?? [] as $item)
    <tr>
        <td>{{$item->datatime->format('H:i')}}</td>
        <td>{{$item->dom}}</td>
        <td>{{$item->ulica}}</td>
        <td>{{$item->teplica}}</td>
    </tr>
@endforeach

