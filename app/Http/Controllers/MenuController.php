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
            // return view('menu');
            // }
            // public function insert(Request $request){
            // $first_name = $request->input('first_name');
            // $last_name = $request->input('last_name');
            // $city_name = $request->input('city_name');
            // $email = $request->input('email');
            // $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
            // DB::table('student_details')->insert($data);
            // echo "Record inserted successfully.<br/>";
            // echo '<a href = "/insert">Click Here</a> to go back.';
            // }
            // }
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
            'unit_cost' => 'required | max:255'
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
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
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
        //
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
