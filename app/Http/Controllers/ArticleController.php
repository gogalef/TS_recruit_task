<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function list()
    {
        return 'list';
    }
    public function view($id)
    {
        return 'view';
    }
}
