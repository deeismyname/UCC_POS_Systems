@extends('layouts.main')
@section('content')
<div class="previews">
    <div>
        <div class="orders">
             <h2>ODER TRACKING</h2>

            <div class="pending"><p>PENDING</p></div>

            <div class="confirmed"><P>CONFIRMED</P></div>
        </div>

        <a href="./menu">
            <div class="orders">
                <h2>MENU</h2>

                <div class="pending"><p>MENU ITEMS:6</p></div>

                <div class="confirmed"><P>EDIT MENU</P></div>
            </div>
        </a>
    </div>

    <div>
        <a href="./inventory">
             <div class="orders">
                <h2>INVENTORY</h2>

                <div class="pending"><p></p></div>

                <div class="confirmed"><P>TAKE INVENTORY</P></div>
            </div>
        </a>

        <a href="./orders">
            <div class="orders">
                <h2>ODER TRACKING</h2>

                <div class="pending"><p>PENDING</p></div>

                <div class="confirmed"><P>CONFIRMED</P></div>
            </div>
        </a>
    </div>

</div>
<style>
    .previews{
        display: flex;
    }

    .orders{
    width: 300px;
    height: 15 0PX;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style>

@endsection

