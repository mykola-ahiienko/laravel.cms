@extends('admin::layouts.master')
@section('content')
    <div class="content-fields">
        <div class="row header-row">
            <div class="col-12 d-flex flex-row">
                <h1>Content groups </h1>
                <a href="{{ route('admin.content-groups.create') }}" class="btn btn-info btn-page-action">
                    Create new
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
                                    <th>Name</th>
                                    <th>Count fields</th>
                                    <th>Displaying at templates</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($content_groups as $content_group)
                                    <tr>
                                        <td>{{ $content_group->name }}</td>
                                        <td>{{ 0  }}</td>
                                        <td>
                                            @foreach($content_group->templates as $template)
                                                {{ $template->name }} <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-success text-white btn-page-actions">Edit</a>
                                            <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-page-actions">Delete</a>
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
