@extends('app')

@section('title', 'customer view')
@section('content')
<h3>Customers</h3>

@forelse($customers as $customer)
    <p>Name: {{$customer->name}} Email: {{$customer->email}}
        <a href="/customer/{{$customer->id}}/edite"> edit</a>

    <form action="/customer/{{$customer->id}}" method="post">
        @csrf
        @method('delete')
        <button>Delete</button>
    </form>
    </p>
@empty
    <p>No customer</p>

@endforelse

<a href="/customer/create">Create customer</a>

@endsection