@extends('layouts.adminlayout')

@section('content')
<div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-between">
    <h3 class="breadcrumb-header">Section</h3> 
    <a class="btn btn-success m-b-sm" href="{{route('sections.create')}}">Add section</a>
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
                            <th>Subtitles</th>
                            <th>Description</th>
                            <th>Upload Image</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sections as $section) 
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$section->title}}</td>
                            <td>{{$section->subtitle}}</td>
                            <td>{{$section->description}}</td>
                            <td>{{$section->upload_image}}</td>
                            <td>
                                <div class="btn-white">
                                <button class="btn btn-success">
                               

                                <a href="{{route('sections.edit', ['section' => $section->id])}}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                </button>
                                <form action ="{{route('sections.destroy', ['section' => $section->id])}}" method="post">
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




