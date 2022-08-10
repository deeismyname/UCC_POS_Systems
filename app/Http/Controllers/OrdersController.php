<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $orders = Orders::latest()->get();
    //     return view('orders', ['orders' => $orders]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //    //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $attributes = $request->validate([

    //     ]);
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\orders  $orders
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(orders $orders)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\orders  $orders
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(orders $orders)
    // {
    //     return view('edit_ordeer' ,
    //     ['orders' =>$orders, 'days']
    // );
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\orders  $orders
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, orders $orders)
    // {
    //     $request->validate([
    //         "components" => "max:255"

    //     ]);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\orders  $orders
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(orders $orders)
    // {
    //     //
    // }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::latest()->get();
        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([

             'components' => 'max:255',
             'components*' => 'max:255'
        ]);


        Orders::create($attributes);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(orders $orders){

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        // dd($menu);
        return view('edit_edit_order' ,
        ['orders' =>$orders]
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $orders)
    {
     $request->validate([
        'components' => 'max:255',
        'components*' => 'max:255'
        ]);

        $orders->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }
}
