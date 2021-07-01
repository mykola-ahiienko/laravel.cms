@extends('admin::layouts.master')
@section('content')
    <h1>Add new page</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" method="post" action="{{ Request::url() }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Page Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end control-label col-form-label">Template</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                    @foreach($templates as $template)
                                        <option value="{{ $template->id }}">{{ $template->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end control-label col-form-label">
                                {{ URL::to('/') . '/' }}
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="url" name="url" placeholder="Page URL">
                             </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end control-label col-form-label">
                                Content
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="content" name="content" >
                            </div>
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
