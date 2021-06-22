@extends('main')

@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

{{-- nav bar --}}
@section('navbar')
<a href='{{route('user.create')}}'> Create User </a> |
<a href='/user/list'> View All Users </a> |
<a href='/logout'>logout</a>   
@endsection
