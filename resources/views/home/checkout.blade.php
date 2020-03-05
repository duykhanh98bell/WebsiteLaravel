@extends('layouts.main')
@section('product')

@if($Cart->items)
<section class="checkout_area section_gap">
    <div class="container">
        
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Chi tiết hóa đơn</h3>
                    <form class="row contact_form" action="{{route('post_checkout')}}" method="post" novalidate="novalidate">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name">
                            <span class="placeholder" data-placeholder="Full name"></span>
                        </div>
                        <!-- @if($errors->has('name'))
                        <div class="help-block">
                            {!!$errors->first('name')!!}
                        </div>
                        @endif -->

                        <!-- <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="name">
                            <span class="placeholder" data-placeholder="Last name"></span>
                        </div> -->
                        <!-- <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                        </div> -->
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="phone">
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email">
                            <span class="placeholder" data-placeholder="Email Address"></span>
                        </div>
                        <!-- <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select><div class="nice-select country_select" tabindex="0"><span class="current">Country</span><ul class="list"><li data-value="1" class="option selected">Country</li><li data-value="2" class="option">Country</li><li data-value="4" class="option">Country</li></ul></div>
                        </div> -->
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="address">
                            <span class="placeholder" data-placeholder="Address"></span>
                        </div>
                        <!-- <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Address line 02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">District</option>
                                <option value="2">District</option>
                                <option value="4">District</option>
                            </select><div class="nice-select country_select" tabindex="0"><span class="current">District</span><ul class="list"><li data-value="1" class="option selected">District</li><li data-value="2" class="option">District</li><li data-value="4" class="option">District</li></ul></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Create an account?</label>
                            </div>
                        </div> -->
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Phương thức nhận hàng</h3>
                                <input type="radio" id="f-option3" name="status" value="0" checked="">Tại Shop
                                <input type="radio" id="f-option3" name="status" value="1">Ship
                                <!-- <label for="f-option3">Ship to a different address?</label> -->
                            </div>
                            <textarea class="form-control" name="note" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div>
                        <button  class="primary-btn" type="submit">
                           Xác nhận đơn hàng
                        </button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        @if(count(($Cart->items)))
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#">Tên sản phẩm <span>Đơn giá</span></a></li>
                            @php
                            $tong = 0;
                            @endphp
                            @foreach($Cart->items as $item)
                            <li><a href="#">{{$item[0]['pro_name']}} <span class="middle">x {{$item['quantity']}}</span> <span class="last">${{$item[0]['sale_off']*$item['quantity']}}</span></a></li>
                            @php
                            $tong = $tong + $item[0]['sale_off']*$item['quantity'] ;
                            @endphp
                           @endforeach
                           
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Tổng tiền <span>$ <?php echo $tong; ?></span></a></li>
                            <!-- <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                            <li><a href="#">Total <span>$2210.00</span></a></li> -->
                        </ul>
                        @endif
                        <!-- <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Check payments</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                            Store Postcode.</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                            account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms &amp; conditions*</a>
                        </div> -->
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endif
@stop()