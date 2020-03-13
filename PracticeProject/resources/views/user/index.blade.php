@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                 <div align="right"><a href ="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a></div>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>First</th>
                            <th>Lastname</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($users as $row)
                        <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['fname']}}</td>
                        <td>{{$row['lname']}}</td>
                        <td><a class="btn btn-primary">Edit</td>
                        <td><a class="btn btn-danger">Delete</td>
                        
                        </tr>
                        @endforeach
                    </table>
            </div>    
        </div>
    </div>
@stop