@extends('back.layouts.master')
@section('title', 'Edit Admin')

@section('head')
    <!-- Select 2 -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- End Select 2 -->
@endsection

@section('master')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit admin</h3>
        <a href="{{route('admin.admins')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-list"></i> Admin List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('admin.editAdmin', $data->id)}}">
        @csrf
        <input type="hidden" name="type" value="info">

        <div class="box-body">
        <div class="form-group">
            <label for="Name">Name*</label>
            <input name="name" type="text" class="form-control" id="Name" placeholder="Name" value="{{old('name') ?? $data->name}}" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number*</label>
            <input name="mobile_number" type="number" class="form-control" id="mobile" placeholder="Mobile Number" value="{{old('mobile_number') ?? $data->mobile_number}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address*</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{old('email') ?? $data->email}}" required>
        </div>
        <div class="form-group">
            <label>Select Role*</label>
            <select name="role[]" class="form-control selectpicker" multiple required>
                @foreach($roles as $role)
                <option value="{{$role->id}}" {{(in_array($role->id, $data->Role->pluck('id')->toArray())) ? 'selected' : ''}}>{{$role->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input name="address" type="text" class="form-control" placeholder="Address" value="{{old('address') ?? $data->address}}">
        </div>
        <div class="form-group">
            <label>Small Information</label>
            <textarea name="bio" id="" cols="30" rows="5" class="form-control" placeholder="Small Information">{{old('bio') ?? $data->bio}}</textarea>
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

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Change password</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('admin.editAdmin', $data->id)}}">
        @csrf
        <input type="hidden" name="type" value="password">

        <div class="box-body">
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Change Password</button>
        </div>
    </form>
</div>
@endsection

@section('footer')
<!-- Select 2 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script>
 // Select2
$('.selectpicker').selectpicker();
</script>
@endsection