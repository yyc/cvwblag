<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> The CVWBlog </title>
<!--         <link rel="stylesheet" type="text/css" href="/css/app.css" /> -->
        <link href="css/geo.min.css" rel="stylesheet" id="style_sheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/js/jquery-2.1.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                function swapstyles(){
                    if($("#style_sheet").attr("href")=="css/geo.min.css"){
                        $("#style_sheet").attr("href","css/bootstrap.min.css");
                        $("#swapstyles").html("More Beautiful Layout");
                    } else{
                        $("#style_sheet").attr("href","css/geo.min.css");
                        $("#swapstyles").html("Less Beautiful Layout");
                    }
                }
                $("#swapstyles").click(swapstyles);
            });
        </script>
    </head>
    <body>
        <div class="container">
            <nav class = "navbar navbar-default">
                zis is ze navbar
                <div class="button">
                    <a id="swapstyles" >Less Beautiful Layout</a>
                </div>
            </nav>
        </div>
        <div class="container">
            
        </div>
        @yield("content")
</html>