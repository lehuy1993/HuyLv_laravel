<?php
    $cate = DB::table('cates')->orderBy('order', 'desc')->take(5)->get();

?>

<section id ="menu" class="description_content" >
    <div  class="menu background_content"   >   
        <div class="clear" style="padding-top: 85px; padding-left: 80px;">
        @foreach($cate as $row_cate)
                <div class="col-md-5" style="margin-bottom: 70px;margin-right: 40px;";>
                <p class="menu_title col-md-offset-1">{{$row_cate->name}}</p>
                <img class="col-md-offset-1" style="margin-bottom: 20px;" src="users/img/restaurant3_04.png"><br>
               <?php
                    $product = DB::table('products')->where('cate_id',$row_cate->id)->take(5)->get();
               ?>
               @foreach($product as $row_product)
                    @if($row_product->special == 2)
                        <div class="col-md-12 col-md-offset-1 menu_product">
                        <span >{{$row_product->name}}</span>
                        <span style="float: right;">${{$row_product->price}}</span>
                        <br>
                        <hr style="border: 1px solid #d3ad53">
                        <p>
                        {!! $row_product->description !!}
                        </p>
                        </div>
                    @endif
                    @if($row_product->special == 1)
                        <div  style="float:right;margin-right: -41px;">
                           <p class="special">Special</p>
                        </div>
                        <div class="col-md-12 col-md-offset-1 menu_product" style="border: 1px solid #d3ad53">
                        <span >{{$row_product->name}}</span>
                        <span style="float: right;">${{$row_product->price}}</span>
                        <br>
                        <hr style="border: 1px solid #d3ad53">
                        <p>
                        {!! $row_product->description !!}
                        </p>
                        </div>
                    @endif
                @endforeach
                
          </div>
        @endforeach
            

        </div>

        </div>
</section>
