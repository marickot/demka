@extends('main')

@section('content')
<h1>Здравствуйте, {{Auth::user()->full_name}}</h1>
<div class="overflow">
<table>
  <tr>
    <th>ФИО</th>
    <th>АДРЕС</th>
    <th>ТЕЛЕФОН</th>
    <th>ДАТА</th>
    <th>ВРЕМЯ</th>
    <th>ТИП УБОРКИ</th>
    <th>ТИП ОПЛАТЫ</th>
    <th>СТАТУС ЗАЯВКИ</th>
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
<td>
@if($order->status == 'новое' or $order->status == 'в работе')
    <form action="/admin/{{$order['id']}}" method='POST'>
      @csrf
      <div style='display:flex; flex-direction:column;'>
          <label for="status">Текущий статус - {{$order->status}}</label>

            <fieldset>
                <legend>Смените статус заявки:</legend>
                <div>
                  <input type="radio" id="в работе" name="status" value="в работе" checked />
                  <label for="в работе">в работе</label>
                </div>

                <div>
                  <input type="radio" id="выполнено" name="status" value="выполнено" />
                  <label for="выполнено">выполнено</label>
                </div>

                <div class="checked">
                  <input type="radio" id="отклонено" name="status" value="отклонено" />
                  <label for="отклонено">отклонено</label>
    
                <div class="toggle">
                    Укажите причину отказа:<br>
                    <input type="text" name="description" value="нет свободных мастеров">
                </div>
</div>
</fieldset>
<button class='chs' type="submit">сменить статус</button>
      </div>
    </form>
@endif
@if($order->status == 'выполнено')
<label for="status">Выполнено</label>
@endif
@if($order->status == 'отклонено')
<label for="status">отклонено. причина - {{$order->desc?->description}}</label>
@endif
</td>
</tr>
@endforeach
</table>
</div>
@endsection