<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $content[0]->page_title }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/"><img src="{{ asset( $content[0]->logo ) }}" alt="Trisha H White"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>
        </ul>
        <ul class="navbar-nav nabbar-right">
            <li class="nav-item">
                <a class="nav-link" href="/" data-toggle="tooltip" title="Download My Resume"><i class="fal fa-cloud-download"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tooltip" title="Email Me" href="mailto:trisha@trishawhite.us"><i class="fal fa-at"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/trisha-white-06614222/" target="_blank" data-toggle="tooltip" title="My LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-DtPgXIYsUR6lLmJK14ZNUi11aAoezQtw4ut26Zwy9/6QXHH8W3+gjrRDT+lHiiW4" crossorigin="anonymous"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>