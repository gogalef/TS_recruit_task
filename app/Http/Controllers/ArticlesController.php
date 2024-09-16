<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function list()
    {
        return 'list';
    }
    public function view($id)
    {
        return 'view';
    }
    public function add()
    {
        return 'add';
    }
    public function edit($id)
    {
        return 'edit';
    }

    public function delete($id)
    {
        return 'delete';
    }
}
