@extends('layouts.app')

@section('content')
    
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votación</title>


    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">


    </head>



    <style>

    body{


    background-image: url(img/fondo.jpg);


    background-size: 100%;


    }
        
    .contenedor{

    border-color: black;
    border:20px;
    margin-top: 20px;
    margin: 50px auto;
    border-radius: 10px;
    margin-right: 25%;
    margin-left: 25%;
    width: 50%;
    height: 500px;




    }

    .contenedor:hover{

    transition: .8s;
    background-color:rgba(0,0,0 ,.2);
    box-shadow:inset;
    

    }


    .boton{

    float: right;

    }


    </style>

    <body>


    <script src="js/jquery-1.11.3.min.js"></script>


    <script src="js/bootstrap.js"></script>
    </body>
    </html>

@endsection