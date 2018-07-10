@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Tambah Kategori</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Kategori</h4>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'admin.category.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Nama Kategori</label>
                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
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
