@extends('layouts.app')

@section('content')


    <div class="container" >
        <div class="row ">
            <div class="col-md-15">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning">
                        <li class="breadcrumb-item active " aria-current="page">Customer orders </li>
                    </ol>
                </nav>

                <div class="card ">
                    <div class="card-header">

                                <a style="float:lift;" href="{{route('cat.show')}}"><button class="bnt btn-danger btn-default"
                                    style="margin-left:6px ;">Add new category</button></a>

                        <a style="float:lift;" href="{{ route('meal.create') }}"><button class="bnt btn-success btn-default"
                                style="margin-left:6px ;">Add meal </button></a>
                        <a style="float:lift;" href="{{ route('meal.index') }}"><button class="bnt btn-info btn-default"
                                style="margin-left:6px ;">Show meals</button></a>

                    </div>
                    <div class="card-body text-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>

                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Mael name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Meal Price($)</th>
                                    <th scope="col">Total($)</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Denied</th>
                                    <th scope="col">Complete order</th>
                                </tr>
                            </thead>
                            <tbody>

                                     @foreach ( $order as $row )
                                     <tr>
                                        <td>{{$row->user->name }}</td>
                                        <td>{{$row->user->email }}</td>
                                        <td>{{$row->phone }}  </td>
                                        <td>{{$row->date }}</td>
                                        <td>{{$row->time }}</td>
                                        <td>{{$row->meal->name }}</td>
                                        <td>{{$row->qty }}</td>
                                        <td>{{$row->meal->price }}</td>
                                        <td>{{$row->meal->price * $row->qty }}</td>
                                        <td>{{$row->address }}</td>
                                        <td>{{$row->status }}</td>

                                        <form action="{{ route('order.status' , $row->id) }}" method="POST">
                                            @csrf
                                        <td>
                                            <input name="status" type="submit" value="accept"
                                            class="btn btn-primary btn-sm">
                                        </td>
                                        <td>
                                            <input name="status" type="submit" value="deny"
                                            class="btn btn-danger btn-sm">
                                        </td>
                                        <td>
                                            <input name="status" type="submit" value="complete"
                                            class="btn btn-success btn-sm">
                                        </td>
                                        </form>


                                 </tr>
                                     @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
