@extends('layouts.adminlayout')

@section('content')
<div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-between">
    <h3 class="breadcrumb-header">Page</h3> 
    <a class="btn btn-success m-b-sm" href="{{route('pages.create')}}">Add page</a>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-body">
                <div class="table-responsive">
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Select Section</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page) 
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$page->title}}</td>
                            <td>{{$page->url}}</td>
                            <td>{{$page->select_section}}</td>
                            <td>
                                <div class="btn-white">
                                <button class="btn btn-success">
                               

                                <a href="{{route('pages.edit', ['page' => $page->id])}}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                </button>
                                <form action ="{{route('pages.destroy', ['page' => $page->id])}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                                </div>
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
</div>
@endsection




