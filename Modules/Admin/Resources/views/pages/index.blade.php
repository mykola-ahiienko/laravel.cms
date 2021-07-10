@extends('admin::layouts.master')
@section('content')
    <div class="pages">
        <div class="row header-row">
            <div class="col-12 d-flex flex-row">
                <h1>Pages</h1>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-info btn-page-action">
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
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->template->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.pages.edit', [$page]) }}" class="btn btn-success text-white btn-page-actions">Edit</a>
                                            <a href="{{ URL::to('/') . $page->slug }}" target="_blank" class="btn btn-primary btn-page-actions">View</a>
                                            <a href="{{ route('admin.pages.delete', [$page]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-page-actions">Delete</a>
                                        </td>
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
