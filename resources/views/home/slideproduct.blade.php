<!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <!-- <div class="section-title">
                            <h1>Tất cả sản phẩm</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.</p>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @foreach($ViewProduct as $pro)
                    <a href="{{URL::to('productdetail/'.$pro->product_id)}}">
                        <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="" height="200" src="{{asset('uploads/'.$pro->images)}}" alt="">
                            <div class="product-details">
                                <h6>{{$pro->pro_name}}</h6>
                                <div class="price">
                                    <h6>${{$pro->sale_off}}</h6>
                                    <h6 class="l-through">${{$pro->price}}</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <!-- <div class="section-title">
                            <h1>Coming Products</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.</p>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @foreach($ViewProduct as $pro)
                    <a href="{{URL::to('productdetail/'.$pro->product_id)}}">
                        <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="{{asset('uploads/'.$pro->images)}}" alt="">
                            <div class="product-details">
                                <h6>{{$pro->pro_name}}</h6>
                                <div class="price">
                                    <h6>${{$pro->sale_off}}</h6>
                                    <h6 class="l-through">${{$pro->price}}</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->