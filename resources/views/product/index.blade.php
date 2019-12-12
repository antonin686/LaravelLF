@extends('layoutUser')

@section('nav')

@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <table id="tableid" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr id="{{$product->id}}">
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


<script>
$('#tableid').on('click', 'tr', (event) => {
    var id = $(event.currentTarget).attr("id");
    if (id != null) {
        window.location.href = `/product/show/${id}`;
    }
});
</script>

@endsection