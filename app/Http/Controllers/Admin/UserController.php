<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUsers()
    {
        $listUsers = User::paginate(8);
        return view('admin.users.list-user')->with([
            'users' => $listUsers
        ]);
    }

    public function addUsers()
    {
        return view('admin.users.add-user');
    }

    public function addPostUsers(Request $req)
    {
        $data = [
            'name' => $req->nameUser,
            'email' => $req->emailUser,
            'password' => Hash::make($req->passwordUser),
            'role' => $req->roleUser,
        ];
        User::create($data);

        return redirect()->route('admin.users.listUsers')->with([
            'message' => 'Thêm thành công người dùng mới!'
        ]);
    }

    public function deleteUsers(Request $req)
    {
        $user = User::find($req->idUser);
        $user->delete();

        return redirect()->back()->with([
            'message' => 'Xoá thành công!'
        ]);
    }

    public function detailUsers($idUser)
    {
        $user = User::where('user_id', $idUser)->first();

        return view('admin.users.detail-user')->with([
            'users' => $user
        ]);
    }

    public function editUsers($idUser)
    {
        $user = User::where('user_id', $idUser)->first();

        return view('admin.users.edit-user')->with([
            'users' => $user
        ]);
    }

    public function editPatchUsers(Request $req, $idUser)
    {
        $user = User::where('user_id', $idUser)->first();

        $data = [
            'name' => $req->nameUser,
            'email' => $req->emailUser,
            'password' => Hash::make($req->passwordUser),
            'role' => $req->roleUser,
        ];
        User::where('user_id', $idUser)->update($data);
        return redirect()->route('admin.users.listUsers')->with([
            'message' => 'Sửa thành công người dùng!'
        ]);
    }
}

