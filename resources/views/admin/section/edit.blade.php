@extends('layouts.adminlayout')

@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-center">
    <h3 class="breadcrumb-header">Edit Section</h3> 
</div>
<div id="main-wrapper">
<div class="row">
  <div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-white">
  <div class="panel-body">

<form action ="{{route('sections.update',  ['section' => $sections->id])}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">
<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
<input type = "hidden" name = "id" value = "{{ $sections->id }}">
<div class="form-group">
      <label for="title">Title</label>
    
        <input type="text" class="form-control" id="title"  name="title" value = '{{ $sections->title }}'>
      
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
              
        <input type="text" class="form-control" id="subtitle" name="subtitle" value = '{{ $sections->subtitle}}'>
      
    </div>
    <div class="form-group">
      <label for="description">Discription</label>
    
        <input type="text" class="form-control" id="description" name="description" value = '{{ $sections->description }}'>
      
    </div>
    <div class="form-group">
      <label for="image_upload"> Upload Image</label>
    
        <input type="file" class="form-control" id="image_upload" name="image_upload" value = '{{ $sections->image_upload }}'>
     
    </div>
   
    <div class="form-group">        
      <div class="text-center">
        <button type="submit" class="btn btn-default btn-lg" >Update</button>
      </div>
    
  </form>
  </div>
</div>
 
  </div>
</div>

@endsection
