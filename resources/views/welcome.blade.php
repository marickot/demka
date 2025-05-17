@extends('main')

@section('content')

<div class='cont'>
<h1>Мои заявки</h1>
<a href="{{route('new_task')}}">оставить заявку</a>
</div>
<div class='overflow'>
<table>
  <tr>
    <th>ФИО</th>
    <th>АДРЕС</th>
    <th>ТЕЛЕФОН</th>
    <th>ДАТА</th>
    <th>ВРЕМЯ</th>
    <th>ТИП УБОРКИ</th>
    <th>ТИП ОПЛАТЫ</th>
    <th>СТАТУС</th>
  </tr>
<tr>
@foreach($orders as $order)
<td>{{$order->name}}</td>
<td>{{$order->address}}</td>
<td>{{$order->phone}}</td>
<td>{{$order->date}}</td>
<td>{{$order->time}}</td>
<td>{{$order->type}}</td>
<td>{{$order->type_of_payment}}</td>
<td>{{$order->status}}
@if($order->status == 'отклонено')
<br> причина - {{$order->desc?->description}}
@endif
</td>
</tr>
@endforeach
</div>
@endsection