@extends('app')

@section('title', 'this about')

@section('content')


    <form action="/service" method="post">
        <input name="name" type="text" autocomplete="off">

        @csrf
        <button>add item</button>
    </form>

    @error('name') {{$message}} @enderror

    <ul>
        @forelse($services as $service)
            <li>{{$service->name}}</li>
        @empty
            <li>No services</li>
        @endforelse

    </ul>
@endsection