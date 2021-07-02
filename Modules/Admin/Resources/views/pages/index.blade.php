@extends('admin::layouts.master')
@section('content')
    <div class="pages">
        <div class="row header-row">
            <div class="col-12 d-flex flex-row">
                <h1>Pages</h1>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-info btn-lg" id="create-page-btn">
                    Create page
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Template</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->template->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
