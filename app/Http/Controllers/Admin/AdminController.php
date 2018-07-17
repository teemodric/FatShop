<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;
class AdminController extends Controller
{
    public function testToastr(){
    	Toastr::info('test', $title = null, $options = []);
    	return view('admin.test');
    }
}
