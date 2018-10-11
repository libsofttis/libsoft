@extends('layouts.app')
@section('content')
<div class="container-fluid">
<h1 align="center">Carreras Registradas</h1>
<ul class="list-group">
@foreach ($carreras as $carrera)
<li class="list-group-item">{{$carrera->nombreCarrera}}  </li>
@endforeach
</ul>
</div> 

              
 @stop

