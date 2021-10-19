@extends('layouts.admin')

@section('title', "Products" )

@section('content')

    <section class="content-header">
        <h1 class="breadcrumb ml-5">
            <i class="fa fa-procedures"></i>. Products
        </h1>
    </section>
 <hr>
    <br>
     <!-- Main content -->
        <section class="content container-fluid">
            <div class="form-group col-md-12">
                <div class="pull-right">
                    <a href="{{ route('products.create', ['subdomain' => Auth::user()->role]) }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create Products</a>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
            @endif
            <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
            <div class="box-body table-responsive">
                <table id="listProdukToko" class="table table-bordered table-stripped responsive">
                    <thead>
                    <tr>
                        <th width="20">No</th>
                        <th>Name </th>
                        <th>Quantity </th>
                        <th>Price </th>
                        <th width="100">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="">
                        @if (count($products) > 0)
                        @foreach ($products as $key => $index)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $index->name ?? '' }}</td>
                                <td>{{ $index->quantity ?? ''}}</td>
                                <td>{{ $index->price ?? ''}}</td>
                                <td>
                                <center>
                                   <a href="{{ route('products.edit',[$index->id ,'subdomain' => Auth::user()->role]) }}"><button class="btn btn-primary btn-xs" title="Ubah"><i class="fas fa-pencil-alt"></i></button></a>
                                    {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $index->id,'subdomain' => Auth::user()->role],'style'=>'display:inline']) }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-xs" id="delete" onclick="return confirm('Are you sure to delete data of {{$index->name}} ?')"><i class="fa fa-trash"></i></button>
                                    {{ Form::close() }}
                                </center>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No data found!</td>
                        </tr>
                    @endif
                </tbody>
                </table>
            </div>
        </div>

@endsection
