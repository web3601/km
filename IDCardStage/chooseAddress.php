<?php
include 'header.php';
?>

<div class="chooseAddress">
    <!-- 搜索框-->
    <div class="searchArea">
        <!-- 结构布局搜索框左含有icon和del,右为button-->
<!--        <form action="">-->
            <div class="searchGroup">
                <img src="img/icon/16/search.png" alt="">
                <input class="search" type="text" placeholder="河北石家庄张扬北路品琪旗舰店">
                <img src="img/icon/16/del.png" alt="" class="del">
            </div>
            <button class="btn">搜索</button>
<!--        </form>-->


    </div>

    <!-- 附近门店 -->
    <div class="nearbyShop">
        <!--        标题-->
        <p class="nearbyShopTitle">附近门店</p>
        <!--        列表填充-->
        <!--        结构:左icon-home 中文字上下结构 右input-radio-->
        <form action="">
            <ul class="nearbyShopUl">
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id maiores
                            molestiae quasi quia similique unde! Accusantium, ad, distinctio eligendi fugiat harum
                            molestiae, numquam officia possimus quia quis voluptates voluptatibus.</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>
                <li>
                    <img src="img/icon/32/home.png" alt="" class="home">
                    <div class="nearbyShopUlText">
                        <p class="shopName">河北石家庄品琪旗舰店</p>
                        <p class="shopAddress">河北石家庄张扬北路456号</p>
                    </div>
                    <input type="radio">
                </li>

            </ul>
            <div class="nearbyShopButton">
                <button class="btn">提交</button>
            </div>
        </form>


    </div>


</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {

//       选择门店页面-点击查询区域的删除按钮操作
        $('.searchGroup .del').click(function(){
            $('.searchGroup .search').val('');
        })
//       选择门店页面-点击查询区域跳转到查询门店结果页面的按钮操作
        $('.searchArea .btn').click(function(){
            var searchVal=$('.searchGroup .search').val();
            if(searchVal){
                location.href='chooseAddressSearchShop.php'
            }else{
                alert('搜索条件不能为空');
            }
            console.log(searchVal);
        })

    //   选择门店页面-结果详情区域的radio点击操作
        $('.nearbyShopUl').delegate('li', 'click', function (e) {
            var e = e.target;

            if ($(e) !== $('.nearbyShopUl>li')) {
                $(e).parents('li').parents('.nearbyShopUl').find('input[type="radio"]').prop('checked', false);
                $(e).parents('li').find('input[type="radio"]').prop('checked', true);
            }
            if (e == this) {
                $(e).parents('.nearbyShopUl').find('input[type="radio"]').prop('checked', false);
                $(e).find('input[type="radio"]').prop('checked', true);
            }

        })

    })
</script>
</body>
</html>
