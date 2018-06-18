<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('/default.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
   <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><span class="fa fa-bolt"></span><a href="#">Тест для каждого</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="{{ url('/') }}" accesskey="1" title="">Главная</a></li>
				<li><a href="#" accesskey="2" title="{{ url('/home') }}">Результаты</a></li>
				<li><a href="#" accesskey="3" title="">Тест</a></li>
				<li><a href="#" accesskey="4" title="">О авторе</a></li>
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}" accesskey="4" title="">Зайти</a></li>
					<li><a href="{{ url('/register') }}" accesskey="4" title="">Регистрация</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="selected_login">
						{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
                     </li>
                    @endif
			</ul>
		</div>
	</div>
</div>





<div id="wrapper">
	<div id="featured-wrapper">
	  @yield('content')
		<!--<form >
 			  <p><h1 id="message">Ты добрый?</h1></p>
   			 <p><input name="character" type="radio" value="добрый"> Да</p>
   			 <p><input name="character" type="radio" value="злой"> Нет</p>
   			 <p><button onclick="answer();return false;" >Выбрать</button></p>
  		</form> -->
	</div> 
</div>

<div class="results">Ждем ответа</div>




<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
