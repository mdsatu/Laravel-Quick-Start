@extends('back.layouts.master')
@section('title', 'Edit Admin - ' . $data->full_name)

@section('master')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit admin</h3>
        <a href="{{route('back.admins.index')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-list"></i> All Admin</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('back.admins.update', $data->id)}}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="type" value="info">

        <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name*</label>
                    <input name="first_name" type="text" class="form-control" placeholder="First Name" value="{{old('first_name') ?? $data->first_name}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name*</label>
                    <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{old('last_name') ?? $data->last_name}}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Title*</label>
            <input name="title" type="text" class="form-control" placeholder="Title" value="{{old('title') ?? $data->title}}" required>
        </div>
        <div class="form-group">
            <label>Mobile Number*</label>
            <input name="mobile_number" type="number" class="form-control" placeholder="Mobile Number" value="{{old('mobile_number') ?? $data->mobile_number}}" required>
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter email" value="{{old('email') ?? $data->email}}">
        </div>
        <div class="form-group">
            <label>Select Role*</label>
            <select name="role[]" class="form-control selectpicker" multiple required>
                @foreach($roles as $role)
                <option value="{{$role->id}}" {{(in_array($role->id, $data->Roles->pluck('id')->toArray())) ? 'selected' : ''}}>{{$role->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input name="address" type="text" class="form-control" placeholder="Address" value="{{old('address') ?? $data->address}}">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" id="" cols="30" rows="5" class="form-control" placeholder="Bio">{{old('bio') ?? $data->bio}}</textarea>
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <br>
        <small><b>NB: *</b> marked are required field.</small>
        </div>
    </form>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Change password</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('back.admins.update', $data->id)}}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="type" value="password">

        <div class="box-body">
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Change Password</button>
        </div>
    </form>
</div>
@endsection

@section('head')
<!-- Select 2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('footer')
<!-- Select 2 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script>
// Select2
$('.selectpicker').selectpicker();
</script>
@endsection
