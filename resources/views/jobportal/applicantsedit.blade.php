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
    <form action="/applicantsprofileupdate/{{$applicant->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row p-3">
            <div class="col">
                <input type="text" name="fname" value="{{$applicant->fname}}" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" name="lname" value="{{$applicant->lname}}" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="form-row p-3">
            <div class="col-md-6 col">
                <input type="email" name="email" value="{{$applicant->email}}" class="form-control" placeholder="email">
            </div>


        </div>
        <div class="form-row p-3">
            <div class="col-6">
                <label for="exampleFormControlFile1">profile picture</label>
                <input type="file" name="image" value="{{$applicant->image}}" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="col-6">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="file" value="{{$applicant->file}}" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


</body>
</html>
