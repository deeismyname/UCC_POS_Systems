<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('menu', ['menus' => $menus]);
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
            'menu_name' => 'required | max:255',
            'unit_cost' => 'required | max:255',
             'reuse' => 'max:255',
             'reuse*' => 'max:255',
             'description' => 'max:255',
             'description*' => 'max:255'
        ]);


        Menu::create($attributes);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu){

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        // dd($menu);
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Sataurday", "Sunday"];
        return view('edit_menu' ,
        ['menu' =>$menu, 'days'=>$days]
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        dd($request);
     $request->validate([
        'menu_name' => 'required | max:255',
        'unit_cost' => 'required | max:255',
         'reuse' => 'max:255',

         'reuse*' => 'max:255',
         'description' => 'max:255',
         'description*' => 'max:255'
        ]);

        $menu->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
    }
}
