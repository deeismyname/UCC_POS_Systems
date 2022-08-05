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

                    <a href="menus/{{$menu->id}}">
                        {{$menu->menu_name}}
                    </a>
                </h2>

                <div class="details">
                    @foreach ($menu->description as $item)
                    <h5>{{$item}}</h5> <span class="space"></span>
                    @endforeach
                </div>

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

    .pop_up{
        background-color: rgba(25, 179, 211, 0.6);
        width: 87%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        display: flex;
        align-items: center;
    }

    .pop_up_content {
        height: 4rem;
        width: 6rem;
        background-color: #fff;
        padding: 15rem;
        position: relative;
        font-s
    }
</style>
