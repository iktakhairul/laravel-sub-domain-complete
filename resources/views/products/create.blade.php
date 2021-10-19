@extends('layouts.admin')

@section('title', "Products" )

@section('content')
    <section class="ml-5content-header">
      <h1><i class="fa fa-product-hunt"></i> Create Product
        <small></small>
      </h1>
        <hr>
      <ol class="breadcrumb ml-5">
        <li><a href="{{ route('products.index', ['subdomain' => $subdomain]) }}"><i class="fa fa-building"></i> Products </a></li>
        <li class="active"><i class="fa fa-product-hunt"></i>Create Product </li>
      </ol>
    </section>
  <hr>
    <br>
    <section class="content container-fluid ml-5">
        <div class="panel-body">
        {{ Form::open(array('route' => ['products.store','subdomain' => $subdomain],'method'=>'POST', 'class' => 'form-horizontal')) }}
          <div class="form-group @if ($errors->has('name')) has-error @endif">
            <label for="product" class="col-md-3">Name</label>
            <div class="col-md-9">
              <input type="text" name="name" class="form-control" style="width: 350px;">

                @if ($errors->has('quantity'))
                    <div class="text-red">{{ $errors->first('name') }}</div>
                @endif
            </div>
          </div>
          <div class="form-group @if ($errors->has('quantity')) has-error @endif">
          <label for="price" class="col-md-3">Quantity</label>
              <div class="col-md-9">
              <input type="text" name="quantity" class="form-control" style="width: 350px;">
                  @if ($errors->has('quantity'))
                      <div class="text-red">{{ $errors->first('quantity') }}</div>
                  @endif
              </div>
          </div>
            <div class="form-group @if ($errors->has('price')) has-error @endif">
                <label for="price" class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" style="width: 350px;">
                    @if ($errors->has('price'))
                        <div class="text-red">{{ $errors->first('price') }}</div>
                    @endif
                </div>
            </div>
          <div class="form-group col-md-8" style="margin-left: -55px">
              <center>
              <a href="{{ route('products.index',['subdomain' => $subdomain]) }}" class="btn bg-maroon">Back</a>
              <input type="submit" value="Create" class="btn btn-success">
              </center>
          </div>
        {{ Form::close() }}
    </section>

@endsection
