<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Submenu;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role;
        $menu_id = $role->access()->pluck('menus.id');
        $menu = Menu::find($menu_id);
        return view('dashboard', compact('role', 'menu'));
    }
}
