<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::query()->get();
        return view('admin.pages.payment_admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $roles = Role::query()->get();
        return view('admin.pages.payment_admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|unique:roles,name',
        ]);
        Role::query()->create([
            'id' => $request->id,
            'name' => $request->name,
        ]);
        return redirect()->route('role.index')->with('success', "Muvaffaqiyatli qo'shildi");
    }

    public function edit(Role $role)
    {
        return view('admin.pages.payment_admin.roles.edit', compact('role'));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => "required|unique:roles,name,$role->id",
            'id' => "required|unique:roles,id,$role->id",
        ]);
        $role->id = $request->id;
        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.index')->with('success', 'Role ma\'lumotlari yangilandi');
    }

    public function destroy($id)
    {
        $role = Role::query()->findOrFail($id);
        $role->delete();
        return redirect()->route('role.index')->with('success', 'Role o\'chirildi');
    }
}
