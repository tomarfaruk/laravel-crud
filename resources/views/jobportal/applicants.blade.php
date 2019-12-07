<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    @forelse ($applicants as $applicant)
        <div class="card" style="width: 18rem;">
            <img src="{{$applicant->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$applicant->fname}} {{$applicant->lname}}</h5>
                <p class="card-text">{{$applicant->email}}</p>
                <a href="/applicants/{{$applicant->id}}/edit" class="btn btn-primary">Update profile</a>
            </div>
        </div>
    @empty
        <p>No Job Post</p>
    @endforelse
</div>


</body>
</html>
