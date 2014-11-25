<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tetm</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Tandil es tenis de mesa </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    {if isset($usuario)} 
                    <li class="dropdown">
                      <a id="btn-jugadores" data-toggle="dropdown" class="dropdown-toggle">Jugadores <b class="caret"></b></a>
                        <ul class="dropdown-menu"data-no-collapse="true">

                            <li><a href="index.php?action=listarJugadores&nac=Mundial">Mundiales</a></li>
                            <li><a href="index.php?action=listarJugadores&nac=Nacional">Nacionales</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a id="btn-jugadores" data-toggle="dropdown" class="dropdown-toggle">Materiales <b class="caret"></b></a>
                        <ul class="dropdown-menu"data-no-collapse="true">

                            <li><a href="index.php?action=listarMateriales&id_mat=0">Gomas</a></li>
                            <li><a href="index.php?action=listarMateriales&id_mat=1">Maderas</a></li>
                        </ul>
                    </li>
                   
                    
                       <li>
                        <a class="page-scroll" href="#calendario">Calendario</a>
                       </li>
                    <li class="dropdown">
                      <a id="btn-jugadores" data-toggle="dropdown" class="dropdown-toggle">{$usuario} <b class="caret"></b></a>
                        <ul class="dropdown-menu"data-no-collapse="true">

                          <li><a href="index.php?action=logout">Salir</a></li>
                        
                            
                        </ul>
                    </li>
                    {/if} 
                    {if !isset($usuario)}
                    <li>
                        <!-- <a class="page-scroll" href="#login">Ingresar</a> -->
                        <a class="page-scroll" href="#contact">Ingresar</a>
                    </li>

                    {/if}
                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>