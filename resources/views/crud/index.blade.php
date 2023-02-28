@extends('layout.master')
@section('content')
    <div class="card">
        <div class="card-header"><h4>Create Form</h4></div>
        <table class="table table-striped">
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Aye Zin Zin Aung</td>
                <td>
                    <a href="" class="badge badge-success">Update</a>
                </td>
                <td>
                    <a href="" class="badge badge-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
@endsection