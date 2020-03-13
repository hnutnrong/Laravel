@extends('user.master')
@section('title','Welcome Homepage')
@section('content')

<h1>Homepage</h1>
<a href="{{route('user.create')}}">เพิ่มข้อมูล</a>
@stop