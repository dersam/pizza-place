@extends('layout')

@section('content')
<p>Your pizza is on the way!</p>

<h3>Toppings:</h3>
@if($pizza->pepperoni == 0 && $pizza->olives == 0 && $pizza->sausage == 0)
(none)
@else
<ul>
@if($pizza->pepperoni == 1)<li>Pepperoni</li>@endif
@if($pizza->olives == 1)<li>Olives</li>@endif
@if($pizza->sausage == 1)<li>Sausage</li>@endif
</ul>
@endif

<p>We're sending it to:</p>
<address>
<strong>{{$customer->name}}</strong><br/>
{{$customer->address}}<br/>
{{$customer->city}}<br/>
{{$customer->province}}<br/>
{{$customer->postal_code}}<br/>
</address>

<p>If something goes wrong, we'll call you at: {{$customer->phone}}</p>
@stop