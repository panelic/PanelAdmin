<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserManagement;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userMgn()
    {
        return view('content/user');
    }

    public function index($id = null)
    {
        if($id == null){
            return UserManagement::orderBy('id', 'asc')->get();
        } else{
            return $this->show($id);
        }
    }

    public function store(Request $request)
    {
        $users = new UserManagement;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->status = $request->input('status');
        $users->created_at = $request->input('created_at');
        $users-save();
        return 'Manajemen User Berhasil Dibuat Dengan ID' . $users->id;
    }


    public function show($id){
        return UserManagement::find($id);
    }

    public function update(Request $request, $id){
        $users = UserManagement::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->status = $request->input('status');
        $users->created_at = $request->input('created_at');
        $users-save();
        return 'Manajemen User Berhasil Diubah Dengan ID' . $users->id;
    }

    public function destroy($id){
        $users = UserManagement::find($id)->delete();
        return 'Manajemen User Berhasil Dihapus';
    }
}
