<?php

namespace Modules\Application\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Page;

class PagesController extends Controller
{
    public function render(Request $request){
        $uri = $request->getRequestUri();
        if($page = Page::where('slug', '=', $uri)->firstOrFail()){
            $templateModule = 'application::';
            $template = $templateModule . $page->template->file_name;
            if (view()->exists($template)) {
                return view($template, [
                    'page' => $page
                ]);
            }
            abort(404);
        }
    }
}
