@extends('layoutUser')

@section('nav')

@foreach($catagories as $cata)

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users"></i>
        <span>{{$cata['c_name']}}</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        @foreach($cata['s_data'] as $sub)

        <a class="dropdown-item" href="{{route('subcatagory.brand',['id' => $sub['s_id']])}}">{{$sub['s_name']}}</a>
        @endforeach
    </div>
</li>
@endforeach

}
@endsection

@section('content')

@endsection