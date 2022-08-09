@extends('layouts.main')
@section('content')


<div>
    <div>
        <h1>Today's Menu</h1>
    </div>

    <div>
        @foreach($menus as $menu)
        <form action="" method="post">
            <div class="menu">
                <h2>
                        {{$menu->menu_name}}
                </h2>

                <div>
                    @foreach($menu->description as $item)
                    {{ $item }} <span class="space"></span>
                    @endforeach
                </div>

                <h3>Price:{{$menu->unit_cost}}¢</h3>


            </div>
            {{-- <div class="order_edit_delete" style="display: flex">

                <div class="edit" id="order"><button class="px-6 py-3 bg-green-600 text-gray-100 rounded shadow" id="order-btn">
                    Order <i class="fas fa-box"></i>
                </button></div><span class="space" style="margin: 2rem"></span>

                <div class="edit" id="edit">
                    <a href="{{route('update_menu',$menu->id)}}">Edit</a>
                    <x-edit_menu/>
                </div><span class="space" style="margin: 2rem"></span>

                <div class="edit" id="delete"><button class="px-6 py-3 bg-red-600 text-gray-100 rounded shadow" id="delete-btn">
                    Delete <i class="fas fa-trash"></i>
                </button></div><span class="space" style="margin: 2rem"></span>
            </div> --}}
        </form>
        @endforeach
    </div>

    <div>
        <x-menu_form/>
    </div>

</div>
@endsection


<style>
    *{
        margin-top: 0px;

    }
    form .menu  a{
        text-decoration: none;
    }

    .details{
        display: flex;
    }

    h5:not(:last-child)::after {
        content: ','
    }

    .space {
        padding: 3px;
    }
</style>
