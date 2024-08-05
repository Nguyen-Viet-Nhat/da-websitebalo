@extends('admin.layouts.view')

@push('stl')
@endpush

@section('main')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">Xem chi tiết danh mục</h4>
        <a href="{{ route('admin.category.listCategory') }}" class="btn btn-info mb-3">Quay lại</a>
        <form action="{{ route('admin.category.addPostCategory') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nameCategory">Tên danh mục</label>
                <input class="form-control" value="{{ $category->name }}" disabled>
            </div>
        </form>
    </div>
@endsection

@push('scp')
@endpush
