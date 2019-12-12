@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table id="tableid" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr id="{{$user->id}}">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$('#tableid').on('click', 'tr', (event) => {
    var id = $(event.currentTarget).attr("id");
    if (id != null) {
        window.location.href = `/user/show/${id}`;
    }
});
</script>
@endsection