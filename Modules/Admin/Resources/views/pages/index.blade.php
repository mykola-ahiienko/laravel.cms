@extends('admin::layouts.master')
@section('content')
    <h1>Pages</h1>
    <a href="{{ route('admin.pages.create') }}" class="btn btn-info btn-lg">Create page</a>
@stop
