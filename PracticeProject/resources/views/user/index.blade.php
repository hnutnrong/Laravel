@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                 <div align="right"><a href ="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a></div>

            <!-- ดึง success มาแสดง ว่าลบข้อมูลเรียบร้อยแล้ว ไปดูได้ที่  function destroy() -->
                @if(\Session::has('success')) 
                    <div class="alert alert-success">
                    <p>{{\Session::get('success') }}</p>
                    </div>
                 @endif
            
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
                        <td><a href="{{action('UsersController@edit', $row['id'])}}" class="btn btn-primary">Edit</td>
                      <td>
                      <form method="post" class="delete_form" action="{{action('UsersController@destroy',$row['id'])}}"> <!-- ในการDELETE  -->
                        {{csrf_field()}}   <!-- ป้องกัน request ที่ไม่พึงประสงค์ -->
                        <input type="hidden" name="_method" value="DELETE" />  <!-- ถ้าเป็นกระบวนการ hidden ในเรื่องการลบจะเป็น DELETE -->
                        <button type="submit" class="btn btn-danger">Delete</button>            
                      </form>                  
                      </td>
                        
                        </tr>
                        @endforeach
                    </table>
            </div>    
        </div>
    </div>
    <script type ="text/javascript">
    $(document).ready(function(){
        $('.delete_form').on('submit',function(){
            if(confirm("คุณต้องการลบข้อมูลหรือไม่ ? ")){
                return true;
            }
            else{
                return false;
            }


        })
        
        
        })
    
    
    </script>                            <!-- การ confirm dialog -->







@stop

