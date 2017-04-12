<?php

namespace App;
use App\DatesTranslator;
use Illuminate\Database\Eloquent\Model;

class Estudios extends Model
{
  use DatesTranslator;
   protected $table ='estudios';
   protected $filetable =['usuario_id', 'nservicio', 'fecha', 'solicitud', 'nombres',	'estadocivil',	'calle', 'colonia', 'municipio', 'estado', 'postal', 'telefono', 'correo', 'referencias', 'created_at', 'update_at'];


}
