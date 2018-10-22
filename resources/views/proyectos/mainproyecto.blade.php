@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <h1 align="center">PROYECTOS</h1>
<div class="container">
	<div class="form-row">
		
		<div class="col-md-6">
	    		
                <label class="sr-only" ></label>
                <div class="md-form input-group mb-3">
                <input type="text" class="form-control pl-0 rounded-0" id="Search1" type="text" placeholder="Buscar Proyectos...">
                </div>
	    </div>    	
        <div class="col-md-3" ></div>

    	
    	<div class="col-md-3" align="right">
            <!-- <button class="btn btn-indigo">
    		    <a href="/create"><font color="white" size="2">NUEVO PROYECTO</font></a>
            </button> -->
			<button class="btn btn-cyan btn-rounded">
                <a href="/create"><font color="white" size="3">NUEVO PROYECTO</font></a>
			</button>
    	</div>
    </div>
	<div class="tablaScroll4">
		<table class="table table-striped tablaScroll4">
		  <thead>
		    <tr>
		      <th style="width: 10%"  class="text-center"><font size="3">Codigo</font></th>
		      <th style="width: 35%"><font size="3">Nombre Proyecto</font></th>              
		      <th style="width: 35%"><font size="3">Area Proyecto</font></th>                   
              <th style="width: 10%"><font size="3">Estado</font></th>
		      <th style="width: 10%"><font size="3"  class="text-center">Acciones</font></th>   
 	   </tr>
 	 </thead>
    
 	 <tbody id="table1">

 	   @foreach($proyectos as $proyecto)
 	   <tr data-id="{{ $proyecto->idProyecto }}">
              <td style="width: 10%" class="text-center"> {{ $proyecto->idProyecto }} </td>  <!--10-->
              <td style="width: 35%"> {{ $proyecto->titulo }} </td>                              <!--35-->
              <td style="width: 35%">                                                       <!--35-->
               @foreach($proyecto->proyecto_has_area as $pha)
                   {{ $pha->area->nombreArea }},
               @endforeach
               </td>
               <td style="width: 5%;text-transform: capitalize;">
               @foreach($proyecto->proyecto_estudiante as $pha)
                   {{ $pha->estado }}
               @endforeach
                </td>
  	            <td style="width: 15%"  class="text-center">
          <!-- <a class="btn-floating btn-sm btn-blue btn-modal-edit"  href="/proyecto/edit/{{$proyecto->idProyecto}}" data-toggle="tooltip" data-placement="top" title="modificar">
        			<i class="fa fa-edit mt-2 ml-1 fa-lg"></i></a>  -->
            <a class="btn-floating btn-sm btn-green btn-modal-show" data-toggle="tooltip" data-placement="top" title="infoEstudiante"><i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
            <a class="btn-floating btn-sm btn-blue btn-modal-edit"  href="/proyectos/edit/{{ $proyecto->idProyecto }}" data-toggle="tooltip" data-placement="top" title="editar"> <i class="fa fa-edit mt-2 ml-1 fa-lg"></i>
                                   <!-- "proyectos/{idProyecto}/edit"  -->
      <!--   <a class="btn-floating btn-sm btn-mdb-color"  href="/proyectos/edit/{{ $proyecto->idProyecto }}" data-toggle="tooltip" data-placement="top" title="editar"> -->
              	<a class="btn-floating btn-sm btn-mdb-color"  href="/proyecto/detalle/{{ $proyecto->idProyecto }}" data-toggle="tooltip" data-placement="top" title="ver">
        				<!-- <a href="proyectos/{idProyecto}/edit" class="btn btn-warning btn-xs">Modificar  </a>  -->   
              <!--  <a href="" class="btn btn-danger btn-xs">Eliminar  </a>   -->  
                 <i class="fa fa-eye mt-2 ml-2 fa-lg"></i></a>
              </td>
        	</tr>
		  	@endforeach

		 

		  </tbody>
		</table>
    </div>




<!---hasta aqui-->
<!--- desde aqui-->
<!-- Modal agregar y modificar estudiante -->
<div class="modal fade" id="modal-estudiante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-primary modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">Estudiante</p>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
            </div>
           <!--Body-->
           <div class="modal-body">
              <p class="red-text">*Obligatorio</p>
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="nombre" placeholder="Nombre">
                           <label for="nombre">Nombre <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="apellidos" placeholder="Apellidos">
                           <label for="apellidos">Apellidos <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

               <!-- Grid row -->
               <div class="row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="ci" placeholder="CI">
                           <label for="ci">CI <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                            <input type="number" class="form-control validate" id="telefono" placeholder="Telefono">
                            <label for="telefono">Telefono <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="email" class="form-control validate" id="email" placeholder="Email">
                           <label for="email">Email <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group" id="carreradiv">
                            <select class="mdb-select colorful-select dropdown-primary col-md-12" id="carrera">
                               <option value="" selected disabled>Seleccionar una opcion</option>
                               <option value="2">Ingenieria en Sistemas</option>
                               <option value="1">Ingenieria Informatica</option>
                           </select>
                           <label for="carrera">Carrera <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->               
           </div>
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              <!-- <button class="btn btn-indigo" id="modal-agregar-btn">Guardar</button>  -->
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>



<!---hasta aqui-->
</div>
             
@endsection
@section('script')
              
  <script>  //Buscar Proyectos
 //desde aqui
 // SCRIPT PARA AGREGAR ESTUDIANTE EN EL MODAL
 
   
    //Buscar Proyectos------------
 //desde aqui
// SCRIPT PARA EDITAR ESTUDIANTE EN EL MODAL
   $(document).on('click', '.btn-modal-show', function() {
       $.get('/estudiante/'+$($(this).parents("tr")).data('id'), function(data){
           $('#ci').val(data.estudiante.ciEst);
           $('#nombre').val(data.estudiante.nombreEst);
           $('#apellidos').val(data.estudiante.apellidoEst);
           $('#email').val(data.estudiante.emailEst);
           $('#telefono').val(data.estudiante.telefono);
           console.log($('#carrera')[0][1]);
           $($('#carrera')[0][0]).removeAttr('selected');
           if (data.estudiante.idCarrera == 1) {
               $($('#carrera')[0][1]).attr('selected','');
           }
           else{
               $($('#carrera')[0][2]).attr('selected','');
           }
           // $('#carrera').val(data.estudiante.idCarrera);
       });
       type_ = 'PUT';
       url_ = '/estudiante/'+$($(this).parents("tr")).data('id');
       $('#carreradiv').attr('hidden', 'hidden');

       $('#modal-estudiante').modal('show');
   });

   //hasta aqui



   $(document).ready(function(){
 	 $("#Search1").on("keyup", function() {
 	   var value = $(this).val().toLowerCase();
 	   $("#table1 tr").filter(function() {
 	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 	   });
 	 });
    });
   
  </script>
  

@endsection