@extends('layouts.app')
@section('content')

<h1 align="center">Registro de Carreras/Facultades</h1>
                      
<div class="group form-row" style=margin-top:40px;></div>
   <div class="form-row">
       <div class="col-md-8" ></div>     
           
           <button type="button" class="btn btn-cyan btn-rounded" onclick="window.location='{{ url("carreras") }}'">Carreras Registradas</button>
</div>

          
<form action="/carreras" method="POST" role="form">

 {{ csrf_field() }}

 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>

   @endforeach
 </ul>
</div>
@endif


<div class="form-row">
<div class="col-md-12">
<div class="md-form form-group col-md-4" >
<label for="">nombreCarrera</label>
<input type="text" name="nombreCarrera" class="form-control">{{ old('nombreCarrera') }}
<!--<imput type="text" class="form-control" name="nombreCarrera" placeholder="Escriba el titulo">-->
</div>     <!--value="{{ old('facultad') }}-->
</div>


<div class="col-md-12">
  <div class="form-group">
    <label for="">facultad</label>
      <select class="mdb-select colorful-select dropdown-primary col-md-8" name="facultad">
                   <option value="FAC. CIENCIAS AGRICOLAS Y AGROPECUARIAS">FAC. CIENCIAS AGRICOLAS Y AGROPECUARIAS</option>
                   <option value="FAC. CS.FARMACEUTICAS Y BIOQUIMICAS">FAC. CS.FARMACEUTICAS Y BIOQUIMICAS</option>
                   <option value=" FAC. CIENCIAS ECONOMICAS">FAC. CIENCIAS ECONOMICAS </option>
                   <option value="FAC. DESARROLLO RURAL Y TERRITORIAL">FAC. DESARROLLO RURAL </option>
                   <option value=" FAC. ODONTOLOGIA">FAC. ODONTOLOGIA </option>
                   <option value="FAC. MEDICINA">FAC.MEDICINA </option>
                   <option value="FAC. ARQUITECTURA Y CIENCIAS DEL HABITAD">FAC. ARQUITECTURA Y CIENCIAS DEL HABITAD </option>
                   <option value="FAC. HUMANIDADES Y CS. DE EDUCACION">FAC. HUMANIDADES Y CS. DE EDUCACION </option>
                   <option value="FAC. CIENCIAS JURIDICAS Y POLITICAS ">FAC. CIENCIAS JURIDICAS Y POLITICAS </option>
                   <option value="FAC. CIENCIAS Y TECNOLOGIA">FAC. CIENCIAS Y TECNOLOGIA </option>
                   <option value=" FAC. POLITECNICA DEL VALLE ALTO">FAC. POLITECNICA DEL VALLE ALTO </option>
                   <option value="FAC. CIENCIAS SOCIALES ">FAC. CIENCIAS SOCIALES </option>
                   <option value=" FAC. CIENCIAS VETERINARIAS">FAC. CIENCIAS VETERINARIAS </option>
               </select>

<!--<textarea name="facultad" class="form-control" rows=1 placeholder="Escriba la Facultad"> {{ old('facultad') }} </textarea>

</div>   -->
  </div>
</div>

<div class="col-md-12">
  <div class="md-form form-group col-md-4" >
    <label for="">codigoCarrera</label>
    <input type="text" name="codigoCarrera" class="form-control"  >{{ old('codigoCarrera') }}
  </div>
</div>

</div>



<!--<button type="submit" class="btn btn-primary"> Crear  </button>-->



<div class="group form-row" style=margin-top:60px;></div>
   <div class="form-row">
       <div class="col-md-8" ></div>
       <button type="reset" class="btn btn-red btn-rounded">
               <font color="white" size="3">CANCELAR</font>
            </button>
        <button type="submit" class="btn btn-light-green btn-rounded" > <font color="white" size="3">GUARDAR</font> </button>
    </div>
</form>

    
@stop
   