@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">Meal</div>

                <div class="card-body text-lift">
                    <div class="row">
                       <div class="col-md-6">
                            <p>
                            <h3> <strong style="color: seagreen ; font-size: 22px  ">Meal Category:
                                </strong>{{ $meal->category }}</h3>
                            </p>

                            <p>
                            <h3> <strong style="color: seagreen ; font-size: 22px  ">Meal Name:
                                </strong>{{ $meal->name }}</h3>
                            </p>

                            <p>
                            <h3> <strong style="color: seagreen ; font-size: 22px  ">Meal Price:
                                </strong> {{ $meal->price }}$</h3>
                            </p>
                            <p>
                            <h3> <strong style="color: seagreen ; font-size: 22px  ">Meal Description:</p>
                                    <p></strong>{{ $meal->description }}</h3>
                            </p>

                        </div>

                        <div class="col-md-6">
                            <img src="{{ asset($meal->image) }}" class="img-thumbnail" style="width: 500px ">
                        </div>

                    </div>
                </div>
            </div>
        </div>


     <div class="col-md-4">
        <div class="card">
             <div class="card-header bg-success  text-center">Order Details</div>

        <div class="card-body text-lift">
     @if (Auth::check())
        <form action="{{ route('order.store') }}" method="post">
             @csrf
             <div class="form-group ">
             <p><strong style="color: seagreen ; font-size: 18px  ">Name:
            </strong>{{ auth()->user()->name }}</p>
             <p><strong style="color: seagreen ; font-size: 18px  ">E-mail :
            </strong>{{ auth()->user()->email }}</p>
             <p> <strong style="color: seagreen ; font-size: 18px  ">Phone Number:
            </strong> <input type="phone" class="form-control" name="phone" required></p>
             <p><strong style="color: seagreen ; font-size: 18px  ">Quantity:
            </strong>  <input type="number" class="form-control" name="qty" value="0"></p>

             <p><input type="hidden" name="meal_id" value="{{ $meal->id }}"></p>
             <p><strong style="color: seagreen ; font-size: 18px  ">Date :
            </strong><input type="date" name="date" class="form-control" required></p>
             <p><strong style="color: seagreen ; font-size: 18px  ">Time :
            </strong><input type="time" name="time" class="form-control" required></p>
             <p><strong style="color: seagreen ; font-size: 18px  ">Address
            </strong> :<textarea class="form-control" name="address" required></textarea></p>
             <p class="text-center">
                  <button class="btn btn-success" type="submit" style="font-size: 20px">Order Now</button>
             </p>


             </div>
        </form>


             @else
                  <p><a href="/login">Please Login</a></p>
             @endif
        </div>
        </div>
        </div>

</div>
</div>



<style>

    .card-header {

        color: #fff;
        font-size: 22px;
    }

</style>

@endsection
