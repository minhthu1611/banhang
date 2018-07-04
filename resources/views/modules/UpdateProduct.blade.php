@extends('welcome')

@section('content1')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Cập nhật thông tin sản phẩm</h4>
                        </div>
                        <div class="card-body ">
                            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal" data-dpmaxz-eid="3">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tên hàng:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tenhang" class="form-control" placeholder="Tên hàng . . ." value="{{ $info->tenhang }}" data-dpmaxz-eid="4">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Loại hàng:</label>
                                            <div class="col-sm-10">
                                                <select class='form-control' name="loaihang_id" id="">
                                                    <option value="">--Loại hàng--</option>
                                                    @foreach($data as $val)
                                                        <option value="{{ $val->id }}">{{ $val->tenloai }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Đơn vị tính:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="donvitinh" class="form-control" placeholder="Đơn vị tính . . ." value="{{ $info->donvitinh }}" data-dpmaxz-eid="4">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Đơn giá:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="dongia" class="form-control" placeholder="Đơn giá . . ." value="{{ $info->dongia }}" data-dpmaxz-eid="4">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Số lượng</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng . . ." value="{{ $info->soluong }}">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Hình ảnh:</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" value="{{ $info->hinhanh }}" name="img" data-dpmaxz-eid="4" id="imgInp">
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div style="text-align:right;">
                                        <button class="btn btn-success" type="submit" data-dpmaxz-eid="7">Thêm</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection