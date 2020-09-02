<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with('services')->get();

        return view('user.index', compact('carts'));    }

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
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $service = Service::all();

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $prices = $data['service_id'];

        $total = 0;
        foreach ($prices as $price) {
            $service = Service::find($price);
            $total += $service->price;
        }
        $data['total_price'] = $total;

        $cart = Cart::create($data);
        if (!empty($request->service_id)) {
            $cart->services()->sync($request->service_id);

        }


        return redirect('/carts')->with('status', 'Created successful');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
