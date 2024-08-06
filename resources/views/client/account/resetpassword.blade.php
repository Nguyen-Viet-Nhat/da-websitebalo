@extends('client.layouts.view')

@push('styles')
@endpush

@section('content')
    <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Nhập thông tin để thay đổi mật khẩu</h5>
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
                <div class=" mb-3">
                    <span>Chưa có tài khoản? </span>
                    <a href="{{ route('client.loginUsers') }}">Đăng nhập!</a>
                </div>

                <button class="btn btn-primary">Reset password</button>
            </form>
        </div>
    </div>
@endsection

@push('scrips')
@endpush
