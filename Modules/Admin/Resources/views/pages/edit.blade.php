@extends('admin::layouts.master')
@section('content')
    <h1>Edit page</h1>
    @isset($success)
        <div class="alert alert-success" role="alert">
           Page was edited successfully
        </div>
    @endisset
    <div class="row create-page-row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" method="post" action="{{ Request::url() }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h3>Required fields : </h3>
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input name="title" value="{{ $page->title }}"  type="text" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback"><b>{{ $message }}</b></div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end form-label control-label col-form-label">Template</label>
                            <div class="col-sm-9">
                                <select name="template_id" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                    @foreach($templates as $template)
                                        <option @if($template->id === $page->template->id) selected @endif value="{{ $template->id }}">{{ $template->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                URI
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="slug"> {{ URL::to('/') . '/' }}</span>
                                    </div>
                                    <input type="text" value="{{ $page->slug }}" name="slug" class="form-control @error('slug') is-invalid @enderror"aria-label="slug" aria-describedby="slug">
                                    @error('slug')
                                    <div class="invalid-feedback"><b>{{ $message }}</b></div>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h3>Content :  </h3>
                                <input type="hidden" name="content">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h3> SEO : </h3>
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                Title
                            </label>
                            <div class="col-sm-9">
                                <input name="seo_title" value="{{ $page->seo_title }}" type="text" class="form-control" name="seo_title" placeholder="<title>">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                Description
                            </label>
                            <div class="col-sm-9">
                                <input name="seo_description" value="{{ $page->seo_description }}" type="text" class="form-control" placeholder="<meta name=description>">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                Keywords
                            </label>
                            <div class="col-sm-9">
                                <input name="seo_keywords" value="{{ $page->seo_keywords }}" type="text" class="form-control"  placeholder="<meta name=keywords>">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                No index
                            </label>
                            <div class="col-sm-9 checkbox-col">
                                <input name="seo_noindex" type="checkbox" @if($page->seo_noindex) checked @endif value="{{ $page->seo_noindex }}" class="form-check-input">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                No follow
                            </label>
                            <div class="col-sm-9 checkbox-col">
                                <input name="seo_nofollow" type="checkbox" @if($page->seo_nofollow) checked @endif value="{{ $page->seo_nofollow }}" class="form-check-input">
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
