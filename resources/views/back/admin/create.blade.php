@extends('back.layouts.master')
@section('title', 'Create Admin')

@section('master')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create new admin</h3>
        <a href="{{route('back.admins.index')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-list"></i> Admin List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('back.admins.store')}}">
        @csrf
        <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name*</label>
                    <input name="first_name" type="text" class="form-control" placeholder="First Name" value="{{old('first_name')}}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name*</label>
                    <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Title*</label>
            <input name="title" type="text" class="form-control" placeholder="Title" value="{{old('title')}}" required>
        </div>
        <div class="form-group">
            <label>Mobile Number*</label>
            <input name="mobile_number" type="number" class="form-control" placeholder="Mobile Number" value="{{old('mobile_number')}}" required>
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label>Select Role*</label>
            <select name="role[]" class="form-control selectpicker" multiple required>
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input name="address" type="text" class="form-control" placeholder="Address" value="{{old('address')}}">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" ols="30" rows="5" class="form-control" placeholder="Bio">{{old('bio')}}</textarea>
        </div>
        <div class="form-group">
            <label>Password*</label>
            <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password*</label>
            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        <small><b>NB: *</b> marked are required field.</small>
        </div>
    </form>
</div>
@endsection

@section('head')
<!-- Bootstrap-select -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('footer')
<!-- Bootstrap-select -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script>
// Bootstrap-select
$('.selectpicker').selectpicker();
</script>
@endsection
