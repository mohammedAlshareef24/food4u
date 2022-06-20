@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-danger text-light text-center">Menu</div>
                <div class="card-body text-lift">
                    <ul class="list-group">
                        <a href="{{ route('cat.show') }}" class="list-group-item list-group-item-action">Add new category</a>
                        <a href="{{ route('meal.index') }}" class="list-group-item list-group-item-action">Show Meals</a>

                        <a href="" class="list-group-item list-group-item-action">Users Orders</a>

                    </ul>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p> {{ $error }}
                                <p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-8">
           <div class="card">
               <div class="card-header bg-danger text-center text-light">Edit Meal</div>

               <form action="{{route('meal.update',$meal->id) }}" method="post" enctype="multipart/form-data">                   @csrf

                   <input type="hidden" name="old_image" value="{{ $meal->image }}">

                   <div class="card-body text-lift">
                       <div class="form-group">
                           <label for="name">Meal Name</label>
                           <input type="text" class="form-control" value="{{ $meal->name }}" name="name" placeholder="Meal Name">
                       </div>
                       <div class="form-group">
                           <label for="description">Meal description</label>
                           <textarea class="form-control" name="description"> {{ $meal->description }}</textarea>                       </div>

                       <div class="row">
                           <div class="col">
                               <label>Meal Price($)</label>
                               <input type="number" value="{{ $meal->price }}" name="price" class="form-control" placeholder="Meal Price">
                           </div>

                       </div>




                       <div class="form-group">
                           <h5>Choose Category<span class="text-danger">*</span></h5>
                           <div class="controls">
                            <select name="category" class="form-control" required="">
                            <option value="" selected="" disabled="">Choose Category</option>
                            @foreach ($cats as $row)

                                        <option value="{{ $row->cat_name }}">{{ $row->cat_name }}</option>
                                    @endforeach




                               </select>






                               <br>

                               <div class="form-group">
                                   <label>Meal Picture</label>
                                   <input type="file" name="image" class="form-control" id="image">
                               </div>
                                <br>
                               <div class="form-group">
                                <img  id="showImage" src="{{asset($meal->image) }}" style="width: 100px; height: 100px;">                            </div>

                               <br>
                               <div class="form-group text-center">
                                   <button class="btn btn-danger" type="submit">Edit Meal</button>
                               </div>

                            </div>
           </div>
       </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
   </script>

 @endsection
