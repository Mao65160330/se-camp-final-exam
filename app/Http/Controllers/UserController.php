<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลผู้ใช้ทั้งหมดจากฐานข้อมูล
        $users = User::all();
        return view('homepage', ['users' => $users]);
    }

    public function create()
    {
        return view('addpage');
    }

    // บันทึกข้อมูลผู้ใช้ใหม่
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('homepage');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('homepage', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('editpage', compact('user'));
    }
    
    public function update(Request $request, $id)
    {

        User::findOrFail($id)->update($request->all());
        return redirect()->route('homepage');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('homepage');
    }
}
