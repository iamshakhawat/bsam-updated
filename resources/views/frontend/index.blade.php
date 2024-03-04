@extends('frontend.layout.master')
@section('content')
<main class="main overflow-hidden">

    <!--------- Cat area start --------->
    <section class="cat__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cat__main__slider owl-carousel">
                        @php
                            $cats = DB::table('categories')->where('status','active')->get();
                        @endphp
                        @foreach ($cats as $cat)
                            <div class="cat__single__slide">
                                <div class="cat__img__blk">
                                    <img src="{{ $cat->photo }}" alt="{{ $cat->title }}">
                                </div>
                                <div class="cat__info">
                                    <a href="{{ route('product-cat',$cat->slug) }}" class="stretched-link">{{ $cat->title }}</a>
                                    <p>{{ \App\Models\Product::where('cat_id',$cat->id)->where('status','active')->count() }} Items</p>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Cat area start --------->

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__main__blk">
                        <div class="hero__content">
                            <h1>Order groceries for delivery or pickup today</h1>
                            <p>Whatever you want from local stores, brought right to your door.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

    <!--------- Product area start --------->
    <section class="product__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__topbar">
                        <h2>Fresh Fruit</h2>
                        <a href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__main__slider owl-carousel">

                        @php
                            $products = DB::table('products')->where('status','active')->where('condition','default')->limit(15)->get();
                        @endphp

                    @foreach ($products as $product)
                        <div class="product__single__slide">
                            <div class="product__add__cart">
                                <a href="{{ route('add-to-cart',$product->slug) }}"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                        cart</span></a>
                            </div>
                            <div class="product__img__blk">
                                <img src="{{ $product->photo }}" alt="{{ $product->slug }}">
                            </div>
                            <div class="product__info">
                                <div class="product__label">
                                    <span>Organic</span>
                                </div>
                                <div class="product__price">
                                    <span>$ {{ $product->price }}</span>
                                    <span>each(est.)</span>
                                </div>
                                <div class="product__title">
                                    <a href="{{ route('product-detail',$product->slug) }}" class="stretched-link">{{ $product->title }}</a>
                                </div>
                                <div class="product__qty">
                                    <span>{{ $product->stock }} Available</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--------- Product area end --------->

    <!--------- Product area start --------->
    <section class="product__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__topbar">
                        <h2>Fresh Vegetables</h2>
                        <a href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__main__slider owl-carousel">
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f2.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f3.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f4.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f5.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f6.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f7.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f8.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f9.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f10.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f11.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f12.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Product area end --------->

    <!--------- Product area start --------->
    <section class="product__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__topbar">
                        <h2>Frozen Snacks</h2>
                        <a href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__main__slider owl-carousel">
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f2.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f3.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f4.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f5.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f6.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f7.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f8.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f9.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f10.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f11.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                    <div class="product__single__slide">
                        <div class="product__add__cart">
                            <a href="#"><span><i class="far fa-plus"></i></span><span>Add</span><span>to
                                    cart</span></a>
                        </div>
                        <div class="product__img__blk">
                            <img src="assets/img/products/f12.jpg" alt="">
                        </div>
                        <div class="product__info">
                            <div class="product__label">
                                <span>Organic</span>
                            </div>
                            <div class="product__price">
                                <span>$ 0.36</span>
                                <span>each(est.)</span>
                            </div>
                            <div class="product__title">
                                <a href="#" class="stretched-link">Organic Banana</a>
                            </div>
                            <div class="product__qty">
                                <span>$0.89/lb</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Product area end --------->

    <!--------- Work area start --------->
    <section class="work__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work__title">
                        <h2>Grocery delivery you can count on</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="work__single__blk">
                        <div class="work__img__blk">
                            <img src="assets/img/basic/w1.jpg" alt="">
                        </div>
                        <div class="work__info">
                            <h4>Choose what you want</h4>
                            <p>Select items from your favorite grocery stores at Instacart.com or in the app.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="work__single__blk">
                        <div class="work__img__blk">
                            <img src="assets/img/basic/w2.jpg" alt="">
                        </div>
                        <div class="work__info">
                            <h4>See real-time updates</h4>
                            <p>Personal shoppers pick items with care. Chat as they shop and manage your order.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="work__single__blk">
                        <div class="work__img__blk">
                            <img src="assets/img/basic/w3.jpg" alt="">
                        </div>
                        <div class="work__info">
                            <h4>Get your items same-day</h4>
                            <p>Pick a convenient time for you. Enjoy Instacart’s 100% quality guarantee on every
                                order.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Work area end --------->

    <!--------- About area start --------->
    <section class="about__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__title">
                        <h2>The largest online grocery marketplace in North America</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__img__blk">
                        <img src="assets/img/basic/about_bg.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__single__blk">
                        <h4>1 billion <br>products</h4>
                        <p>available to shop across the catalog</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__single__blk">
                        <h4>80,000 <br>stores</h4>
                        <p>from local grocers to chain stores</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__single__blk">
                        <h4>14,000 <br>cities</h4>
                        <p>served across the U.S. & Canada</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__single__blk">
                        <h4>Millions of <br>orders</h4>
                        <p>delivered or picked up yearly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- About area end --------->

    <!--------- FAQ area start --------->
    <section class="faq__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq__title">
                        <h2>Common questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq__main__blk">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How does Instacart delivery and curbside pickup work?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Instacart makes it easy to order from your favorite stores. Shop for
                                            items from stores near you, with a selection of more than 500 retailers
                                            and trusted local grocers across North America. Then, Instacart will
                                            connect you with a personal shopper in your area to shop and deliver
                                            your order. Contactless delivery is available with our “Leave at my
                                            door” option.</p>
                                        <p>You can track your order’s progress and communicate with your shopper
                                            every step of the way using the Instacart app or website.</p>
                                        <p>Instacart also offers curbside pickup at select retail locations. Simply
                                            place your order and choose a pickup time, and a shopper will prepare
                                            your order at the store.</p>
                                        <p>When you get to the store, use the Instacart app to notify us. Depending
                                            on the store, a shopper or store employee will bring the groceries to
                                            your car, or you can pick them up at the designated area.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        How much does Instacart cost?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>You don’t need a membership to order with Instacart. In fact, you can
                                            even order from warehouse clubs, like Costco, Sam’s Club, and BJ’s
                                            Wholesale Club, without a retailer club membership.</p>
                                        <p>To get started, create an account, select the store you want to shop, and
                                            place your order. New customers may be eligible for free delivery
                                            promotions.</p>
                                        <p>Delivery: Fees start at $3.99 for same-day orders over $35. Fees vary for
                                            one-hour deliveries, club store deliveries, and deliveries under $35.
                                        </p>
                                        <p>Pickup: There may be a “pickup fee” (equivalent to a delivery fee for
                                            pickup orders) on your pick up order.</p>
                                        <p>Service fees: Service fees vary and are subject to change based on
                                            factors like location and the number and types of items in your cart.
                                            Orders containing alcohol have a separate service fee.</p>
                                        <p>With an optional Instacart+ membership, you can get $0 delivery fee on
                                            every order over $35 and lower service fees too.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Will I pay the same price on Instacart as I would in store?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Retail partners set the prices of items on the Instacart marketplace.
                                            While many retailers offer everyday store prices on Instacart, some
                                            retailers may set prices on the Instacart platform that are different
                                            from in-store prices.</p>
                                        <p>You can view pricing policies for each retailer on the Instacart app and
                                            website.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        What happens if something is out of stock and I need to give specific
                                        instructions?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Instacart makes it easy to communicate with your shopper. When an item
                                            you want is out-of-stock at the store, your shopper will follow your
                                            replacement preferences.</p>
                                        <p>You can set item and delivery instructions in advance, as well as chat
                                            directly with your shopper while they shop and deliver your items. You
                                            can tell the shopper to:</p>
                                        <ul>
                                            <li>Find Best Match: By default, your shopper will use their best
                                                judgement to pick a replacement for your item.</li>
                                            <li>Pick Specific Replacement: You can pick a specific alternative for
                                                the shopper to purchase if your first choice is out-of-stock.</li>
                                            <li>Don’t Replace: For items you’d rather not replace, choose “Don’t
                                                replace” to get a refund if the item is out of stock.</li>
                                        </ul>
                                        <p>You can update or cancel your order as long as your shopper hasn’t
                                            started shopping. If you need to make changes after shopping has
                                            started, you can use the app or website to approve replacements or chat
                                            with your shopper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">
                                        What happens if there's an issue with my order?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>If something isn’t right, you’ve got options. In the Instacart app or
                                            website, you can report:</p>
                                        <ul>
                                            <li>Missing items</li>
                                            <li>Incorrect items</li>
                                            <li>Damaged items</li>
                                            <li>Poor replacements</li>
                                            <li>Early/late orders</li>
                                        </ul>
                                        <p>If an order never came, or you get someone else’s order, you can reach
                                            out to Instacart Customer Experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix">
                                        Can I get contactless delivery with Instacart?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>The health and safety of our community is our number one priority. We are
                                            excited to offer contactless delivery through our Leave at My Door
                                            delivery feature.</p>
                                        <p>Leave at My Door delivery gives you the flexibility to have your
                                            groceries delivered without having to come to the door or be at home.
                                            You can leave delivery instructions for your shopper at checkout, and
                                            we’ll notify you when your order arrives.</p>
                                        <p>Leave at My Door is now the default setting for all Instacart deliveries.
                                            If you’d prefer to not use this feature, simply uncheck the box that
                                            says “Leave at my door if I’m not around” at checkout.</p>
                                        <p>Customers who order alcohol, prescriptions, or certain high-value items
                                            may need to show ID upon delivery. We ask shoppers to wear masks
                                            whenever they come into contact with customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- FAQ area end --------->

    <!--------- Default area start --------->
    <!--------- Default area end --------->

</main>
@endsection