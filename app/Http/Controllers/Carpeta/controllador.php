<?php

namespace App\Http\Controllers\Carpeta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class controllador extends Controller
{
    public function eviar_dato(Request $request)
    {
        DB::table('citas')
        ->insert([
            'nombre' => $request['Nombre'],
            'apellidos' => $request['Apellidos'],
            'fecha' => $request['Fecha'],
            'telefono' => $request['Telefono'],
            'mail' => $request['Mail'],
            'programa' => $request['Programa'],
            'comentarios' => $request['Comentarios'],
        ]);
    }

    public function tabla_citas(Request $request)
    {
        $TABLA = DB::table('citas')
            ->select(
               'id',
               'nombre',
               'apellidos',
               'fecha',
               'telefono',
               'mail',
               'programa',
               'comentarios',
            )
            ->get();
        return json_encode($TABLA);
    }
    public function tabla_citas_indicvidual(Request $request)
    {   
        $TABLA = DB::table('citas')
                ->select(
                'id',
                'nombre',
                'apellidos',
                'fecha',
                'telefono',
                'mail',
                'programa',
                'comentarios',
                )
                ->whereMonth('fecha','=', $request['mes'])
                ->get();
            return json_encode($TABLA);
        
    }


    public function GRAFICA(Request $request)
    {
         $GRAFICA = DB::table('citas')
            ->select(DB::raw('count(programa) as numero, programa'))
            ->groupBy('programa')
            ->get();
        return json_encode($GRAFICA);
    }

    public function agregar_evaluacion(Request $request)
    {
        DB::table('evaluacion')
        ->insert([
            'id_paciente' => $request['id'],
            'nombre_paciente' => $request['nombre'],
            'evaluacion_1' => $request['Apariencia_y_conducta'],
            'evaluacion_2' => $request['Conductadurantelaestancia'],
            'evaluacion_3' => $request['Relacionconelentrevistador'],
            'evaluacion_4' => $request['Lenguajeycomunicación'],
            'evaluacion_5' => $request['Relacionentrecomunicaciones'],
            'evaluacion_6' => $request['Contenidodelpensamiento'],
            'apellido' => $request['apellido_name'],
            'fecha_realizada' => date('Y-m-d'),
        ]);
    }

    public function tabla_evaluacion_personal(Request $request)
    {   
        $TABLA = DB::table('evaluacion')
                ->get();
        return json_encode($TABLA);
    }

    public function obtener_nombre_persona(Request $request)
    {   
        $TABLA = DB::table('citas')
            ->select(
              'nombre',
              'apellidos',
            )
            ->where('id','=', $request['id'])
            ->first();
        return json_encode($TABLA);
    }

    public function evaluacion_pasada_individual(Request $request)
    {   
        $TABLA = DB::table('evaluacion')
                ->where('id_paciente','=', $request['id_clietne'])
                ->get();
        return json_encode($TABLA);
    }

    public function eliminar_evaluacion_inf(Request $request)
    {   
        
        $deleted = DB::table('evaluacion')
          ->where('id_paciente','=', $request['id_para_eliminar'])->delete();
        return json_encode($deleted);
    }
}