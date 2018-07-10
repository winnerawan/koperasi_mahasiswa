@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Penjual</h3>
        </div>


        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Informasi Promo</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($promo, ['route' => ['admin.promo.update', $promo->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Judul Promo</label>
                    <div class="col-sm-10">
                        {{ Form::text('promo', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Produk</label>
                    <div class="col-sm-10">
                        <select style="margin-bottom:5px;" class="form-control" name="category_id">
                            @foreach($products as $product)
                                <option value='{{ $product->id }}'>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                {!! Form::close() !!}
                <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 10px;">Cancel</a>
                {!! Form::open(['route' => ['admin.promo.destroy', $promo->id], 'method' => 'DELETE']) !!}
                <button type="submit" style="margin-top: 10px;" class="btn btn-danger"> <i class="fa fa-times"></i> Delete</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
