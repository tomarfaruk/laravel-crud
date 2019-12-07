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
    @forelse ($jobs as $job)
        <div class="card border-dark mb-3" style="max-width:  28rem;">
            <div class="card-header"><a href="/jobdetails/{{$job->id}}">Job title: {{$job->title}}</a> </div>
            <div class="card-header"><a href="/companyprofile/{{$job->company->id}}">Company name: {{$job->company->company_name}}</a> </div>
            <div class="card-body text-dark">
                <h5 class="card-title">Location: {{$job->location}} | {{$job->country}}</h5>
                <p class="card-text">Description: {{$job->desc}}</p>
            </div>
        </div>
    @empty
        <p>No Job Post</p>
    @endforelse
</div>


</body>
</html>
