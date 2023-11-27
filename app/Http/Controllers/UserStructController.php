<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Models\UserStruct;
use Illuminate\Http\Request;

class UserStructController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users_struct = UserStruct::leftJoin('users', 'user_structs.id', '=','users.user_struct_id')
            ->select('fio','position','user_structs.id', 'user_structs.is_department','user_structs.parent_id','_lft','_rgt')
            ->where('user_structs.status','=','0')
            ->get()
            ->toTree();

        return view('test.index', compact('users_struct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('test.create', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
