@extends('layouts.adminlayout')

@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif
<div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-center">
    <h3 class="breadcrumb-header">Create section</h3> 
</div>
<div id="main-wrapper">
<div class="row">
  <div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-white">
  <div class="panel-body">
  <form method = "Post" action="{{route('sections.store')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="monthrate">Subtitle</label>         
        <input type="text" class="form-control" id="subtitle" placeholder="Subtitle" name="subtitle">
    </div>
    <div class="form-group">
      <label for="description">Discription</label>
        <input type="text" class="form-control" id="description" placeholder="Discription" name="description">
    </div>
    <div class="form-group">
      <label for="yearlyrate"> Upload Image</label>
        <input type="file" class="form-control" id="image_upload" placeholder=" Upload Image" name="image_upload">
    </div>
    <div class="form-group">        
      <div class="text-center">
        <button type="submit" class="btn btn-default btn-lg">Create</button>
      </div>
    </div>
  </form>
  </div>
</div>
 
  </div>
</div>


</div>
</div>

@endsection