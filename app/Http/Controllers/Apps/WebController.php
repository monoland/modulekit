<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        return redirect()->guest(env('MCR_URL', '/'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function menu(Request $request)
    {
        $menus = [
            ['type' => 'item', 'icon' => 'dashboard', 'text' => 'Beranda', 'to' => ['name' => 'module']],
        ];

        array_push($menus, ['type' => 'subheader', 'text' => 'Master', 'class' => 'mt-2']);
        array_push($menus, ['type' => 'item', 'icon' => 'home', 'text' => 'Sample', 'to' => ['name' => 'sample']]);

        return response()->json($menus);
    }
}
