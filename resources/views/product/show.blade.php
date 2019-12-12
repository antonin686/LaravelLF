@extends('layoutUser')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-secondary text-light">Product Info</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Review</th>
                                    <td>{{$product->review}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$product->price}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 ml-auto">
                @if( Session::get('role') == 1)
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <button class="btn btn-danger">Delete</button>
                    @else
                    <a class="btn btn-info" href="/product/addToCart/{{Session::get('userid')}}/{{$product->id}}">Add To Cart</a>
                @endif    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label>productname</label>
                        <input type="text" class="form-control" name="productname" value="{{$product->productname}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
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