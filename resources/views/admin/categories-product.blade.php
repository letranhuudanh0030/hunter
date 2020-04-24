@extends('layouts.master')

@section('content')
@include('admin.components.head-action')
@include('admin.components.modal-product-category')
<table class="table table-bordered table-hover">
    <thead class="table-info">
        <tr class="text-center">
            <th scope="col">#</th>
            <th>
                <label class="container-checkbox">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </th>
            <th scope="col">Tên</th>
            <th scope="col">Loại Trang</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Hiển thị</th>
            <th scope="col">Nối bật</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
            <th scope="row">1</th>
            <td>
                <label class="container-checkbox">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </td>
            <td class="text-left"><span class="title">Mark</span></td>
            <td><span class="page-type">Otto</span></td>
            <td><img src="" alt="hinhanh.jpg"></td>
            <td><i class="fas fa-check fa-lg text-success"></i></td>
            <td><i class="fas fa-times fa-lg text-danger"></i></td>
            <td>
                <a href="" title="Chỉnh sửa"><i class="fas fa-edit fa-lg text-primary"></i></a>
                <a href="" title="Xóa"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
            </td>
        </tr>
    </tbody>
</table>
@endsection