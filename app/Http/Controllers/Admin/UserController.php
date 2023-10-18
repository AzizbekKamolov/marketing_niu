<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Role;
use Test\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->get();
        return view('admin.pages.payment_admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::query()->get();
        return view('admin.pages.payment_admin.users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'username' => 'required|unique:users,username',
           'password' => 'required|min:4',
           'role' => 'required',
        ]);
        User::query()->create([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('user.index')->with('success', "Muvaffaqiyatli qo'shildi");
    }
    public function edit(User $user)
    {
        $roles = Role::query()->get();
        return view('admin.pages.payment_admin.users.edit', compact('user', 'roles'));
    }

    public function show($id)
    {
        //
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'username' => "required|unique:users,username,$user->id",
            'role' => 'required',
        ]);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->role = $request->role;
        if ($request->has('password')){
            $user->password = bcrypt($request->password);
        }
        $user->update();
        return redirect()->route('user.index')->with('success', 'Foydalanuvchi ma\'lumotlari yangilandi');
    }
    public function destroy($id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Foydalanuvchi o\'chirildi');
    }
}
