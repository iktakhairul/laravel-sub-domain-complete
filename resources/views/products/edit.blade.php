@extends('layouts.admin')

@section('title', "Products" )

@section('content')
    <section class="content-header ml-5">
      <h1>Edit Product
      </h1>
        <hr>
      <ol class="breadcrumb">
        <li><a href="{{ route('products.index',['subdomain' => $subdomain]) }}"><i class="fa fa-building"></i> Product </a></li>
        <li class="active">> Edit product </li>
      </ol>
    </section>
  <hr>
    <br>
    <!-- Main content -->
    <section class="content container-fluid ml-5">
        <div class="panel-body">
         {!! Form::model($editProduct, ['method' => 'PATCH','route' => ['products.update', $editProduct->id,'subdomain' => $subdomain], 'class' => 'form-horizontal']) !!}
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="product" class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" style="width: 350px;" value="{{$editProduct->name ?? old('name')}}">
                    @if ($errors->has('name'))
                        <div class="text-red">{{ $errors->first('name')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('quantity')) has-error @endif">
                <label for="quantity" class="col-md-3">Quantity</label>
                <div class="col-md-9">
                    <input type="text" name="quantity" class="form-control" style="width: 350px;" value="{{$editProduct->quantity ?? old('quantity')}}">
                    @if ($errors->has('quantity'))
                        <div class="text-red">{{ $errors->first('quantity')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('price')) has-error @endif">
                <label for="price" class="col-md-3">quantity</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" style="width: 350px;" value="{{$editProduct->price ?? old('price')}}">
                    @if ($errors->has('price'))
                        <div class="text-red">{{ $errors->first('price')}}</div>
                    @endif
                </div>
            </div>
            <div class="form-group col-md-8" style="margin-left: -55px">
            <center>
                <a href="{{ route('products.index',['subdomain' => $subdomain]) }}" class="btn bg-maroon">Back</a>
                <input type="submit" value="Update" class="btn btn-success">
            </center>
            </div>
        {{ Form::close() }}
        </div>
    </section>
@endsection
