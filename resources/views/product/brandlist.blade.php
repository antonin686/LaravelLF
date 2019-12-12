@extends('layoutUser')

@section('nav')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <input type="hidden" id="sid" value="{{$brands->s_id}}">
        <table id="tableid" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands->data as $brand)
                    <tr id="{{$brand->m_id}}">
                        <td>{{$brand->m_id}}</td>
                        <td>{{$brand->name}}</td>              
                    </tr>
                    @endforeach
                </tbody>
            </table>
      
    </div>
</div>


<script>
$('#tableid').on('click', 'tr', (event) => {
    var id = $(event.currentTarget).attr("id");
    var sid = $("#sid").val();
    if (id != null) {
        window.location.href = `/product/list/${sid}/${id}`;
    }
});
</script>

@endsection