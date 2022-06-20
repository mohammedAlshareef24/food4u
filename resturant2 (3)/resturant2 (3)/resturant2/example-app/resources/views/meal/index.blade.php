@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-danger text-light text-center ">Menu</div>
                <div class="card-body text-lift ">
                    <ul class="list-group ">
                        <a href="{{ route('meal.index') }}" class="list-group-item list-group-item-action ">Show meals</a>
                        <a href="{{ route('meal.create') }}" class="list-group-item list-group-item-action">Add meal</a>
                        <a href="/home" class="list-group-item list-group-item-action">User Orders</a>

                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-danger text-light text-center ">All Meals

                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Meal Picture</th>
                                <th scope="col">Meal Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price($)</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                            </tr>

                        </thead>
                        <tbody>

                            @if (count($meals) > 0)
                            @foreach ($meals as $row)

                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td><img src="{{asset($row->image) }}" width="80"></td>
                                    <td>{{$row->name  }}</td>
                                    <td>{{$row->description }}</td>
                                    <td>{{$row->category}}</td>
                                    <td>{{$row->price }}</td>

                                    <td><a href="{{ route('meal.edit',$row->id) }}"><button class="btn btn-primary">Edit</button></a></td>




                                    <td> <a href="{{ route('meal.delete',$row->id) }}" class="btn btn-danger" id="delete">Delete</a></td>


                                </tr>


                               @endforeach

                               @else
                               <p>No Meal</p>
                             @endif


                        </tbody>
                    </table>
                    {{ $meals->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
