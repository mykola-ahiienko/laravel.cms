@extends('admin::layouts.master')
@section('content')
    <h1>New content group</h1>
    <div class="row create-page-row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" method="post" action="{{ Request::url() }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 text-end form-label control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input name="name" placeholder="Group name" type="text" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <div class="invalid-feedback"><b>{{ $message }}</b></div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end form-label control-label col-form-label">Displaying at templates</label>
                            <div class="col-sm-9">
                                @if($errors->has('templates'))
                                <div id="multiple-select-error" class="alert alert-danger" role="alert"><b>You must select at least one template</b></div>
                                @endif
                                <select id="multiple-select" name="templates[]" id="templates" class="select2 form-select shadow-none mt-3" multiple style="height: 36px;width: 100%;">
                                    @foreach($templates as $template)
                                        <option value="{{ $template->id }}">{{ $template->name }}</option>
                                    @endforeach
                                </select>
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
