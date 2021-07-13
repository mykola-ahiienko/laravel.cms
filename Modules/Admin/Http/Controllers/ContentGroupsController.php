<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\ContentGroup;
use Modules\Admin\Entities\PageTemplate;

class ContentGroupsController extends Controller
{
    public function index()
    {
        return view('admin::content-groups.index', [
            'content_groups' => ContentGroup::all()
        ]);
    }

    public function create()
    {
        return view('admin::content-groups.create', [
            'templates' => PageTemplate::all()
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:content_groups', 'max:255', 'min:3'],
            'templates' => ['required', 'array', 'min:1']
        ]);
        if($contentGroup = ContentGroup::create($validatedData)){
            $templates = PageTemplate::find($validatedData['templates']);
            $contentGroup->templates()->attach($templates);
            return 'success';
        }
    }
}
