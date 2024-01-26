<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Productos extends Controller
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
        //toast('Your Post as been submited!','success');
        //https://realrashid.github.io/sweet-alert/usage?id=usage
        
        $items = Producto::select(
                    'productos.*',
                    'categorias.nombre as nombre_categoria',
                    'categorias.codigo as codigo_categoria'
                )
                ->join('categorias', 'productos.id_categoria', '=', 'categorias.id')
                ->get();
                    
        return view('modules/productos/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Categoria::orderBy('nombre')->get();
        return view('modules/productos/create', compact('items'));
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
            $item = new Producto();
            $item->codigo_producto = $request->codigo_producto;
            $item->nombre = $request->nombre;
            $item->color = $request->color;
            $item->precio = $request->precio;
            $item->id_categoria = $request->id_categoria;
            $item->save();
            
            return redirect(route('producto-index'));
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
        $item = Producto::find($id);

        return view('modules/productos/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Producto::find($id);
        $categorias = Categoria::all();
        return view('modules/productos/edit', compact('items', 'categorias'));
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
            $item = Producto::find($id);
            $item->codigo_producto = $request->codigo_producto;
            $item->nombre = $request->nombre;
            $item->color = $request->color;
            $item->precio = $request->precio;
            $item->id_categoria = $request->id_categoria;
            $item->save();
           
            return redirect(route('producto-index'));
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
            $item = Producto::find($id);
            $item->delete();
            
            return redirect(route('producto-index'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
