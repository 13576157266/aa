"use strict";$(".addToCart").click(function(){$.ajax({url:"../interface01/addwq.php",dataType:"json",data:{id:"123",name:"狼图腾",img:"../img/xzxz.jpg",num:1,price:45},success:function(n){n.code?alert("商品加入成功"):alert("商品加入失败")}})}),$(".showCart").click(function(){$.ajax({url:"../interface01/showlist.php",dataType:"json",success:function(n){$(".jiajian").html(""),$.each(n.data,function(n,t){$(".jiajian").append("\n            <li>\n                <p>".concat(t.product_id,'</p>          \n                <p>\n                    <img src="').concat(t.product_img,'" alt="">\n                </p>                                 \n                <p>').concat(t.product_name,'</p>   \n                 <button class="addNum">+</button>     \n                <p>').concat(t.product_num,'</p>   \n                 <button class="cutNum">-</button>  \n                <p>').concat(t.product_price,'</p>    \n                <button class="delProduct">删除该商品</button>\n            </li>\n                '))})}})}),$("ul").on("click",".delProduct",function(){var n=$(this).parent().children().eq(0).html();$.ajax({url:"../interface01/delwq.php",data:{id:n},dataType:"json",success:function(n){n.code&&showCart()}})}),$(".addNum").on("click",".addNum",function(){var n=$(this).parent().children().eq(0).html();$.ajax({url:"../interface01/updatewq.php",data:{type:"add",id:n},dataType:"json",success:function(n){n.code&&alert("商品增加成")}})}),$(".addNum").click(function(){$.ajax({data:{url:"../interface01/updatewq.php",id:"123"},dataType:"json",success:function(){code&&alert()}})}),$(".cutNum").on("click",".cutNum",function(){$(this).parent().children().eq(0).html();$.ajax({url:"../interface01/updatewq.php",dataType:"json",data:{id:"435435"},success:function(n){n.code&&$.ajax({url:"../interface01/showlist.php",dataType:"json",success:function(n){$(".jiajian").html(""),$.each(n.data,function(n,t){$(".jiajian").append("\n                        <li>\n                            <p>".concat(t.product_id,'</p>          \n                            <p>\n                                <img src="').concat(t.product_img,'" alt="">\n                            </p>                                 \n                            <p>').concat(t.product_name,'</p>   \n                             <button class="addNum">+</button>     \n                            <p>').concat(t.product_num,'</p>   \n                             <button class="cutNum">-</button>  \n                            <p>').concat(t.product_price,'</p>    \n                            <button class="delProduct">删除该商品</button>\n                        </li>\n                            '))})}})}})}),$(".cutNum").click(function(){$.ajax({data:{url:"../interface01/updatewq.php",di:id},dataType:"json",success:function(n){n.code&&$.ajax({url:"../interface01/showlist.php",dataType:"json",success:function(n){$(".jiajian").html(""),$.each(n.data,function(n,t){$(".jiajian").append("\n                        <li>\n                            <p>".concat(t.product_id,'</p>          \n                            <p>\n                                <img src="').concat(t.product_img,'" alt="">\n                            </p>                                 \n                            <p>').concat(t.product_name,'</p>   \n                             <button class="addNum">+</button>     \n                            <p>').concat(t.product_num,'</p>   \n                             <button class="cutNum">-</button>  \n                            <p>').concat(t.product_price,'</p>    \n                            <button class="delProduct">删除该商品</button>\n                        </li>\n                            '))})}})}})});