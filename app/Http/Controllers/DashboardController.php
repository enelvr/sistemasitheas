<?php
//autor: Enelvillafranca
//web: www.syscode.com.ve
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      return view('dashboard.index');
    }
}
