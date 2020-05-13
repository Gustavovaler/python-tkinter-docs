@extends('layouts.header')

@section('content')
<div class="container">	
    <h1 class="mt-4">Clase Tk()</h1>
    <h3>Método:  <i>config</i>(clave=valor)</h3>
    <div class="row">
        <div class="col-md-3">
            <ul>
                <li><a href="#bd">bd</a></li>
                <li><a href="#borderwidth">borderwidth</a></li>
                <li><a href="">class</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">relief</a></li>
                <li><a href="">screen</a></li>
                <li><a href="">use</a></li>
                <li><a href="">background</a></li>
                <li><a href="#bg">bg</a></li>
                <li><a href="">colormap</a></li>
                <li><a href="">container</a></li>
            </ul>
        </div>
        <div class="col-md-3">
        <ul>
            <li><a href="">cursor</a></li>
            <li><a href="">height</a></li>
            <li><a href="">highlightbackground</a></li>
            <li><a href="">highlightcolor</a></li>
            <li><a href="">highlightthickness</a></li>
            <li><a href="">padx</a></li>
            <li><a href="">pady</a></li>
            <li><a href="">takefocus</a></li>
            <li><a href="">visual</a></li>
            <li><a href="#width">width</a></li>
        </ul>
        </div>
        <div class="col-md-6">
        <img id="ej1" src="{{asset ('/img/ventana-ej1.png')}}" alt="">
        </div>
    </div>
   
    <hr>

    <div class="seccion-ventana mt-2">
        <!-- ********************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                bd
                </h5>
                <p class="card-text">
                    (int) <br>
                    Distancia de screen en pixeles. Es como un efecto punto de fuga donde la pantalla parece "hundirse" hacia adentro de la ventana.
                </p>
            </div>
            
        </div>
        <!-- ********************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                background  = bg
                </h5>
                <p class="card-text">
                    (str) <br>
                    Color de fondo de la ventana. Vea la lista de colores <a href="/colores">aqui.</a><br>
                    Tambien es posible colores en hexadecimal E.j "#ffccff"
                </p>
            </div>
            
        </div>
        <!-- ********************************************** -->
        <div class="card">
            <div class="card-body"  id="bg">
                <h5 class="card-title">
                bg = background
                </h5>
                <p class="card-text">
                    (str) <br>
                    Color de fondo de la ventana. Vea la lista de colores <a href="/colores">aqui.</a><br>
                    Tambien es posible colores en hexadecimal E.j "#ffccff"
                </p>
            </div>
            
        </div>
        <!-- ********************************************** -->
        <div class="card" id="borderwidth">
            <div class="card-body">
                <h5 class="card-title">
                borderwidth
                </h5>
                <p class="card-text">
                    (int) <br>
                    Ancho del borde de la ventana en pixeles. 
                </p>
            </div>
            
        </div>
        <!-- ********************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                height
                </h5>
                <p class="card-text">
                    (int) <br>
                    Alto de la ventana en pixeles. 
                </p>
            </div>
            
        </div>
        <!-- ********************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                padx
                </h5>
                <p class="card-text">
                    (int) <br>
                    Define un padding sobre el eje <b>x</b> de la ventana. 
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                pady
                </h5>
                <p class="card-text">
                    (int) <br>
                    Define un padding sobre el eje <b>y</b> de la ventana. 
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                relief
                </h5>
                <p class="card-text">
                    (str)  => flat, groove, raised, ridge, solid, or sunken <br>
                    Define un tipo de borde de la ventana. 
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                takefocus
                </h5>
                <p class="card-text">
                    (boolean)  <br>
                    Da el focus a la ventana.
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
        <div class="card"  id="width">
            <div class="card-body">
                <h5 class="card-title">
                width
                </h5>
                <p class="card-text">
                    (int)  <br>
                    Ancho de la ventana en pixeles.
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->


    </div><!-- seccion-ventana -->
    <hr>
    <div>
        <h3>Método:  <i>geometry</i> str => (ancho x alto + posX + posY)</h3>

        <!-- ******************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                Tk.geometry(ancho * alto + posX + posY)
                </h5>
                <p class="card-text">
                Ej: <br>
                ventana = Tk() <br>
                ventana.geometry("500x500+200+200") <br>
                <h6>Donde los 2 primeros parámetros son el ancho y el alto de la ventana y <br>
                    los otros 2 son la posicion en la pantalla del usuario.
                </h6>

                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
    </div>
    <hr>
    <div>
        <h3>Método:  <i>resizable</i> obj => {width=True, height=True}</h3>
    
        <!-- ******************************************** -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                Tk.resizable(width=True, height=True)
                </h5>
                <p class="card-text">
                Ej: <br>
                ventana = Tk() <br>
                ventana.resizable(width=False, height=False) <br>
                <h6>Si width es False el usuario no podra ajustar el ancho de la ventana <br>
                    Si height es False el usuario no podrá ajustar el alto de la ventana. <br>
                    Si se omite, el valor por defecto es True para ambos.
                </h6>
    
                </p>
            </div>
            
        </div>
        <!-- ******************************************** -->
    </div>





</div><!-- container -->

<div class="footer bg-secondary mt-5 p-5">
<div class="container">
    <h5>Copyright 2020</h5>
</div>


</div>

</body>
</html>
    
@endsection