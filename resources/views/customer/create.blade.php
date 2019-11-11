@extends('app')

@section('title', 'this customer')

@section('content')

    <h3>Create Customer</h3>

<form action="/customer" method="post">
    @csrf
    <div>
        <input type="text" autocomplete="off" name="name" value="{{old('name')}}">
    </div>
    <div>
        <input type="email" autocomplete="off" name="email" value="{{old('email')}}">
    </div>
    <button>Create</button>


</form>

<a href="/customer">View customer</a>

@endsection