<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;    
use App\Models\SaleDetail;
use Illuminate\Support\Facades\Auth;

class VentasController extends Controller
{
    // Listado de ventas propias
    public function index()
    {
        $sales = Sale::where('user_id', Auth::id())->with('details.product')->get();
        return view('sales.index', compact('sales'));
    }

    // Formulario de creación
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    // Guardar venta
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $subtotal = $product->price * $request->quantity;

        $sale = Sale::create([
            'user_id' => Auth::id(),
            'total' => $subtotal,
        ]);

        SaleDetail::create([
            'sale_id' => $sale->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $product->price,
        ]);

        return redirect()->route('sales.index')->with('success', 'Venta registrada exitosamente.');
    }

}
