


@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
<div class="page-title">
    <h3 class="breadcrumb-header">User Profile</h3>
</div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">


                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Basic Information</h4>
                    </div>
                    @if(Session::has('message')) 
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p>{{ Session::get('message') }}</p>       
                    </div>
                    @endif
                    <div class="panel-body">
                            <div class="panel-body">
                                <form method = "POST" id="profile-details" action="{{route('profile.store')}}" novalidate>
                                @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}" />
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First
                                                    Name</label>
                                                <input type="text" name="name" id="name" required class="form-control"
                                                    value = '{{$user->name}}'>
                                                    <button class="btn-blue" onclick="copyCode('name')">
											<img src="img/copy.svg" alt="copy">
									</button>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                   
                                     
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" required name="last_name" class="form-control"
                                                    placeholder="Last Name" value="{{$user->last_name}}">
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" name="phone" required value="{{$user->phone}}" class="form-control"
                                                    placeholder="Phone No.">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" name="email" required class="form-control"
                                                value='{{$user->email}}'>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cage Code</label>
                                                <input type="text" required value="{{$user->cagecode}}" name="cagecode" class="form-control"
                                                    placeholder="Code">
                                                @error('cagecode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are you registered in SAMS?</label>
                                                <p class="inp-radio">
                                                    <span>
                                                        <input type="radio" @if($user->sams) selected @endif id="test1" name="sams" checked=""
                                                            value="yes">
                                                        <label for="test1">Yes</label>
                                                    </span>
                                                    <span class="pl-4">
                                                        <input type="radio" @if(!$user->sams) selected @endif id="test2" name="sams" value="yes">
                                                        <label for="test2">No</label>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" required value="{{$user->city}}" name="city" class="form-control" placeholder="City">
                                                @error('cagecode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip</label>
                                                <input type="text" required value="{{$user->zip}}" name="zip" class="form-control" placeholder="Zip">
                                                @error('zip')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <select required class="form-control" name="state">
                                                    <option>State</option>
                                                    @foreach($address as $add)
                                                        <option @if($add->state_code == $user->state) selected @endif value="{{ $add->state_code }}">{{ $add->state }}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select required class="form-control" name="country">
                                                    <option>Country</option>
                                                    @foreach($address as $country)
                                                        <option @if($add->country_code == $user->country) selected @endif value="{{$country->country_code}}">{{ $country->country }}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea required name="address" class="form-control" rows="3"
                                                    placeholder="Address">{{$user->address}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </form>
                            </div>
                    </div>
                </div>

                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Update Photo</h4>
                    </div>
                    @if(Session::has('message-profile')) 
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p>{{ Session::get('message-profile') }}</p>       
                    </div>
                    @endif
                    <div class="panel-body">
                       
                            <div class="panel-body">
                                <form method="POST" id="profile-picture" action="{{route('profileavtar')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}" />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' required name="image"  id="imageUpload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        @if($user->image)
                                                            <div id="imagePreview"
                                                            style="background-image: url({{url('uploads/section_image/') .'/'. $user->image }})">
                                                            </div>
                                                        @else
                                                            <div id="imagePreview"
                                                            style="background-image: url('http://via.placeholder.com/300x300')">
                                                            </div>
                                                        @endif
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Photo</button>
                                </form>
                            </div>
                        
                    </div>
                </div>
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Change Password</h4>
                    </div>
                    @if(Session::has('message-password')) 
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p>{{ Session::get('message-password') }}</p>       
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="panel-body">
                            <form method="post" id="profile-password" action="{{route('updatepassword')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}" />
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" required  name='password' placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" required name="cpassword" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div><!-- Main Wrapper -->

</div><!-- /Page Inner -->

</div><!-- /Page Content -->
</div><!-- /Page Container -->

@endsection

@section('additionalscripts')
    <script>
       
        $("#profile-details").validate();
        $("#profile-picture").validate();
        $("#profile-password").validate();
    </script>
@endsection