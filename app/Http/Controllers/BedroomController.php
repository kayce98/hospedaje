<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBedroomPost;
use App\Model\Bedroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bedrooms = Bedroom::all();
        return view('bedroom.index', compact('bedrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $table='bedrooms';
        $column='size_beds';
        $size_beds=$this->get_enum_values($table, $column);
        
        return view('bedroom.create', compact('size_beds'));

    }

    public function get_enum_values($table, $field)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '$field'"))[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBedroomPost $request)
    {
        $validate=$request->validated();
        $bedroom=Bedroom::create($validate);
        $bedroom->save();
        return redirect()->route('bedroom.index')->with(['message'=>'Habitación creada correctamente!']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bedroom $bedroom)
    {
        return view('bedroom.show', compact('bedroom'));
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
