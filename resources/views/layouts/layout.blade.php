<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.8.3/dist/paper.min.css">
    <link rel="stylesheet" href="/css/demo-paper.css">
    <title>Document</title>
</head>
<body cz-shortcut-listen="true">
<div id="top" class="row site">
    <div class="sm-12 md-8 col">
        <div class="paper">
            <div class="demo-title">
                <div class="row flex-center">
                    <div class="text-center">
                        <h1>Čevený dům </h1>
                        <h3>Benešov</h3>
                    </div>
                </div>
            </div>
            <div class="section">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="sm-12 md-4 col sidebar">
        <div class="paper">
            @include('layouts.sidebar')
        </div>
    </div>
</div>


</body>
</html>
