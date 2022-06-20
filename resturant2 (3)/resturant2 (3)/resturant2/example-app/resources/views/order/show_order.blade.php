@extends('layouts.app')

@section('content')


<div class="container" >
     <div class="row justify-content-center">
         <div class="col-md-12">

             <div class="card">
                 <div class="card-header text-center" >Privous Order>

                 </div>
                 <div class="card-body">
                     <table class="table table-bordered text-center">
                         <thead>
                             <tr>
                                 <th scope="col">Name</th>
                                 <th scope="col">Phone</th>
                                 <th scope="col">E-mail</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Time</th>
                                 <th scope="col">Meal Name</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Meal Price</th>
                                 <th scope="col">Total($)</th>
                                 <th scope="col">Address</th>


                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($order as $row)
                                 <tr>
                                     <td>{{ $row->user->name }}</td>
                                     <td>  {{$row->phone}}</td>
                                     <td >{{ $row->user->email }} </td>

                                     <td>{{ $row->date }}</td>
                                     <td>{{ $row->time }}</td>
                                     <td>{{ $row->meal->name }}</td>
                                     <td>{{ $row->qty }}</td>
                                     <td>{{ $row->meal->price}}</td>
                                     <td>${{ ($row->meal->price * $row->qty)}}</td>

                                     <td>{{ $row->address }}</td>



                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <style>

     .card-header {
         background-color:rgb(94, 175, 83);
         color: rgb(8, 8, 8);
         font-size: 20px;
     }

 </style>





@endsection
