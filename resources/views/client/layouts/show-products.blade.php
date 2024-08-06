@extends('client.layouts.view')

@push('styles')
@endpush

@section('content')
    <section id="clothing" class="my-5 overflow-hidden">
        <div class="container pb-5">
            <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                @if (isset($selectedCategory))
                    <h2 class="display-3 fw-normal">{{ $selectedCategory->name }}</h2>
                @else
                    <h2 class="display-3 fw-normal">Danh sách sản phẩm</h2>
                @endif
                <div>
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                        shop now
                        <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                            <use xlink:href="#arrow-right"></use>
                        </svg></a>
                </div>
            </div>

            <div class="products-carousel swiper">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="card position-relative">
                                <a href="single-product.html"><img src="{{ asset($product->img) }}"
                                        class="img-fluid rounded-4" alt="image"></a>
                                <div class="card-body p-0">
                                    <a href="single-product.html">
                                        <h3 class="card-title pt-4 m-0">{{ $product->name }}<h3>
                                    </a>

                                    <div class="card-text">
                                        <span class="rating secondary-font">
                                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                            <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                            5.0</span>

                                        <h3 class="secondary-font text-primary">${{ $product->price }}</h3>

                                        <div class="d-flex flex-wrap mt-3">
                                            <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                                <h5 class="text-uppercase m-0">Add to Cart</h5>
                                            </a>
                                            <a href="#" class="btn-wishlist px-4 pt-3 ">
                                                <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </div>
    </section>
@endsection
