@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Menu</div>
                <div class="card-body text-lift">
                    <form action="" method="get">
                        <a class="list-group-item list-group-item-action"  href="/home">Home Page</a>
                        @foreach ($cats as $row)
                            <input type="submit" value="{{ $row->cat_name }}" name="category"
                                class="list-group-item list-group-item-action  " >
                        @endforeach


                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">Privous Orders</div>
                <div class="card-body text-lift">
                    <form action="" method="get">
                        <a class="list-group-item list-group-item-action"  href="/order/show">Show Privous Orders</a>



                    </form>
                </div>
            </div>
                </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>{{ $cat1 }}</h4>
                    Number Of Meals ({{count($meals)}})</div>
                <div class="card-body">
                    <div class="row">

                    @forelse ($meals as $meal )
                    <div class="col-md-4 mt-2 text-center" style="border: 1px solid rgb(149, 212, 159) ;">
                        <img src="{{ asset($meal->image) }}" class="img-thumbnail" style="width:100%;">
                        <strong>{{ $meal->name }}</strong>
                        <p>{{ $meal->description }}</p>
                        <div>

                            <a href="{{ route('meal_deatails' ,$meal->id)}}" class="btn btn-success" style="font-size:16px" title="Add Cart">
                                <i class="fa fa-bell-slash-o" style="font-size:16px;color:white">Order Now
                            </a></i>

                        </div>
                        <br>
                    </div>
                @empty
                    <p>No Meals Available !</p>
                @endforelse




                    </div>
                </div>
            </div>
        </div>
    </div>




    <style>
        a.list-group-item {
            font-size: 18px;
        }

        a.list-group-item:hover {

            background-color: green;
            color: #fff;
        }

        .card-header {

            background-color: green;
            color: rgb(14, 13, 13);
            font-size: 20px;
        }




    </style>


@endsection
