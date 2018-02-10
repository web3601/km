<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--    bootstrap-->
    <!--    <link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.css">-->
    <!--    <link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="css/skinTest.css">
</head>
<body>
<div class="vessel">
    <!--头部-->
    <header class="tc bgc6d0 cfff ">
        <h3 class="fwb">专业肌肤测试卡--为您的皮肤负责</h3>
        <p>精准分析肌肤问题，每个人的肤质不一样，首先了解清楚你自身的肤质才能更好的达到真正的保养，女人最重要的形象就是有一张好的脸蛋，美丽的女人从来不会有人嫌弃。</p>
    </header>
    <section>
        <!--banner-->
        <div class="tc banner">
            <img src="img/girl.jpg" alt="">
        </div>
        <!--测试部分-->
        <form class="handleForm" method="post" enctype="multipart/form-data">
            <div class="commonStyleA">
                <p class="pTitle">请描述您的脸蛋情况</p>
                <p id="a"><input type="radio" name="aA" value="aA">A、不干也不油</p>
                <p><input type="radio" name="aB" value="aB">B、干燥,毛孔细</p>
                <p><input type="radio" name="aC" value="aC">C、T区油，U区干</p>
                <p><input type="radio" name="aD" value="aD">D、全脸泛油，易长痘</p>
                <p><input type="radio" name="other1" value="other1">其他<input type="text" class="answer" name="other1Answer"></p>
            </div>

            <div class="commonStyleB">
                <p class="pTitle">请描述您的脸蛋情况</p>
                <p><input type="radio" name="bA" value="bA">A、不干也不油</p>
                <p><input type="radio" name="bB" value="bB">B、干燥,毛孔细</p>
                <p><input type="radio" name="bC" value="bC">C、T区油，U区干</p>
                <p><input type="radio" name="bD" value="bD">D、全脸泛油，易长痘</p>
                <p><input type="radio" name="other2" value="other2">其他<input type="text" class="answer" name="other2Answer"></p>
            </div>

            <div class="commonStyleC">
                <p class="pTitle">请描述您的脸蛋情况</p>
                <p><input type="radio" name="cA" value="cA">A、不干也不油</p>
                <p><input type="radio" name="cB" value="cB">B、干燥,毛孔细</p>
                <p><input type="radio" name="cC" value="cC">C、T区油，U区干</p>
                <p><input type="radio" name="cD" value="cD">D、全脸泛油，易长痘</p>
                <p><input type="radio" name="other3" value="other3">其他<input type="text" class="answer" name="other3Answer"></p>
            </div>

            <div class="commonStyleD">
                <p class="pTitle">请描述您的脸蛋情况</p>
                <p><input type="radio" name="dA" value="dA">A、不干也不油</p>
                <p><input type="radio" name="dB" value="dB">B、干燥,毛孔细</p>
                <p><input type="radio" name="dC" value="dC">C、T区油，U区干</p>
                <p><input type="radio" name="dD" value="dD">D、全脸泛油，易长痘</p>
                <p><input type="radio" name="other4" value="other4">其他<input type="text" class="answer" name="other4Answer"></p>
            </div>


        </form>
        <!--温馨提示-->
        <!--提交提示-->
    </section>
</div>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="bootstrap3.3.7/js/bootstrap.min.js"></script>
<script src="js/skinTest.js"></script>
</body>
</html>