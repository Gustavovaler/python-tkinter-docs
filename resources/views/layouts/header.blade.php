<!DOCTYPE html>
<html>
<head>
	<title>Tkinter Docs</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset ('css/main.css')}}">
</head>

<body>
	<div class="title bg-primary">
		<h2 class="text-white p-2 ml-4 mb-0">Manual libreria tkinter - Python</h2>
	</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Wiki</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="{{url ('/')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url ('/clase_tk')}}">Clase Tk</a>
      </li>
      <li class="nav-item">
      	      <li class="nav-item">
        <a class="nav-link" href="{{url ('/widgets')}}">Widgets</a>
      </li>
      
        <a class="nav-link" href="{{ url ('/colores')}}">Colores</a>
      </li>
    </li>
      
    <a class="nav-link" href="{{ url ('/posicionamiento')}}">Posicionamiento</a>
  </li>
   
    </ul>
  </div>
</nav>
@yield('content')