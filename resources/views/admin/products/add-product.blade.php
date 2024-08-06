@extends('admin.layouts.view')

@push('stl')
@endpush

@section('main')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">Thêm sản phẩm</h4>
        <a href="{{ route('admin.products.listProducts') }}" class="btn btn-info mb-3">Quay lại</a>
        <form action="{{ route('admin.products.addPostProducts') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nameProduct">Tên sản phẩm</label>
                <input type="text" name="nameProduct" id="nameProduct" class="form-control">
            </div>
            <div class="mb-3">
                <label for="priceProduct">Giá sản phẩm</label>
                <input type="text" name="priceProduct" id="priceProduct" class="form-control">
            </div>
            <div class="mb-3">
                <label for="categoryProduct">Danh mục</label>
                <select name="categoryProduct" name="categoryProduct" id="categoryProduct" class="form-control">
                    <option value=""></option>
                    <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Balo du lịch</option>
                    <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Balo học sinh</option>
                    <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>Balo xách</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descriptionProduct">Mô tả</label>
                <textarea id="descriptionProduct" name="descriptionProduct" rows="4" class="form-control" cols="50"
                    placeholder="Enter your description here..."></textarea>
            </div>
            <div class="mb-3">
                <label for="imgProduct">Ảnh</label>
                <input type="file" name="imgProduct" id="imgProduct" class="form-control" accept="/image">
            </div>
            <button class="btn btn-success" type="submit">Thêm mới</button>
        </form>
    </div>
@endsection

@push('scp')
@endpush
