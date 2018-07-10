@extends('merchant.template')


@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Form Produk</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Form</a></li>
                                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                                <li class="breadcrumb-item active">Informasi Produk</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            {{--<h4 class="m-t-0 header-title">Input Types</h4>--}}
                            {{--<p class="text-muted m-b-30 font-14">--}}
                                {{--Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.--}}
                            {{--</p>--}}

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">

                                        <div class="panel-body">
                                            {!! Form::model($product, ['route' => ['merchant.product.update', $product->id], 'class' => 'form-horizontal', 'method' => 'PUT', 'files' => true]) !!}
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
                                                <label for="input-rounded" class="col-sm-2 control-label">Deskripsi Produk</label>
                                                <div class="col-sm-10">
                                                    {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                           <!--  <div class="form-group">
                                                <label for="input-rounded" class="col-sm-2 control-label">Harga Produk</label>
                                                <div col-sm-10style="margin-left: 20px;" class="input-group col-sm-10">
                                                    <span class="input-group-addon">Rp.</span>
                                                    {{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div> -->
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
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                                            {!! Form::close() !!}
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->


@endsection()
