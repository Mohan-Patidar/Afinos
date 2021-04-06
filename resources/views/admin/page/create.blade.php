@extends('layouts.adminlayout')

@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif
<div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-center">
    <h3 class="breadcrumb-header">Create Page</h3> 
</div>
<div id="main-wrapper">
<div class="row">
  <div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-white">
  <div class="panel-body">
  <form method = "Post" action="{{route('pages.store')}}">
  @csrf
    <div class="form-group">
      <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="url">Url</label>         
        <input type="text" class="form-control" id="url" placeholder="URL" name="url">
    </div>
    <div class="form-group">
      <label for="select_section">Select Section</label>
        <input type="text" class="form-control" id="select_section" placeholder="Select Section" name="select_section">
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