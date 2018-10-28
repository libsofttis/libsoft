<!DOCTYPE html>
<html lang="en">
   <head>
       @include('layouts.htmlheader')
       <style>
           .carousel,.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item,.view,body,html{height:100%}.navbar{background-color:rgba(0,0,0,.2)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}
          a{
            
            color: white;         
        }   


       </style>
   </head>
   <body class="fixed-sn cyan-skin">
       <!-- Navbar -->
       <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
           <div class="container">
               <!-- Brand -->
               <a class="navbar-brand" href="#">
                   <strong>SISTEMA DE REGISTRO DE PROYECTOS</strong>

                </a>
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        
                        @if(auth()->guest())
                        <li class="nav-item">
                            <a href="{{url('login')}}" class="nav-link border border-light rounded">
                                <i class="fa fa-lock mr-2"></i>Iniciar Sesion
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{url('/home')}}" class="nav-link border border-light rounded">
                                <i class="fa fa-home mr-2"></i>Home
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                <li data-target="#carousel-example-1z" data-slide-to="5"></li>
                <li data-target="#carousel-example-1z" data-slide-to="6"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                
                   
             <!--date slide 0--->      
                   <div class="carousel-item active" style="background-color: #000000" >
                    <div>
                       
                     <!--  <img src="img/fondSin1.png" align="lefth"   width="1550" height="820" usemap="#mapeo" style="background-color: #000000">
    anterios  -->
                    <table  cellspacing="20">
                        <tr>
                            <td rowspan="2" align="center"> <img src="img/fil0.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td   align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
                        </tr>
                       <tr>
              <td>
            
            
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                
            
            
                </td>
            </tr>
        </table>  
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                
                
                
                
             <!--date slide 1--->    
                <div class="carousel-item" style="background-color: #304ffe">
                    <div>
                       
         <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil1.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0"  class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
            
                </td>
            </tr>
        </table>  
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask   indigo accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                               
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
            <!--date slide 2--->    
             <div class="carousel-item" style="background-color: #6200ea">
                    <div>
             <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil2.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                </td>
            </tr>
        </table>           
                      
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask deep-purple accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                <!--/Third slide-->
                <!--slide 3-->
                <div class="carousel-item" style="background-color: #6200ea">
                    <div>
             <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil3.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                </td>
            </tr>
        </table>           
                      
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask deep-purple accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                
            <!--slide 4--> 
               <div class="carousel-item" style="background-color: #6200ea">
                    <div>
             <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil4.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                </td>
            </tr>
        </table>           
                      
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask deep-purple accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                
                
                <!--slide 5-->
                <div class="carousel-item" style="background-color: #6200ea">
                    <div>
             <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil5.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                </td>
            </tr>
        </table>           
                      
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask deep-purple accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                <!--slide 6-->
                
                <div class="carousel-item" style="background-color: #6200ea">
                    <div>
             <table  cellspacing="20">
            <tr>
                <td rowspan="2" align="center"> <img src="img/fil6.png" align="lefth"   width="1000" height="650" usemap="#mapeo"> </td><td  width="350" height="200" align="center" valign="bottom"><img src="img/logo.png" width="350" height="120" align="top"></td>
            </tr>
           <tr>
              <td>
                <a href="#carousel-example-1z" data-slide-to="0" class="nav-link border border-light rounded" title="paso 1">
                <i class="fa fa-check-square"></i>Estar inscrito en la materia de perfil </a>   
                
                <a href="#carousel-example-1z" data-slide-to="1"  class="nav-link border border-light rounded" title="paso 2">
                <i class="fa fa-check-square"></i>Llenar el formulario</a>
            
                
                <a href="#carousel-example-1z" data-slide-to="2"  class="nav-link border border-light rounded" title="paso 3">
                <i class="fa fa-check-square"></i>Tener la aprobacion del tutor </a>
                
                <a href="#carousel-example-1z" data-slide-to="3"  class="nav-link border border-light rounded" title="paso 4">
                <i class="fa fa-check-square"></i>Elaborar una carta para el director de carrera </a>
                
                <a href="#carousel-example-1z" data-slide-to="4" class="nav-link border border-light rounded" title="paso 5">
                <i class="fa fa-check-square"></i>Enviar la carta y el formulario de direccion</a> 
                
                <a href="#carousel-example-1z" data-slide-to="5"  class="nav-link border border-light rounded" title="paso 6">
                <i class="fa fa-check-square"></i>Obtencion de firma de carrera </a> 
                
                <a href="#carousel-example-1z" data-slide-to="6"  class="nav-link border border-light rounded" title="paso 7">
                <i class="fa fa-check-square"></i>Registro en la pagina del CS</a> 
                </td>
            </tr>
        </table>           
                      
                       
                        <!-- Mask & flexbox options-->
                        <div class="mask deep-purple accent-4  d-flex justify-content-center align-items-center">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                <strong></strong>
                                </h1>
                                <p>
                                    <strong></strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>
                                
                            </div>
                            <!-- Content -->
                        </div>
                        <!-- Mask & flexbox options-->
                    </div>
                </div>
                
            </div>
           
        </div>
        <!--/.Carousel Wrapper-->
        <!--title de los procesos a seguir-->
        <map name="mapeo">
            <area shape="circle" coords="120,560,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="primer paso" title="uno de los primeros pasos es tomar la materia de perfil para el aprendizaje y elaboracion del proyecto con el docente deseado como requerimiento el estudiante debe tener aprobadas todas las materias que se encuentran en los semestres inferiores al nivel de la misma (aprobación hasta el octavo semestre de la actual malla curricular) o aprobación de por lo menos el 80% de las materias de la Carrera 
            para mas informacion haga click ">
        
            <area shape="circle" coords="307,450,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="segundo paso" title="es preciso el llenar el formulario que sera como el borrador del perfil que debera ser revisado y corregido por el tutor, en el area del conocimiento del perfil. 
            para mas informacion haga click">
            
            <area shape="circle" coords="423,445,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="tercer paso" title="El borrador del perfil deberá ser elaborado por el estudiante con el apoyo académico del docente, en el área de la metodología de la investigación siendo asi revisado y corregido por el tutor, en el área del conocimiento del perfil, deberá cumplir todas las etapas del cronograma de elaboracion de perfil, de manera obligatoria..
            para mas informacion haga click ">
            
              
            <area shape="circle" coords="530,343,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="cuarto paso" title="se debera realizar una carta para el director de carrera con las especificaciones necesarias  
            para mas informacion haga click ">
            
            <area shape="circle" coords="680,320,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="quinto paso" title="hacer el envio de la carta propiamente con el formulario previamente realizado para la ceptacion 
            para mas informacion haga click ">
            
            <area shape="circle" coords="784,230,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="sexto paso" title="es necesario la firma de aprobacion del proyecto de investigacion a realizar  
              para mas informacion haga click">
               
            <area shape="circle" coords="910,128,45" href="http://www.cs.umss.edu.bo/archivos/reglamentoTitulacionCarrerasNuevoModif.pdf" alt="septimo paso" title="aprobado el proyecdo de investigacion se debe realizar el registro en el CS
            para mas informacion haga click ">
            
            
            </map>
        
      

       @include('layouts.scripts')
   </body>
</html>
