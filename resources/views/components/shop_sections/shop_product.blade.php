@if(empty($products))
    <p>No products available.</p>
@else
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$product->types->name}}">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion-master/img/product/' . $product->image_source)}}">
                    <ul class="product__hover">
                        <li><a href="#"><img src="{{asset('malefashion-master/img/icon/heart.png')}}" alt=""><span>Favorite</span></a></li>
                        <li><a href="#"><img src="{{asset('malefashion-master/img/icon/compare.png')}}" alt=""><span>Compare</span></a></li>
                        <!-- Tombol Detail Produk -->
                        <li><a href="/product_details/{{$product->id}}"><img src="{{asset('malefashion-master/img/icon/search.png')}}" alt=""><span>Details</span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>{{$product->name}}</h6>
                    <form id="add-to-cart-form-{{ $product->id }}" action="/addToCart" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $product->id }}').submit();" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>${{$product->price}}</h5>
                    <div class="product__color__select">
                        <label for="pc-1">
                            <input type="radio" id="pc-1">
                        </label>
                        <label class="active black" for="pc-2">
                            <input type="radio" id="pc-2">
                        </label>
                        <label class="grey" for="pc-3">
                            <input type="radio" id="pc-3">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif