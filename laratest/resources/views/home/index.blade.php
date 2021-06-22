@extends('../navbar')



{{-- main content --}}
@section('main_content')
    <h1>  Welcome home! {{$name}}</h1>
    <img src="{{asset('upload/abc.png')}}" width="100px" height="100px">    
@endsection

@section('title')
    :: Home Page ::
@endsection

@section('page_title')
    -- Home Page --
@endsection

           