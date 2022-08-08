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

                {{-- <div class="details">
                    @foreach ($menu->reuse as $item)
                    <h5>{{$item}}</h5> <span class="space"></span>
                    @endforeach
                </div> --}}


                @foreach($menu->description as $item)
                {{ $item }}
            @endforeach


                <h3>Price:{{$menu->unit_cost}}¢</h3>


                <button>Place order</button>
            </div>
        </form>


@endforeach
    <div>
        <x-menu_form/>
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
