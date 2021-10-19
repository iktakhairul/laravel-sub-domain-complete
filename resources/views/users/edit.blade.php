@extends('layouts.admin')

@section('title', "Users" )

@section('content')
    <section class="ml-5 content-header">
      <h1>Edit User {{ $user->name }}</h1>
        <hr>
        <br>
      <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> Users </a></li>
        <li class="active"><i class="fa fa-user"></i>. Edit User</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="ml-5 content container-fluid">
        <div class="panel-body">
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'class' => 'form-horizontal']) !!}
            <input type="text" name="id" class="hide form-control" value="{{$user->id}}" required>
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="product" class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" style="width: 350px;" value="{{$user->name ?? old('name')}}">
                    @if ($errors->has('name'))
                        <div class="text-red">{{ $errors->first('name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="email" class="col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" class="form-control" style="width: 350px;" value="{{$user->email ?? old('email')}}">
                    @if ($errors->has('email'))
                        <div class="text-red">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('role')) has-error @endif">
                <label for="email" class="col-md-3">Role</label>
                <div class="col-md-9">
                    <input type="text" name="role" class="form-control" style="width: 350px;" value="{{$user->role ?? old('role')}}">
                    @if ($errors->has('role'))
                        <div class="text-red">{{ $errors->first('role') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group col-md-8" style="margin-left: -55px">
                <center>
                <a href="{{ route('users.index') }}" class="btn bg-maroon">Back</a>
                <input type="submit" value="Update" class="btn btn-success">
                </center>
            </div>
            {{ Form::close() }}
            </div>
    </section>
@endsection
