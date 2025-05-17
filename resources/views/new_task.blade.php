@extends('main')
@section('content')
<p class="name_form">Оставить заявку</p>
<form action="{{route('create_task')}}" class="register" method='POST'>
@csrf
<label for="address">Адрес</label>
<input type="text" name="address" id="" required>

<label for="name">Имя</label>
<input type="tel" name="name" id=""  value="{{Auth::user()->full_name}}" required>

<label for="phone">Телефон</label>
<input type="tel" name="phone" id="" value="{{Auth::user()->phone}}" required>

<label for="date">Дата</label>
<input type="date" name="date" id="" required>

<label for="time">Время</label>
<input type="time" name="time" id="" required>
<label for="type">Тип уборки</label>
<select name="type" id="">
    <option value="общий клининг">общий клининг</option>
    <option value="генеральная уборка">генеральная уборка</option>
    <option value="послестроительная уборка">послестроительная уборка</option>
    <option value="химчистка ковров и мебели">химчистка ковров и мебели</option>
</select>
<label for="type_of_payment">тип оплаты</label>
<select name="type_of_payment" id="">
    <option value="наличные">наличные</option>
    <option value="карта">карта</option>
</select>
<button type="submit">оставить заявку</button>
</form>
@endsection