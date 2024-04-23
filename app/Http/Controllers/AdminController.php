<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
        $users = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user.user', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        $users = User::all();
        return view('user.user' , compact('users'));
    }

    public function userCreate()
    {
        return view('user.create');
    }

    public function Userstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make(request()->input('password'));
        // dd($data);
        User::create($data);
        return redirect()->route('user');
    }

    public function userEdit($id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    public function userUpdate(Request $request, $id)
    {
        $karyawan = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('user');
    }

    public function userDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user');
        
    }

}
