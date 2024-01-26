<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Historicos extends Controller
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
        $items = Historico::select(
                                'historico.*',
                                'proveedor.paterno as paterno',
                                'proveedor.materno as materno',
                                'proveedor.nombre as nombre_proveedor',
                                'productos.nombre as nombre_producto',
                                'productos.codigo_producto as codigo_producto'
                            )
                                ->join('proveedor', 'historico.id_proveedor', '=', 'proveedor.id')
                                ->join('productos', 'historico.id_producto', '=', 'productos.id')
                                ->get();

        return view('modules/historicos/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('modules/historicos/create', compact('proveedores', 'productos'));
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
            $item = new Historico();
            $item->fecha_entrega = $request->fecha_entrega;
            $item->cantidad = $request->cantidad;
            $item->id_producto = $request->id_producto;
            $item->id_proveedor = $request->id_proveedor;
            $item->id_usuario = auth()->user()->id;
            $item->save();
            toast('Historico agregado con exito!','success');
            return redirect(route('historico-index'));
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
        $items = Historico::join('proveedor', 'historico.id_proveedor', '=', 'proveedor.id')
                            ->join('productos', 'historico.id_producto', '=', 'productos.id')
                            ->where('historico.id', $id)
                            ->select(
                                'historico.*',
                                'productos.nombre as nombre_producto',
                                'productos.codigo_producto as codigo_producto',
                                'proveedor.paterno as paterno',
                                'proveedor.materno as materno',
                                'proveedor.nombre as nombre_proveedor'
                            )
                            ->first();

        return view('modules/historicos/show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $historico = Historico::find($id);
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('modules/historicos/edit', compact('historico', 'proveedores', 'productos'));
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
            $item = Historico::find($id);
            $item->fecha_entrega = $request->fecha_entrega;
            $item->cantidad = $request->cantidad;
            $item->id_producto = $request->id_producto;
            $item->id_proveedor = $request->id_proveedor;
            $item->id_usuario = auth()->user()->id;
            $item->save();
            toast('Historico actualizado con exito!','success');
            return redirect(route('historico-index'));
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
            $item = Historico::find($id);
            $item->delete();
            toast('Eliminado con exito!','success');
            return redirect(route('historico-index'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
