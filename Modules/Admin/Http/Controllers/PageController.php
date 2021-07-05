<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Application\Entities\Page;
use Modules\Admin\Entities\{
    PageTemplate,
};

class PageController extends Controller
{
    public function index()
    {
        return view('admin::pages.index', [
            'pages' => Page::all()
        ]);
    }

    public function create()
    {
        return view('admin::pages.create', [
            'templates' => PageTemplate::all()
        ]);
    }

    public function add(Request $request){
        var_dump($request);
        die();
    }
}
