<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    public function __construct(){
        $menus=Menu::all()->sortBy('title')->sortBy('order');
        View::share('menus', $menus);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
