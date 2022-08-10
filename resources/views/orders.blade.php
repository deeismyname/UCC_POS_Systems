@extends('layouts.main')
@section('content')


<div>

        <h1>Orders</h1>


    <div>
        @foreach($orders as $order)

            <div class="order">
                <div>
                    @foreach($order->components as $item)
                    {{ $item }} <span class="space"></span>
                    @endforeach
                </div>

                <form action="/order/{{$order->id}}/edit_order" method="get">
                    <div class="edit" id="order"><button class="px-6 py-3 bg-blue-600 text-gray-100 rounded shadow" id="delete-btn">
                        Edit <i class="fas fa-edit"></i>
                    </button></div>
                </form><span class="space" style="margin: 2rem"></span>


            </div>



        @endforeach

@endsection

<style>
    *{
        margin-top: 0px;

    }

</style>
