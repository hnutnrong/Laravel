<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray(); //ดึงข้อมูลมา
        return view('user.index',compact('users')); ///compact มัดรวมเป็น array user 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fname' => 'required', 'lname' => 'required']); ///validate คำสั่งเช็คข้อมูล

        $user = new User(
            [
                'fname' => $request->get('fname'),
                'lname' => $request->get('lname')
            ]
            );
        $user ->save();
        return redirect()->route('user.index')->with('success','บันทึกข้อมูลเรียบร้อย'); //การเปลี่ยนหน้าไปที่ 'create' เอาค่าsuccess ที่บอกว่าบันทึกข้อมูลเรียบร้อยไปแสดง
    }
                            ///with การโยน data  ออกไปแสดงที่ view 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect()->route('user.index')->with('success','ลบข้อมูลเรียบร้อย');
    }
}
