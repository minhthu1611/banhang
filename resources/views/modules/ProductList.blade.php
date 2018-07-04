@extends('welcome')
@section('content1')
{{-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            @foreach($data as $key=>$val)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="img">
                                <img width="100%" src="{{ asset('hinhanh/'.$val->hinhanh.'') }}" alt="">
                            </div>
                            <div class="cc">
                                <h4>
                                    <a href="" class="name">{{ $val->tenhang }}</a>
                                </h4>
                                <span class="price">{{ $val->dongia }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <form action="{{ route('pro-list') }}" class="qq" method="submit">
                        <select class='form-control' name="loaihang_id" id="loaihang_id">
                            <option value="">--Loại hàng--</option>
                            @foreach($type as $val)
                                <option value="{{ $val->id }}">{{ $val->tenloai }}</option>
                            @endforeach
                        </select>
                        {{-- <button type="submit" class="btn btn-link btn-warning"><i class="fa fa-search"></i></button> --}}
                    </form>
                </div>
            </div>
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
                                                        <th>Tên hàng</th>
                                                        <th>Loại hàng</th>
                                                        <th>Đơn vị tính</th>
                                                        <th>Đơn giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Hình ảnh</th>
                                                        <th>Ngày nhập hàng</th>
                                                        <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $temp=0?>
                                                @foreach($data as $key=>$val)
                                                    <tr class="pro">
                                                        <?php $temp=1 ?>
                                                        <td>{{ $key+1 }}</td>
                                                        <td hidden class='id'>{{ $val->id }}</td>
                                                        <td>{{ $val->tenhang }}</td>
                                                        <td>{{ $val->loaihang }}</td>
                                                        <td>{{ $val->donvitinh }}</td>
                                                        <td>{{ $val->dongia }}</td>
                                                        <td>{{ $val->soluong }}</td>
                                                        <td><img src="{{ asset('hinhanh/'.$val->hinhanh.'') }}" width="50px" alt=""></td>
                                                        <td>{{ $val->created_at }}</td>
                                                        <td class="text-right">                                                    
                                                            <a href="{{ route('g-update',$val->id) }}" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                            <button  class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></button>
                                                            {{-- <button  class="btn btn-link btn-danger hidden"><i class="fa fa-book"></i></button> --}}
                                                        </td>
                                                    </tr>  
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="paginate d-flex d-lg-block justify-content-center">
                                            @if($temp==0)
                                                <h2>Không có sản phẩm phù hợp</h2>
                                            @endif
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
    $('.remove').click(function () { 
        var t=$(this).closest('tr').find('.id').text()
        if(confirm("Bạn có chắc xóa!"))
        {
            $.ajax({
                type: "post",
                url: "{{route('remove-pro')}}",
                data: {
                    "_token":"{{csrf_token()}}",
                    "id":t
                },
                success: function (response) {
                    if(response=='ok')
                        location.reload()
                }
            })
        }
    });
    $('#loaihang_id').change(function () { 
        var type= document.getElementById('loaihang_id').value
        $(".qq").submit()
    });
    </script>
@endsection