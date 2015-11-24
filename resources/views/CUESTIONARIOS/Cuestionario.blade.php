@extends('app')
@section('content')
<link href="{{ asset('/css/appCuestionario.css') }}" rel="stylesheet">
<script src="/JS/script.js"></script>

{!! Form::open(['route' => 'Cuestionario.store', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
{!! Form::hidden('cantidad',null,['id' => 'canti']) !!}
<h2>Cree sus preguntas segun su seleccion</h2><br>

<h2 id="tamano">Eliga su tipo de pregunta</h2>
<a  id="btn1" class="tipo" href="{{ url('#') }}">pregunta de seleccion multiple</a>&nbsp;&nbsp;&nbsp;
<a  id="btn2" class="tipo" href="{{ url('#') }}">pregunta abierta</a>

<div id="pregumul">
    <label>pregunta</label><input type="text" id ="pregunta"name="pregunta">
    <select id="dofa" class="dofa select">
        <option>Elija opciones</option>
        <option id="uno">1</option>
        <option id="dos">2</option>
        <option id="tres">3</option>
        <option id="cuatro">4</option>
        <option id="cinco">5</option>
        <option id="seis">6</option>
        <option id="siete">7</option>
</select>
    <button id="btn3" class="icon icon-plus"></button>
</div>

<section id="contenido">
</section>

<section id="contenido1">
</section>


<div id="preguntabi">
    <label>pregunta</label><input type="text" id="pregunta" name="pregunta">
    <button id="btn4"  class="icon icon-plus"></button>
</div>
<section id="contenido2">
</section>

<section class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
</section>

{!! Form::close() !!}
@endsection