@extends('user.master')
@section('title','จัดการฐานข้อมูล')
@section('content')

<div class="container"
<div class="row">
<div class = "col-md-12"><br/>
<h3 align="center">แก้ไขข้อมูลผู้ใช้ระบบ</h3> <br/>

@if(count($errors) > 0)  
    <div class="alert alert-danger">     
    <ul> @foreach($errors -> all() as $error)  
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
@endif

@if(\Session::has('success'))
    <div class="alert alert-success">
    <p>{{\Session::get('success') }}</p>
    </div>
@endif

<form method ="post" action="{{action('UsersController@update',$id)}}">
{{csrf_field()}}
<div class="form-group">
    <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ" value ="{{$user->fname}}"/> 
    <!-- $user -> fname ในการแก้ไขข้อมูลให้ข้อมูลเก่ามาแสดงก่อน -->
</div>

<div class="form-group">
    <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล" value ="{{$user->lname}}" /> 
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Update"/>
</div>
    <input type="hidden" name="_method" value="PATCH" />  <!-- ถ้าเป็นกระบวนการ hidden ในเรื่องการลบจะเป็น PATCH -->
</form>

<!-- ถ้าเป็นกระบวนการ hidden ในเรื่องการลบจะเป็น delete -->
</div>
</div>






