        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>@yield('pageTitle')</title>
        <!-- Bootstrap core CSS -->
            <link href="/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
            <link href="/css/style.css" rel="stylesheet">

            @yield('css')

            @yield('headScript')
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- [if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
        </head>
        {{ setlocale(LC_ALL, 'id ID') }}
        <body>
        <div class="container" id="body">
            @include('template.title')

            @include('template.nav')
            {{--@include('template.pageTitle')--}}
            <div class="container" id="content">
