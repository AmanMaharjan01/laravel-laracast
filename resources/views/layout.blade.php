<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet"  />
    <link href="/css/fonts.css" rel="stylesheet"  />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
  <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{Request::is('/') ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{Request::is('clients') ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li class="{{Request::is('about') ? 'current_page_item' : '' }}"><a href="about" accesskey="3" title="">About Us</a></li>
                    <li class="{{Request::is('articles') ? 'current_page_item' : '' }}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                    <li class="{{Request::is('contact') ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>
        
@yield('content')

  
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>
</html>
