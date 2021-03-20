<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empleado extends Controller
{
    

    public function index()
	{
		$lista_empleado=empleado::all();
		return view('empleado_index')->with('lista', $lista_empleado);


	}


	public function crear()
	{
		return view('index');

	}

	public function guardar(Request $rq)
	{
		$rq->validate(['nombre_completo'=>'required',
						'rfc'=>'required',
						'cel'=>'required',
						'correo'=>'required',
						'direccion'=>'required',
						'tipo_empleado'=>'required']);
		empleado::create($rq->all());
		return redirect()->route('empleado_index')->with('insertado','Agregado correctamente');

		

	}

	public function mostrar($id)
	{

		$empleado=empleado::find($id);
		return view('empleado_index')->with('empleado', $empleado);

	}

	public function eliminar($id)
	{	
		$empleado=empleado::find($id);
		$empleado->delete();
		return redirect()->route('empleado_index')->with('eliminado','Eliminado correctamente');
	}

	public function actualizar(Request $rq, empleado $emp)
	{
		$rq->validate(['nombre_completo'=>'required',
						'rfc'=>'required',
						'cel'=>'required',
						'correo'=>'required',
						'direccion'=>'required',
						'tipo_empleado'=>'required']);
		
		$emp->update($rq->all());
		return redirect()->route('empleado_index')->with('actualizado','Actualizado correctamente');
	}

}
