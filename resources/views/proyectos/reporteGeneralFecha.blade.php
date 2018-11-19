@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <h1 align="center">REPORTE PROYECTOS</h1>

<!--    <div class="form-row">
        <!-- buscar por fechas inicio-->
  <!--      <div class='col-md-4'>
            <label>Fecha inicio:</label>
                <input placeholder="seleccione una fecha" type="text" id="fechaIni" name="fechaIni" class="form-control datepicker">
        </div>
       
        <div class='col-md-4'>
            <label>Fecha Fin:</label>
                <input placeholder="seleccione una fecha" type="text" id="fechaFin" name="fechaFin" class="form-control datepicker">
        </div>
        <!-- fin -->
    <!--    </div>
        <div class='col-md-4'>
            <button class="btn btn-cyan btn-rounded" id="buscar">
                <a href="/reporteGeneralFecha"><font color="white" size="3">BUSCAR</font></a>
			</button>
        </div>-->
		<div class="col-md-6 noPrint">
	    		
                <label class="sr-only" ></label>
                <div class="md-form input-group mb-3">
                <input type="text" class="form-control pl-0 rounded-0" id="Search1" type="text" placeholder="Buscar Proyectos...">
        </div>
	 </div> 
   <div class="col-md-6 text-right noPrint">
     <button type="button" class="btn btn-secondary" id="btn-imprimir">Imprimir</button>
   </div>

  <!---->
  <button type="button" class="btn btn-success" onclick="window.location='{{ url("reporteActivo") }}'">Estado Activo</button>
  <button type="button" class="btn btn-default" onclick="window.location='{{ url("reporteInactivo") }}'">Estado Inactivo</button>
 <!-- <button type="button" class="btn btn-info" onclick="window.location='{{ url("reporteCancelado") }}'">Estado Cancelado</button> -->
<!--
	<div class="form-row"> -->
		
	<!--	<div class="col-md-6 noPrint">
	    		
                <label class="sr-only" ></label>
                <div class="md-form input-group mb-3">
                <input type="text" class="form-control pl-0 rounded-0"  id="Search1"  type="text" placeholder="Buscar Proyectos...">
                </div>
                
                


	 </div>  
   <div class="col-md-6 text-right noPrint">
     <button type="button" class="btn btn-secondary" id="btn-imprimir">Imprimir</button>
   </div>   -->
        
	<div >
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th style="width: 15%"><font size="3">Codigo Proyecto</font></th>
		      <th style="width: 85% text-center" class="text-center"><font size="3">Descripcion de los Proyectos</font></th>
 	   </tr>
 	 </thead>
    
 	 <tbody id="table1">

 	   @foreach($proyectos as $proyecto)
 	   <tr data-id="{{ $proyecto->idProyecto }}">
              <td style="width: 15%" class="text-center"> 
              <?php        
    switch( $proyecto->idModalidad ) {
        case '1': echo 'TD'; break;
        case '2':  echo 'PG'; break;
        case '3': echo 'AD'; break;
        case '4':   echo 'TE'; break;
        case '5':   echo 'EX'; break;
    } 
?>{{ $proyecto->idProyecto }} </td>
              <td style="width: 85%"> 
                  <label ><strong>Titulo: </strong></label>  {{ $proyecto->titulo }} <br>
                  <label ><strong>Objetivos: </strong></label>  {{ $proyecto->objetivos }} <br>
                  <label ><strong>Descripción: </strong></label>  {{ $proyecto->descripcion }} <br>
                  <label ><strong>Estado del Proyecto: </strong></label>  {{ $proyecto->estado }} <br>
                  <label ><strong>Fecha Registro: </strong></label>  {{ $proyecto->fechaRegistroProy }} <br>
                  <label ><strong>Apellido Estudiante: </strong></label>  {{ $proyecto->apellidoEst }} <br>
                  <label ><strong>Nombre Estudiante: </strong></label>  {{ $proyecto->nombreEst }} <br>
                  <label ><strong>C.I. Estudiante: </strong></label>  {{ $proyecto->ciEst }} <br>
                  <label ><strong>Email Estudiante: </strong></label>  {{ $proyecto->emailEst }} <br>
                  <label ><strong>Telefono Estudiante: </strong></label>  {{ $proyecto->telefono }} <br>
                  <label ><strong>Carrera Estudiante: </strong></label>  {{ $proyecto->nombreCarrera }} <br>
                  <label ><strong>fecha inicio: </strong></label>  {{ $proyecto->fechaIni }} <br>
              </td>
        	</tr>
		  	@endforeach
		    
		  </tbody>
		</table>
    </div>
</div>
<style type="text/css">
    @media print {
        .side-nav, .page-footer, .noPrint {display:none;}
        .div-copia {display: "";}
    }
    @media screen {
        .div-copia {display: none;}
    }
    @page 
    {
        size:  auto;   /* auto es el valor inicial */
        margin: 0mm;  /* afecta el margen en la configuración de impresión */
    }
    @page :left {
        margin-left: 3cm;
        margin-right: 2cm;
        margin-top: 2cm;
        margin-bottom: 2cm;
    }

    @page :right {
        margin-left: 2cm;
        margin-right: 3cm;
        margin-top: 2cm;
        margin-bottom: 2cm;
    }
</style>
@endsection
@section('script')
              
  <script>
    $(document).ready(function(){
      //  $("#datepicker").datepicker();
 	$("#Search1").on("keyup", function() {
        




 	   var value = $(this).val().toLowerCase();
        
 	   $("#table1 tr").filter(function() {
 	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          
 	   }); }); });
//que hacer

//ahora
  
  
document.getElementById("btn-imprimir").onclick = function() {imprimir()};

    function imprimir() {
      console.log('le diste clic');
      window.print();
    }
</script>
@endsection