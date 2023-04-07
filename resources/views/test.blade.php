<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
{{--    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">--}}
    @vite('resources/css/app.css')
    <script defer src="{{ mix('resources/js/app.js') }}"></script>
</head>
<body>
<h1>Hi there</h1>
<section class="hidden">
    <div>
        <h1>Lorem ipsum.</h1>

    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, sed.</p>
    </div>
</section>
<section class="hidden">
    <div>
        <h1>Lorem ipsum.</h1>

    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, sed.</p>
    </div>
</section>
<section class="hidden">
    <div>
        <h1>Lorem ipsum.</h1>

    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, sed.</p>
    </div>
</section>
<section class="hidden">
    <div>
        <h1>Lorem ipsum.</h1>
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, sed.</p>
    </div>
</section>


<section>
    <div class="logos">
        <div class="logo hidden">
            <img src="{{ mix('resources/images/horse.jpg') }}" alt="" width="100px">
        </div>
        <div class="logo hidden">
            <img src="{{ mix('resources/images/horse.jpg') }}" alt="" width="100px">

        </div>
        <div class="logo hidden">
            <img src="{{ mix('resources/images/horse.jpg') }}" alt=""  width="100px">
        </div>
    </div>
</section>
</body>
</html>
