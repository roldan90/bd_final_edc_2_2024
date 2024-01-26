<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\DirectoryExists;

class Proveedores extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'nocache'])->only(['index','create', 'edit','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Proveedor::select(
                    'proveedor.*',
                    'direccion.*'
                )
                ->join('direccion', 'direccion.id', '=', 'proveedor.id_direccion')
                ->get();
        return view('modules/proveedores/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules/proveedores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $id_direccion = $this->agregaDireccion($request);
            $item = new Proveedor();
            $item->codigo = $request->codigo;
            $item->paterno = $request->paterno;
            $item->materno = $request->materno;
            $item->nombre = $request->nombre;
            $item->id_direccion = $id_direccion;
            $item->save();
            
            return redirect(route('proveedor-index'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function agregaDireccion($request) {
        try {
            $item = new Direccion();
            $item->calle = $request->calle;
            $item->ciudad = $request->ciudad;
            $item->provincia = $request->provincia;
            $item->cp = $request->cp;
            $item->save();
            return $item->id;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        $direccion = Direccion::find($proveedor->id_direccion);
        return view('modules/proveedores/show', compact('proveedor', 'direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        $direccion = Direccion::find($proveedor->id_direccion);

        return view('modules/proveedores/edit', compact('proveedor', 'direccion'));
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
        try {
            $item = Proveedor::find($id);
            $id_direccion = $item->id_direccion;

            if ($this->actualizarDireccion($request, $id_direccion)) {
                $item->codigo = $request->codigo;
                $item->paterno = $request->paterno;
                $item->materno = $request->materno;
                $item->nombre = $request->nombre;
                $item->save();
                
                return redirect(route('proveedor-index'));
            } 
            
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizarDireccion($request, $id_direccion){
        try {
            $item = Direccion::find($id_direccion);
            $item->calle = $request->calle;
            $item->ciudad = $request->ciudad;
            $item->provincia = $request->provincia;
            $item->cp = $request->cp;
            return $item->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = Proveedor::find($id);
            $id_direccion = $item->id_direccion;
            
            if($item->delete()) {
                $item = Direccion::find($id_direccion);
                $item->delete();
                return redirect(route('proveedor-index'));
            }
           
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
