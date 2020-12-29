<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function page($slug)
    {
        $page = DB::table('pages')->where('page', $slug)->get();
        $term = DB::table('pages')->where('page', $slug)->value('body');
        if (!$term) {
            return view('404');
        }
        $blocks = DB::table('blocks');
        $block = DB::table('blocks')->where('name', 'advertising')->get();
        return view('page', ['page' => $page, 'blocks' => $blocks, 'block' => $block]);
    }
}
