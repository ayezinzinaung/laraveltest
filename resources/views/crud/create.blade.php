@extends('layout.master')
@section('content')
<div class="card p-3">
    <div class="card-header"><h4>Create CRUD</h4></div> 
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif 
    <form action="{{url('/store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="m-2">Enter Name</label>
            <input type="text" name="name" id="name" class="form-control m-auto">
        </div>
        <input type="submit" value="Add" class="btn btn-primary">
    </form>
</div>
@endsection