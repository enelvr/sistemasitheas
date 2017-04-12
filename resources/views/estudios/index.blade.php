@extends('layouts.sys')
@section('content')
<div class="row">
  <div class="col-md-12">
    @include('layouts._messages')
@foreach ($estudios as $estudio)
  <div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
        <div class="portlet-title">
          <div class="caption font-green-haze">
            <i class="icon-settings font-green-haze"></i>
            <span class="caption-subject bold uppercase">Estudios Realizados</span>
          </div>
          <div class="actions">
             <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
          </div>
        </div>
        <div class="row">
<div class="col-md-2 col-sm-2 col-xs-2 text-center sinpadding-xs">
<img src="{{ asset('pages/media/profile/logo_metronic.jpg')}}" alt="perfil">
</div>
  <div class="col-md-10 col-sm-10 col-xs-10">
  <h4>{{$estudio->solicitud}}</h4>
  <div class="row color-disable porcentaje-container one-line font-light">
      <div class="col-md-3 col-sm-3 col-xs-3 one-line sinpadding-left">
      <i class="fa fa-map-marker"></i>  {{ $estudio->estado }}
    </div>
      <div class="col-md-3 col-sm-3 col-xs-3 one-line sinpadding-left">
      <i class="fa fa-calendar"></i>   {{ $estudio->created_at->format('d M Y')  }}
    </div>
  </div>
      <strong><i class="fa fa-user"></i>    {{ $estudio->nombres }}</strong>
      <div class="row color-disable porcentaje-container one-line font-light">
        <div class="col-md-4 col-sm-4 col-xs-4 one-line sinpadding-left">
          
          Publicado {{$estudio->created_at->diffForHumans()}}
      </div>
    </div>
    <form action="{{route('delete_estudio_path', ['estudio' => $estudio->id])}}" method="POST">
        {{csrf_field()}}<!-- Enviamos Token-->
        {{ method_field('DELETE')}}<!-- Indicamos al navegador que usaremos el method delete -->
         <a href="{{ route('estudio_path', ['estudio' => $estudio->id]) }}" class="btn btn-xs blue"><i class="fa fa-file-o"></i> Ver</a>
         <a href="{{ route('edit_estudio_path', ['estudio' => $estudio->id]) }}"  class="btn btn-xs blue"><i class="fa fa-edit"></i> Editar</a>
        <button type="submit" class="btn btn-xs red"><i class="fa fa-times"></i> Eliminar</button>
    </form>
  </div>
</div>
<hr>

@endforeach
</div>
</div>
<!--solo si utiliza model factory{{ $estudios->render()}}-->
{{ $estudios->links() }}﻿

</div>
</div>
</div>
@endsection
