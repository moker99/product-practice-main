@extends('Layout.message')
@section('main')
    <div id="main-all">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-bigcar swiper-img1">
                        <span class="swiper-bigcar-top">Opening Sale Discount 50%</span>
                        <h2>SuperMarket For
                            <br>
                            Fresh Grocery
                        </h2>
                        <p>Introduced a new model for online grocery shopping
                            and convenient home delivery.</p>
                        <div class="swiper-bigcar-btn">
                            <a href="#">
                                <span>Shop Now</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-bigcar swiper-img2">
                        <span class="swiper-bigcar-top">Free Shipping - orders over $100</span>
                        <h2>Free Shipping on
                            <br>
                            orders over
                        </h2>
                        <p>Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
                        </p>
                        <div class="swiper-bigcar-btn">
                            <a href="#">
                                <span>Shop Now</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <h2>Featured Categories</h2>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-1.jpg" alt="">
                        <span>Atta, Rice & Dal</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-2.jpg" alt="">
                        <span>Baby Care</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-3.jpg" alt="">
                        <span>Bakery & Biscuits</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-4.jpg" alt="">
                        <span>Chicken, Meat & Fish</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-5.jpg" alt="">
                        <span>Cleaning Essentials</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-6.jpg" alt="">
                        <span>Dairy, Bread & Eggs</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-7.jpg" alt="">
                        <span>Instant Food</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-8.jpg" alt="">
                        <span>Pet Care</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-9.jpg" alt="">
                        <span>Snack & Munchies</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="./img/category-tea-10.jpg" alt="">
                        <span>Tea, Coffee & Drinks</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-all">
                <div class="swiper-button-prev2"></div>
                <div class="swiper-button-next2"></div>
            </div>
        </div>
        <div class="main-buckle">
            <div class="buckle-car buckle-img1">
                <h2>Fruits & Vegetables</h2>
                <p>Get Upto 30% Off</p>
                <div class="btn-shoop">
                    <a href="#">
                        Shop Now
                    </a>
                </div>
            </div>
            <div class="buckle-car buckle-img2">
                <h2>Freshly Baked Buns</h2>
                <p>Get Upto 25% Off</p>
                <div class="btn-shoop">
                    <a href="#">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
        <h2 class="Popular">Popular Products</h2>
        <div class="all-card">
            @foreach ($products ?? [] as $product)
                @dump($product)

                <div class="all-card1">
                    <div class="all-card-img">
                        <div class="all-img-1">
                            <img src="{{ asset($product->img_path) }}" alt="">
                        </div>
                        <div class="all-card-icon">
                            <i class="fa-thin fa-eye"></i>
                            <i class="fa-thin fa-heart"></i>
                            <i class="fa-thin fa-arrow-up-arrow-down fa-rotate-90"></i>
                        </div>
                    </div>
                    <span>{{ $product->name }}</span>
                    <div class="all-card-haver">
                        <a href="#">{{ $product->desc }}</a>
                    </div>
                    <div class="card-evaluates d-flex">
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star-sharp-half" style="color: #FFC107;"></i>
                        <i class="fa-light fa-star-sharp-half fa-flip-horizontal" style="color: #FFC107;"></i>
                        4.5
                    </div>
                    <div class="btn-all-card">
                        <span>{{ $product->price }}</span>
                        <div class="btn-add">
                            <a href="#">
                                <span>+ Add</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Daily Best Sells</h2>
        <div class="main-Best">
            <div class="Best-card1">
                <h3>100% Organic Coffee Beans.</h3>
                <p>Get the best deal before close.</p>
                <div class="btn-Best-card1">
                    <a href="#">
                        <span>Shop Now</span>
                        <i class="fa-thin fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="Best-card2">
                <div class="Best-img">
                    <div class="Best-img-1">
                        <img src="./img/product-img-11.jpg" alt="">
                    </div>
                    <div class="Best-card2-icon">
                        <div>
                            <i class="fa-thin fa-eye"></i>
                            <i class="fa-thin fa-heart"></i>
                            <i class="fa-thin fa-arrow-up-arrow-down fa-rotate-90"></i>
                        </div>
                    </div>
                </div>
                <span>Tea, Coffee & Drinks</span>
                <div class="Best-haver">
                    <a href="#">Roast Ground Coffee</a>
                </div>
                <div class="evaluates">
                    <span>$13<del>$18</del></span>
                    <div>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        4.5
                    </div>
                </div>
                <div class="btn-Best-card2">
                    <a href="#">
                        <span> + Add to cart</span>
                    </a>
                </div>
                <div class="Best-card2-end">
                    <div class="Best-Days">
                        <span class="days0"></span>
                        <span>Days</span>
                    </div>
                    <div class="Best-Days">
                        <span class="hours0"></span>
                        <span>Hours</span>
                    </div>
                    <div class="Best-Days">
                        <span class="minutes0"></span>
                        <span>Mins</span>
                    </div>
                    <div class="Best-Days">
                        <span class="sec0"></span>
                        <span>Sec</span>
                    </div>
                </div>
            </div>
            <div class="Best-card2">
                <div class="Best-img">
                    <div class="Best-img-1">
                        <img src="./img/product-img-12.jpg" alt="">
                    </div>
                    <div class="Best-card2-icon">
                        <i class="fa-thin fa-eye"></i>
                        <i class="fa-thin fa-heart"></i>
                        <i class="fa-thin fa-arrow-up-arrow-down fa-rotate-90"></i>
                    </div>
                </div>
                <span>Fruits & Vegetables</span>
                <div class="Best-haver">
                    <a href="#">Crushed Tomatoes</a>
                </div>
                <div class="evaluates">
                    <span>$13<del>$18</del></span>
                    <div>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        4.5
                    </div>
                </div>
                <div class="btn-Best-card2">
                    <a href="#">
                        <span> + Add to cart</span>
                    </a>
                </div>
                <div class="Best-card2-end">
                    <div class="Best-Days">
                        <span class="days1"></span>
                        <span>Days</span>
                    </div>
                    <div class="Best-Days">
                        <span class="hours1"></span>
                        <span>Hours</span>
                    </div>
                    <div class="Best-Days">
                        <span class="minutes1"></span>
                        <span>Mins</span>
                    </div>
                    <div class="Best-Days">
                        <span class="sec1"></span>
                        <span>Sec</span>
                    </div>
                </div>
            </div>
            <div class="Best-card2">
                <div class="Best-img">
                    <div class="Best-img-1">
                        <img src="./img/product-img-13.jpg" alt="">
                    </div>
                    <div class="Best-card2-icon">
                        <i class="fa-thin fa-eye"></i>
                        <i class="fa-thin fa-heart"></i>
                        <i class="fa-thin fa-arrow-up-arrow-down fa-rotate-90"></i>
                    </div>
                </div>
                <span>Fruits & Vegetables</span>
                <div class="Best-haver">
                    <a href="#">Golden Pineapple</a>
                </div>
                <div class="evaluates">
                    <span>$13<del>$18</del></span>

                    <div>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        <i class="fa-solid fa-star" style="color: #FFC107;"></i>
                        4.5
                    </div>
                </div>
                <div class="btn-Best-card2">
                    <a href="#">
                        <span> + Add to cart</span>
                    </a>
                </div>
                <div class="Best-card2-end">
                    <div class="Best-Days">
                        <span class="days2"></span>
                        <span>Days</span>
                    </div>
                    <div class="Best-Days">
                        <span class="hours2"></span>
                        <span>Hours</span>
                    </div>
                    <div class="Best-Days">
                        <span class="minutes2"></span>
                        <span>Mins</span>
                    </div>
                    <div class="Best-Days">
                        <span class="sec2"></span>
                        <span>Sec</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-text">
            <div class="text-card">
                <img src="./img/clock.svg" alt="">
                <h3>10 minute grocery now</h3>
                <span>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near
                    you.</span>
            </div>
            <div class="text-card">
                <img src="./img/gift.svg" alt="">
                <h3>Best Prices & Offers</h3>
                <span>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best
                    pricess & offers.</span>
            </div>
            <div class="text-card">
                <img src="./img/package.svg" alt="">
                <h3>Wide Assortment</h3>
                <span>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg &
                    other categories.</span>
            </div>
            <div class="text-card">
                <img src="./img/refresh-cw.svg" alt="">
                <h3>Easy Returns</h3>
                <span>
                    Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                    questions asked
                    <a href="#">policy.</a>
                </span>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        // Swiper 1
        var swiper2 = new Swiper(".mySwiper", {
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        // Swiper 2
        var swiper = new Swiper(".mySwiper2", {
            // loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next2',
                prevEl: '.swiper-button-prev2',
            },


            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
                1400: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                },
            },
        });

        // +-按鈕
        let btnAdd = document.querySelectorAll('.btn-add');
        let btnSubtract = document.querySelectorAll('.btn-subtract');
        let offcanvas_input = document.querySelectorAll('.offcanvas-input');

        btnAdd.forEach(function(button, index) {
            button.addEventListener('click', function() {
                let currentValue = parseInt(offcanvas_input[index].value);
                currentValue += 1;
                offcanvas_input[index].value = currentValue;
            });
        });

        btnSubtract.forEach(function(button, index) {
            button.addEventListener('click', function() {
                let currentValue = parseInt(offcanvas_input[index].value);
                currentValue -= 1;
                if (currentValue < 0) {
                    currentValue = 0;
                }
                offcanvas_input[index].value = currentValue;
            });
        });

        // 設定目標日期時間
        const targetDates = [
            new Date("2025-12-31T23:59:59").getTime(),
            new Date("2024-06-30T12:00:00").getTime(),
            new Date("2028-01-16T23:15:00").getTime()
        ];

        function updateCountdown() {
            for (let i = 0; i < targetDates.length; i++) {
                const currentDate = new Date().getTime();
                console.log(currentDate);
                const timeRemaining = targetDates[i] - currentDate;

                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.querySelector(`.days${i}`).innerHTML = days;
                document.querySelector(`.hours${i}`).innerHTML = hours;
                document.querySelector(`.minutes${i}`).innerHTML = minutes;
                document.querySelector(`.sec${i}`).innerHTML = seconds;
            }
        }

        // Initialize and update timers every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
@endsection
