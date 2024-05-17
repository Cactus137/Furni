@extends('layouts.user')
@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container-xxl">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 p-0 ">
                    <div class="mb-5">
                        <a href="#" class="text-decoration-none">
                            <i class="fa-solid fa-arrow-left-long "></i>
                            <span class="ps-1">Accessories</span>
                        </a>
                    </div>
                    <h1 class="m-0">Small furniture</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl border-bottom"></div>
    <!-- End Hero Section -->
    <div class="container-xxl mt-5">
        <div class="row justify-content-between">
            <div class="col col-md-2 p-0">
                <div class="row categories mb-3 ms-2">
                    <h2 class="p-0 text-dark">Categories</h2>
                    <span class="border mb-4 border-dark" style="width: 90px"></span>
                    <ul class="p-0">
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                        <li class="cat-list pb-1">
                            <a href="#" class="text-decoration-none cat-link">Decoration</a>
                            <span>(18)</span>
                        </li>
                    </ul>
                </div>
                <div class="row categories mb-3 ms-2">
                    <h2 class="p-0 text-dark">Prices</h2>
                    <span class="border mb-4 border-dark" style="width: 90px"></span>
                    <form action="#" class="p-0 ">
                        <div class="form-price">
                            <div class="d-flex me-5">
                                <input type="text" name="" placeholder="$ Min" class="w-50 ps-2" style="">
                                <span class="px-3"> - </span>
                                <input type="text" name="" placeholder="$ Max" class="w-50 ps-2" style="">
                            </div>
                            <div class="d-flex me-5">
                                <button class="btn btn-brand w-100 mt-3 py-1">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col col-md-10 mb-5">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="col card-pro">
                            <div class="bg-light">
                                <a href="{{ route('product-details') }}" class="text-decoration-none">
                                    <img src="{{ asset('assets/images/user/product-3.png') }}" class="card-img-top">
                                </a>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('product-details') }}"
                                    class="text-decoration-none d-flex justify-content-between">
                                    <p class="fw-bold m-0 fs-6">Green Plates</p>
                                    <p class="fw-bold m-0 fs-6">$60.00</p>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="text-decoration-none">
                                    <p>Dinnerware</p>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollImages = document.querySelector(".scroll-images");
        const scrollLength = scrollImages.scrollWidth - scrollImages.clientWidth;
        const leftButton = document.querySelector(".left");
        const rightButton = document.querySelector(".right");

        function checkScroll() {
            const currentScroll = scrollImages.scrollLeft;
            if (currentScroll === 0) {
                leftButton.setAttribute("disabled", "true");
                rightButton.removeAttribute("disabled");
            } else if (currentScroll === scrollLength) {
                rightButton.setAttribute("disabled", "true");
                leftButton.removeAttribute("disabled");
            } else {
                leftButton.removeAttribute("disabled");
                rightButton.removeAttribute("disabled");
            }
        }

        scrollImages.addEventListener("scroll", checkScroll);
        window.addEventListener("resize", checkScroll);
        checkScroll();

        window.leftScroll = function() {
            scrollImages.scrollBy({
                left: -253,
                behavior: "smooth"
            });
        }

        window.rightScroll = function() {
            scrollImages.scrollBy({
                left: 253,
                behavior: "smooth"
            });
        }

        leftButton.addEventListener("click", leftScroll);
        rightButton.addEventListener("click", rightScroll);
    });
</script>
