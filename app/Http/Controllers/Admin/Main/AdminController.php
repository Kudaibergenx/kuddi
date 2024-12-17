<?php
namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.layouts.main');
    }
}
