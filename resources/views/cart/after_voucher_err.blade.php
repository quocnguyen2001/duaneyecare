<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $mess }}</strong>
</div>
<div class="your-order-table table-responsive">
    <table>
        <thead>
            <tr>
                <th class="product-name">Sản phẩm</th>
                <th class="product-total">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Session::get('Cart')->products as $cart) 
            <tr class="cart_item">
                <td class="product-name">
                    {{$cart['productInfo']->ten_sp}} <span class="product-quantity"> × {{$cart['quanty']}}</span>
                </td>
                <td class="product-total">
                    <span class="amount">{{number_format($cart['price'])}}đ</span>
                </td>
            </tr>
            @endforeach
            <?php 
            $tongsoluong= Session::get('Cart')->totalQuanty;
            $tongiatri= Session::get('Cart')->totalPrice;
            $vat=Session::get('Cart')->totalPrice*0.1;
            $total=$tongiatri+$vat;
            ?>  
        </tbody>
        <tfoot>
            <tr class="cart-subtotal">
                <th>Tổng giá trị</th>
                <td><span class="amount">{{number_format($tongiatri)}}đ</span></td>
            </tr>
            <tr class="cart-subtotal">
                <th>Phí VAT</th>
                <td><span class="amount">{{number_format($vat)}}đ</span></td>
            </tr>
            <tr class="order-total">
                <th>Tổng thanh toán</th>
                <td><span class=" total amount">{{number_format($total)}}đ</span>
                </td>
                <input type="hidden" name="tongtien" value="{{$total}}" id="">
                <input type="hidden" name="tongsoluong" value="{{$tongsoluong}}" id="">
            </tr>
            
        </tfoot>
    </table>
</div>