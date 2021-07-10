<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\{
    PageTemplate,
    Page
};

class PageController extends Controller
{
    private $commonValidationRules = [
        'template_id' => ['required', 'not_in:0'],
        'content' => ['nullable'],
        'seo_title' => ['nullable'],
        'seo_description' => ['nullable'],
        'seo_keywords' => ['nullable']
    ];

    public function index()
    {
        return view('admin::pages.index', [
            'pages' => Page::all()
        ]);
    }

    private function getValidationRules($action, $id = false)
    {
        if($action === 'add'){
            $addValidationRules = [
                'title' => ['required', 'unique:pages', 'max:255', 'min:3'],
                'slug' => ['required', 'unique:pages', 'regex:/^\//', 'max:255']
            ];
            return array_merge($addValidationRules, $this->commonValidationRules);
        }
        if($action === 'update' && $id){
            $updateValidationRules = [
                'title' => ['required', 'unique:pages,title,' . $id, 'max:255', 'min:3'],
                'slug' => ['required', 'unique:pages,slug,' . $id, 'regex:/^\//', 'max:255'],
            ];
            return array_merge($updateValidationRules, $this->commonValidationRules);
        }
    }

    public function create()
    {
        return view('admin::pages.create', [
            'templates' => PageTemplate::all()
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate($this->getValidationRules('add'));
        $validatedData['seo_noindex'] = (bool)$request->input('seo_noindex');
        $validatedData['seo_nofollow'] = (bool)$request->input('seo_nofollow');
        if($page = Page::create($validatedData)){
            return redirect()->route('admin.pages.edit', [$page]);
        }
    }

    public function edit($id)
    {
        if($page = Page::find($id)){
            return view('admin::pages.edit', [
                'page' => $page,
                'templates' => PageTemplate::all()
            ]);
        }
        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate($this->getValidationRules('update', $id));
        $validatedData['seo_noindex'] = (bool)$request->input('seo_noindex');
        $validatedData['seo_nofollow'] = (bool)$request->input('seo_nofollow');
        $page = Page::where('id', (int) $id);
        if($page->update($validatedData)){
            return view('admin::pages.edit', [
                'page' => $page->first(),
                'templates' => PageTemplate::all(),
                'success' => true
            ]);
        }
    }

    public function delete($id){
        if($page = Page::find((int)$id)){
            $page->delete();
        }
        return redirect(route('admin.pages.main'));
    }
}
