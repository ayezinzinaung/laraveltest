@extends('layout.master')
@section('content')
    <div class="card p-3">
        <div class="card-header"><h4>Update CRUD</h4></div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif 
        <form action="{{url('/update/'.$crud->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="m-2">Update Enter Name</label>
                <input type="text" name="name" id="name" class="form-control m-auto" value="{{$crud->name}}">
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>  
    </div>
@endsection