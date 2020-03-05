@extends('layouts.main')
@section('product')
<!-- <?php echo "<pre>";
print_r($cart); ?> -->
@if($cart->items)
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($cart->items))
                        @php
                            $total = 0; 
                        @endphp
                        @foreach($cart->items as $item)
                        @php
                        $thanhtien = $item[0]['sale_off'] * $item['quantity'];
                        @endphp

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img width="200" height="150" src="{{asset('uploads/'.$item[0]['images'])}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>{{$item[0]['pro_name']}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>${{$item[0]['sale_off']}}</h5>
                            </td>
                            <form action="{{URL::to('update-cart')}}" method="">
                            @csrf
                            <td>
                                <div class="product_count">
                                    <input type="hidden" name="id" value="{{$item[0]['product_id']}}">
                                    <input type="number" name="quantity" id="sst" maxlength="12" min="1" value="{{$item['quantity']}}" title="Quantity:" class="input-text qty">
                                    
                                    <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="submit"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="submit"><i class="lnr lnr-chevron-down"></i></button> -->
                                </div>
                            </td>
                            <td>
                                <h5>${{$thanhtien}}</h5>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center">
                                    <button type="submit" class="primary-btn" >Cập nhật</button>
                                    <a href="{{URL::to('delete-cart/'.$item[0]['product_id'])}}" class="primary-btn" onclick="return confirm('Xóa sản phẩm {{$item[0]['pro_name']}}')">Xóa</a>
                                </div>
                            </td>
                            </form>
                            @php
                                $total += $thanhtien;
                            @endphp
                        </tr>
                        @endforeach
                        @endif
                        <tr class="bottom_button">
                            <td>
                                
                            </td>
                            <td>
                                <div class=" d-flex align-items-center">
                                    <a href="{{URL::to('delete-all-cart')}}" class="primary-btn" onclick="return confirm('Xóa toàn bộ sản phẩm')">Xóa hết</a>
                                </div>
                            </td>
                            <td>
                                <h5>Tổng thanh toán</h5>
                            </td>
                            <td>
                                <h5>${{$total}}</h5>
                            </td>
                        </tr>
                        
                      
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="{{URL::to('product')}}">Mua tiếp</a>
                                    <a class="primary-btn" href="{{route('home.checkout')}}">Xuất ra</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endif
@stop()