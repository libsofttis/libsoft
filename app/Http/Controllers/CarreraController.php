<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Carrera;  //indica donde se guardaran los datos

class CarreraController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $carreras = Carrera::all();
         return view('carreras.index',compact('carreras'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('carreras.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
    //dd($request->all());
    $this->validate($request,[
        'nombreCarrera' => 'required',
        'facultad' => 'required',
        'codigoCarrera' =>'required',
    ]);
    $carrera = new Carrera;
    $carrera-> nombreCarrera=$request->input('nombreCarrera');
    $carrera-> facultad=$request->input('facultad');
    $carrera-> codigoCarrera=$request->input('codigoCarrera');
    $carrera->save();
    return 'store';

    }
    
    
    
    
    
    
    public function show(Carrera $carrera )
    {
      return view('carreras.show',compact(carrera));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('carreras.edit',compact('carreras'));
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
    public function carreras()
    {
        return $this->hasMany(Carrera::class);
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
