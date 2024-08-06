@extends('client.layouts.view')

@push('styles')
@endpush

@section('content')
    <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Nhập thông tin đăng ký</h5>
            @if (session('message'))
                <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
            @endif
            <form action="{{ route('client.postRegisterUsers') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" id="name" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" />
                </div>
                <div class="mb-3">
                    <span>Đã có tài khoản? </span>
                    <a href="{{ route('client.loginUsers') }}">Đăng nhập!</a>
                </div>
                <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
            </form>
        </div>
    </div>
@endsection

@push('scrips')
@endpush
