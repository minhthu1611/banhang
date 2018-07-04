@extends('welcome')

@section('content1')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Thêm Loại Sản Phẩm</h4>
                        </div>
                        <div class="card-body ">
                            <form method="post" action="" class="form-horizontal" data-dpmaxz-eid="3">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="text-success">Tên loại:</label>
                                        <input type="text" name="tenloai" class="form-control" placeholder="Tên loại . . ." value="" data-dpmaxz-eid="4">
                                        <p class="text-danger"></p>   
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
    <div>
            <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="card data-tables">
                                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                        <div class="toolbar">
                                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        </div>
                                        <div class="fresh-datatables">
                                            <div class="table-responsive">
                                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                                <th>STT</th>
                                                                <th>Tên loại</th>
                                                                <th>Ngày cập nhật</th>
                                                                <th class="text-right">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $key=>$val)
                                                            <tr>
                                                                <td>{{ $key+1 }}</td>
                                                                <td>{{ $val->tenloai }}</td>
                                                                <td>{{ $val->created_at }}</td>
                                                                <td class="text-right">                                                    
                                                                    <button  class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="paginate d-flex d-lg-block justify-content-center">
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    </div>
</div>
@endsection