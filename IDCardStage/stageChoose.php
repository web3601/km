<?php
    include 'header.php';
?>
<section>
    <form action="">
        <!--选择分期区域-->
        <div class="chooseIDCardRadio">
            <p class="active">
                <span>
                    <img src="img/icon/64/idCard.png" alt="" class="chooseIDCard">
                </span>
                选择信用卡分期
                <input type="radio" name="chooseIDCard" checked>
            </p>
            <p>
                <span>
                    <img src="img/icon/64/noIDCardOff.png" alt="" class="noIDCard">
                </span>
                &nbsp;&nbsp;无信用卡分期&nbsp;&nbsp;
                <input type="radio" name="noChooseIDCard">
            </p>
        </div>

        <!-- 手动选择区域-->
        <div class="handleChoose">
            <p>
                <span>选择门店</span>
                <a href="chooseAddress.php">
                    <input class="chooseAddress" type="text" placeholder="河北石家庄张扬北路品琪旗舰店" readonly>
                </a>
            </p>
            <p>
                <span>分期项目</span>
                <select name="" id="handleChooseSelectProduct">
                    <option value="1">全年祛斑管理护肤套装</option>
                    <option value="2">全年祛斑管理护肤套装</option>
                </select>
            </p>

            <p>
                <span>分期数</span>
                <select name="" id="handleChooseSelectTimeLength">
                    <option value="1">未选择</option>
                    <option value="2">6期(月)</option>
                    <option value="2">3期(月)</option>
                    <option value="2">25(天)</option>
                </select>
            </p>
            
            <p>
                <span>价格</span>
                <input type="text" class="handleChooseSelectPrice">
            </p>
            <div class="handleChooseSelectSubmit">
                <button class="btn">提交</button>
            </div>
        </div>

    </form>
</section>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="css/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function () {

        $('.chooseIDCardRadio').delegate('p', 'click', function (e) {
            var e = e.target;
            if ($(e) !== $('.chooseIDCardRadio>p')) {
                $(e).parents('p').addClass('active').siblings().removeClass('active');
                $(e).parents('p').parents('.chooseIDCardRadio').find('input[type="radio"]').prop('checked', false);
                $(e).parents('p').find('input[type="radio"]').prop('checked', true);
                $(e).parents('p').parents('.chooseIDCardRadio').find('img.noIDCard').prop('src', 'img/icon/64/noIDCardOff.png');
                $(e).parents('p').find('img.noIDCard').prop('src', 'img/icon/64/noIDCard.png');
                $(e).parents('p').parents('.chooseIDCardRadio').find('img.chooseIDCard').prop('src', 'img/icon/64/idCardOff.png');
                $(e).parents('p').find('img.chooseIDCard').prop('src', 'img/icon/64/idCard.png');
            }
            if (e == this) {
                $(e).addClass('active').siblings().removeClass('active');
                $(e).parents('.chooseIDCardRadio').find('input[type="radio"]').prop('checked', false);
                $(e).find('input[type="radio"]').prop('checked', true);
                $(e).parents('.chooseIDCardRadio').find('img.noIDCard').prop('src', 'img/icon/64/noIDCardOff.png');
                $(e).find('img.noIDCard').prop('src', 'img/icon/64/noIDCard.png');
                $(e).parents('.chooseIDCardRadio').find('img.chooseIDCard').prop('src', 'img/icon/64/idCardOff.png');
                $(e).find('img.chooseIDCard').prop('src', 'img/icon/64/idCard.png');
            }

        })


    })
</script>
</body>
</html>