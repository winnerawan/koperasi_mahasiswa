@extends('admin.template')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Produk</h3>
        </div>


        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Informasi Produk</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($product, ['route' => ['admin.product.update', $product->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Nama Produk</label>
                    <div class="col-sm-10">
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori Produk</label>
                    <div class="col-sm-10">
                        <select style="margin-bottom:5px;" class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Penjual Produk</label>
                    <div class="col-sm-10">
                        <select style="margin-bottom:5px;" class="form-control" name="merchant_id">
                            @foreach($merchants as $merchant )
                               <option value='{{ $merchant->id }}'>{{ $merchant->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-rounded" class="col-sm-2 control-label">Deskripsi Produk</label>
                    <div class="col-sm-10">
                        {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-rounded" class="col-sm-2 control-label">Harga Produk</label>
                    <div col-sm-10style="margin-left: 20px;" class="input-group col-sm-10">
                        <span class="input-group-addon">Rp.</span>
                        {{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-rounded" class="col-sm-2 control-label">Stok Produk</label>
                    <div col-sm-10style="margin-left: 20px;" class="input-group col-sm-10">
                        {{ Form::text('quantity', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-rounded" class="col-sm-2 control-label">Foto Produk</label>
                    <div col-sm-10style="margin-left: 20px;" class="input-group col-sm-10">
                        {{ Form::file('image') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-rounded" class="col-sm-2 control-label">Status Produk</label>
                    <div col-sm-10style="margin-left: 20px;" class="input-group col-sm-10">
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'Non Aktif'], null, ['placeholder' => 'Status Produk?']) }}                     </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                {!! Form::close() !!}
                <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 10px;">Cancel</a>
                {!! Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'DELETE']) !!}
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
