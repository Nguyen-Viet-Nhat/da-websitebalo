<header>
    <div class="container py-2">
        <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

            <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <a href="{{ route('client.viewProducts') }}">
                        <img src="{{ asset('images/logo-balo.png') }}" alt="logo" class="img-fluid">
                    </a>
                </div>
            </div>

            {{-- @if (session('message'))
                <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
            @endif --}}

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                    <form id="search-form" class="text-center d-flex align-items-center"
                        action="{{ route('client.searchProducts') }}" method="GET">
                        <input type="text" name="query" class="form-control border-0 bg-transparent"
                            placeholder="Search for more than 10,000 products" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </form>
                </div>
            </div>

            <div
                class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">

                <div class="support-box text-end d-none d-xl-block">
                    {{-- <span class="fs-6 secondary-font text-muted">Name</span> --}}
                    {{-- <h5 class="mb-0"></h5> --}}
                    @if (session('message'))
                        <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
