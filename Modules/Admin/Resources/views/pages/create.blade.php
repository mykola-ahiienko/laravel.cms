@extends('admin::layouts.master')
@section('content')
    <h1>Add new page</h1>
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
                                <input type="text" class="form-control" id="title" name="title" placeholder="Page Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end form-label control-label col-form-label">Template</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                    @foreach($templates as $template)
                                        <option value="{{ $template->id }}">{{ $template->name }}</option>
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
                                        <span class="input-group-text" id="url"> {{ URL::to('/') . '/' }}</span>
                                    </div>
                                    <input type="text" name="url" class="form-control"aria-label="Username" aria-describedby="url">
                                </div>
                             </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h3>Content :  </h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h3> SEO : </h3>
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                 Description
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="seo_description" name="seo_description" placeholder="<meta name=description>">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                 Keywords
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" placeholder="<meta name=keywords>">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                No index
                            </label>
                            <div class="col-sm-9" style="margin: auto">
                                <input type="checkbox" class="form-check-input form-checkboxes" id="seo_noindex" name="seo_noindex">
                            </div>
                            <label class="col-sm-3 text-end form-label control-label col-form-label">
                                No follow
                            </label>
                            <div class="col-sm-9" style="margin: auto">
                                <input type="checkbox" class="form-check-input form-checkboxes" id="seo_nofollow" name="seo_nofollow">
                            </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
