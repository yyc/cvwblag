<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> The CVWBlog </title>
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link href="/css/geo.min.css" rel="stylesheet" id="style_sheet">
        <link href="/css/bootstrap-switch.min.css" rel="stylesheet"></head>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/js/jquery-2.1.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap-switch.min.js"></script>
        <script src="/js/app.js"></script>
    </head>
    <body>
        <div class = "navbar navbar-default">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="/index">CVWBlag</a>
                    <ul class="nav navbar-nav pull-right">
                        @if(Auth::check())
                        <li>
                            <a href="/new">Post</a>
                        </li>
                        <li>
                            <a href="/logout">Log Out</a>
                        </li>
                        @else
                        <li>
                            <a href="/register">Register</a>
                        </li>
                        <li>
                            <a href="/login">Log In</a>
                        </li>
                        @endif
                        <li>
                            <a id="swapstyles" >Less Beautiful Layout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            
        </div>
        @yield("content")
</html>