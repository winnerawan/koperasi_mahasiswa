@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Kategori</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Kategori</h4>
                        </div>
                        <div class="panel-body">
                            {!! Form::model($category, ['route' => ['admin.category.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Nama Kategori</label>
                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            {!! Form::close() !!}
                            <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 10px;">Cancel</a>
                            {!! Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'DELETE']) !!}
                            <button type="submit" style="margin-top: 10px;" class="btn btn-danger"> <i class="fa fa-times"></i> Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
