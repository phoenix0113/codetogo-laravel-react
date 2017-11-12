<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$page->question()}}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('_partials.header')

    <div class="container">

        <div class="card">
            <h2>{{$page->question()}}</h2>
            <h5>Last updated {{$page->date}}</h5>
            @yield('content')

            @if ($page->link)
            <a href="{{$page->link}}" target="_blank">MDN Docs</a>
            @endif
        </div>
    </div>

    <script async src="/js/all.js"></script>
</body>
</html>
