<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd('list user');
    }

    public function show($id)
    {
        dd('show:'.$id);
    }

    public function edit($id)
    {
        dd('edit:'.$id);
    }

    public function update()
    {
        dd('update');
    }

    public function create()
    {
        dd('create');
    }

    public function store()
    {
        dd('store user');
    }

    public function destroy(){
        dd('delete user');
    }

}
