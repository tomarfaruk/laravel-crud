

@extends('app')

@section('title', 'customer view')
@section('content')


    <h3>Create Customer</h3>

<form action="/customer/{{$customer->id}}" method="post">
    @csrf

    @method('patch')
    <div>
        <input type="text" autocomplete="off" name="name" value="{{$customer->name}}">
    </div>*
    <div>
        <input type="email" autocomplete="off" name="email" value="{{$customer->email}}">
    </div>
    <button>Update</button>


</form>

<a href="/customer">View customer</a>

@endsection