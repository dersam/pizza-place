@extends('layout')

@section('content')
<blockquote>1. Select your pizza toppings!</blockquote>
{{Form::open(array('route' => 'order-complete'))}}
<div class="row">
    <div class="input-control checkbox">
        <label>
            <input type="checkbox" name="pepperoni" @if(Input::get('pepperoni')=='on') checked @endif/>
            <span class="check"></span>
            Pepperoni
        </label>
    </div>
    <div class="input-control checkbox">
            <label>
                <input type="checkbox" name="olives"  @if(Input::get('olives')=='on') checked @endif/>
                <span class="check"></span>
                Olives
            </label>
    </div>
    <div class="input-control checkbox">
            <label>
                <input type="checkbox" name="sausage" @if(Input::get('sausage')=='on') checked @endif/>
                <span class="check"></span>
                Sausage
            </label>
    </div>
</div>

<blockquote>2. Enter your address!</blockquote>
<div class="input-control text">
Name
    <input type="text" value="{{Input::get('name')}}" id="name" name="name" placeholder="Name"/>
</div>
<br/>
<br/>
<div class="input-control text">
Address
    <input type="text" value="{{Input::get('address')}}" id="address" name="address" placeholder="Address"/>
</div>
<br/>
<br/>
<div class="input-control text span5">
City
    <input type="text" value="{{Input::get('city')}}" id="city" name="city" placeholder="City"/>
</div>
<br/>
<br/>
<div class="input-control select span5">
Province
    <select id="province" name="province">
    	<option value="AB">Alberta</option>
    	<option value="BC">British Columbia</option>
    	<option value="MB">Manitoba</option>
    	<option value="NB">New Brunswick</option>
    	<option value="NL">Newfoundland and Labrador</option>
    	<option value="NS">Nova Scotia</option>
    	<option value="ON">Ontario</option>
    	<option value="PE">Prince Edward Island</option>
    	<option value="QC">Quebec</option>
    	<option value="SK">Saskatchewan</option>
    	<option value="NT">Northwest Territories</option>
    	<option value="NU">Nunavut</option>
    	<option value="YT">Yukon</option>
    </select>
</div>
<br/>
<div class="input-control text span3">
Postal Code
    <input type="text" value="{{Input::get('postal_code')}}" id="postal_code" name="postal_code" placeholder="Postal Code"/>
</div>
<br/>
<br/>
<div class="input-control text span3">
Phone
    <input type="text" value="{{Input::get('phone')}}" id="phone" name="phone" placeholder="Phone"/>
</div>
<br/>
<br/>
<input type="submit" onclick="return validateForm();" value="Send me a pizza!"/>


{{Form::close()}}
@stop