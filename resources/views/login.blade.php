@extends('client.layouts.view')

@push('styles')
@endpush

@section('content')
    <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Nhập thông tin đăng nhập</h5>
            @if (session('message'))
                <div class="alert alert-primary" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <form action="{{ route('client.postLoginUsers') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" />
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class=" mb-3">
                    <span>Chưa có tài khoản? </span>
                    <a href="{{ route('client.registerUsers') }}">Đăng ký!</a>
                </div>
                <div class="mb-3">
                    <a href="{{ route('client.resetpasswordUsers') }}" class="forgot-btn">Quên mật khẩu?</a>
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection

@push('scrips')
@endpush
