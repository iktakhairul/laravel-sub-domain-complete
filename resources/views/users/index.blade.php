@extends('layouts.admin')

@section('title', "Users" )

@section('content')

    <section class="content-header">
        <h1 class="breadcrumb ml-5 mt-4">
            <i class="fa fa-user"></i>. Users
        </h1>
        <div class="form-group col-md-12">
            <div class="pull-right">
                <a href="{{ route('users.create', ['subdomain' => Auth::user()->role]) }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create User</a>
            </div>
        </div>
    </section>
    <br>
        <section class="content container-fluid">
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
                        <th>Domains </th>
                        <th width="100">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="">
                        @if (count($users) > 0)
                        @foreach ($users as $key => $index)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $index->name }}</td>
                                <td>{{ $index->role }}</td>
                                <td>
                                <center>
                                   <a href="{{ route('users.edit',$index->id) }}"><button class="btn btn-primary btn-xs" title="Ubah"><i class="fas fa-pencil-alt"></i></button></a>
                                    {{ Form::open(['method' => 'DELETE','route' => ['users.destroy', $index->id],'style'=>'display:inline']) }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-xs" id="delete" onclick="return confirm('Are You sure to delete data of {{$index->name}} ?')"><i class="fa fa-trash"></i></button>
                                    {{ Form::close() }}
                                </center>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No Data Found!</td>
                        </tr>
                    @endif
                </tbody>
                </table>
            </div>
        </div>

        </section>

    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->
@endsection
