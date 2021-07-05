<?php

namespace Modules\Application\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{
    public function render(Request $request){
        $uri = $request->getRequestUri();
        var_dump($uri);
    }
}
