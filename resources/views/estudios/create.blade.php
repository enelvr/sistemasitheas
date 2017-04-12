@extends('layouts.sys')
@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-green-haze">
          <i class="icon-settings font-green-haze"></i>
          <span class="caption-subject bold uppercase"> Nuevo Estudio</span>
        </div>
        <div class="actions">
           <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
        </div>
      </div>

      <div class="portlet-body">
          <h4>Datos Personales</h4>
      </div>
      @include('estudios._form', ['estudio' => $estudio])
</div>
</div>
</div>
@endsection
