@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-secondary text-light">User Info</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Username</th>
                                    <td>{{$user->username}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$user->role_name}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 ml-auto">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{$user->username}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection