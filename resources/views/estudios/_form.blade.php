
@if($estudio->exists)
  <form class="form-inline" method="POST" action="{{ route('update_estudio_path', ['estudio' => $estudio->id])}}">
    {{ method_field('PUT')}}
  @else
  <form class="form-inline" method="POST" action="{{ route('store_estudio_path')}}">
@endif
@include('layouts._error')
    {{ csrf_field() }}
    <div class="form-group form-md-line-input success">
        <div class="input-icon">
            <input type="text" class="form-control" placeholder="Numero de Servicio" name="nservicio" value="{{ $estudio->nservicio or old('nservicio')}}">
        <div class="form-control-focus"> </div>
            <span class="help-block">Introducir un Numero de Servicio...</span>
            <i class="fa fa-envelope-o"></i>
    </div>
  </div>
  <div class="form-group form-md-line-input has-success">
      <div class="input-icon">
          <input type="text" class="form-control" placeholder="Solicitud" name="solicitud" value="{{$estudio->solicitud or old('solicitud')}}">
      <div class="form-control-focus"> </div>
          <span class="help-block">Introducir una Solicitud...</span>
          <i class="fa fa-envelope-o"></i>
  </div>
</div>
<div class="form-group form-md-line-input has-success">
    <div class="input-icon">
        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" name="fecha" value="{{$estudio->fecha or old('fecha')}}">
    <div class="form-control-focus"> </div>
        <span class="help-block">Tu Fecha de Nacimiento..</span>
        <i class="fa fa-envelope-o"></i>
</div>
</div>
  <input type="hidden" class="form-control" name="user_id" value="1">
<button type="submit" class="btn btn-success">Guardar</button>
</form>
