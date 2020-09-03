<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function verificar(Request $request){
        // Recibir los datos de la persona y ver si existe en la base de datos
        //      =>Si existe en la base de datos se va a comparar los datos y si:  
        //          --> Son iguales se procedera a enviar al siguiente formulario con el id de person.
        //          --> No son iguales se le advertir el procedimiento y le mostrando un mensage de comparación.
        //      =>Si no existe en la base de datos se procedera a crearlo, guardarlo y se procedera a enviar al siguiente formulario con el mensage de DATO PERSONAL NUEVO EN LA BASE DE DATOS.
        $dni = (String)$request->input('dni');
        $name = $request->input('name');
        $surname = $request->input('surname');
         
        $person = Person::where('dni',$dni)->first();
        if(empty($person->dni)){
            // Si esta vacio significa que no existe
            // Crea a la persona
            $person_e=Person::create([
                'name'=>$name,
                'surname'=>$surname,
                'dni'=>$dni
            ]);
			$message =  'La persona es nuevo en la base de datos.';
            return redirect()->back()->with(['message' => $message, 'person' => $person_e]);
        }else{
            // Si no esta vacio significa que existe en la base de datos
            $person_e =new Person();
            $person_e->dni = $dni;
            $person_e->name = $name;
            $person_e->surname = $surname;
            $advertencia = null;
            $message = "La persona con documento ". $dni." ya se encuentra en la base de datos.";
            if(!strcasecmp($person->name, $person_e->name)==0){
                $advertencia[] ="-  La persona con nombre ". $person_e->name." es diferente a la base de datos ".$person->name;
            }
            if(!strcasecmp($person->surname, $person_e->surname)==0) {
                $advertencia[] ="-  La persona con apellido " . $person_e->name ." es diferente a la base de datos " . $person->surname;
            }

            return redirect()->back()->with(['message' =>$message,'advertencia'=>$advertencia,'person'=>$person]);
        }
        dd();

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
