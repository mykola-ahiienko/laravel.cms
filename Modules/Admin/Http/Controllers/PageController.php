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
        $validatedData = $request->validate([
            'title' => ['required', 'unique:pages', 'max:255', 'min:3'],
            'template_id' => ['required', 'not_in:0'],
            'slug' => ['required', 'unique:pages', 'max:255'],
            'content' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
        ]);
        $validatedData['seo_noindex'] = (bool)$request->input('seo_noindex');
        $validatedData['seo_nofollow'] = (bool)$request->input('seo_nofollow');
        if($page = Page::create($validatedData)){
            return $page->id;
        }
    }
}
