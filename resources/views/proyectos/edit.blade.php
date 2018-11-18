@extends('layouts.app')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-12 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Actualizar Proyecto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						
        
		<form method="post" action="{{action('ProyectoController@update', $proyectos)}}">            	
                            {{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
									<label for="titulo">Titulo <b class="h7 red-text">*</b></label>	
										<input type="text" name="titulo" id="titulo" class="form-control input-sm" value="{{$proyectos->titulo}}">
										
									</div>
								</div>
								
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
									<label for="objetivos">Objetivos <b class="h7 red-text">*</b></label>	
										<input type="text" name="objetivos" id="objetivos" class="form-control input-sm" value="{{$proyectos->objetivos}}">
									</div>
								</div>
						</div>
 
							<div class="form-group">
							<label for="descripcion">Descripcion <b class="h7 red-text">*</b></label>	
								<textarea name="descripcion" class="form-control input-sm"  placeholder="descripcion">{{$proyectos->descripcion}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
									<label for="fechaRegistroProy">Fecha Registro <b class="h7 red-text">*</b></label>	
										<input type="text" name="fechaRegistroProy" id="fechaRegistroProy" class="form-control datepicker"  value="{{$proyectos->fechaRegistroProy}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
							<label for="periodo">Periodo <b class="h7 red-text">*</b></label>	
								
								<input type="text" name="periodo" id="periodo" class="form-control input-sm" value="{{$proyectos->periodo}}">
							</div>
                     </div> 
							</div>
							
                    <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
									<label for="sesionDeConsejo">sesionDeConsejo <b class="h7 red-text">*</b></label>	
										<input type="text" name="sesionDeConsejo" id="sesionDeConsejo" class="form-control input-sm" value="{{$proyectos->sesionDeConsejo}}">
									</div>
								</div>
								
							</div>



							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('proyectos.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
                       </div>


					   
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection