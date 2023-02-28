@extends('layout.master')
@section('content')
    <div class="card">
        <div class="card-header"><h4>Create Form</h4></div>
        <hr>
        <a href="{{url('/create')}}" class="d-inline float-right badge badge-success">Add</a>
        @if(Session::has('status'))
            <p class="alert alert-success">{{Session::get('status')}}</p>
        @endif
        
        <table class="table table-striped">
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            <?php $i =1;?>
            @foreach($cruds as $crud)
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td>{{$crud->name}}</td>
                <td>
                    <a href="{{url('/edit/' .$crud->id)}}" class="badge badge-success">Update</a>
                </td>
                <td>
                    <a href="{{url('/delete/' .$crud->id)}}" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection