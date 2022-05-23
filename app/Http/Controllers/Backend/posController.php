<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\tbl_store_items;
use App\Http\Requests\CartStoreRequest;
use Illuminate\Http\Request;

class posController extends Controller
{
    public function index(){        
        $pos =tbl_store_items::all();
        return view('posale.index', compact('pos'));
    }

    public function store(CartStoreRequest $request)
    {
        tbl_cart_items::create([
            'itemName' => $request->itemName,
            'productCode' => $request->productCode,
            'itemQty' => $request->itemQty,
            'price' => $request->price,
        ]);

        return redirect()->route('posale.cart')->with('message', 'Cart log successful');
    }
}
