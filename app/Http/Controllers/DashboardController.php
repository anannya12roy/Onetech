<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalcategory = Category::count();
        $totalusers = User::count();
        $totalproducts = Product::where('status',1)->count();
        $totalcolor = Color::count();
        return view('admin.dashboard', compact('totalcategory', 'totalusers', 'totalcolor', 'totalproducts'));
    }

    // public function logout(){
    //     Session::flush();
    //     return redirect('/login');
    // }

}
