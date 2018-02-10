<?php
header("content-type:text/html;charset=utf-8");
/**
 * GD图像处理库
 * GD干嘛使的？
 *   添加水印，由这玩意自动do it!
 *   统计图，由这玩意自动do it!
 *   验证码，由这玩意自动do it!
 *
 * PHP中的PhotoShop
 *
 *
 **/

// 1.创建画布
$img = imagecreatetruecolor(500, 500);     // 两个参数 宽和高 x y
//var_dump($img);

// 2.分配颜色
$white = imagecolorallocate($img, 255,255,255);
$red = imagecolorallocate($img, 0xff,0,0);
$light_red = imagecolorallocate($img, 150,20,30);
$green = imagecolorallocate($img, 0,255,0);
$light_green = imagecolorallocate($img, 0,100,0);
$blue = imagecolorallocate($img, 0,0,255);
$light_blue = imagecolorallocate($img, 20,20,100);
$imgg=imagecreatefrompng("img/dog/1.png");
//var_dump($img);
// 3.填充背景
imagefill($img, 0,0, $white);

// 4.作画

// 画矩形
imagerectangle($img, 100,100, 400,400, $green);
//imagefilledrectangle($img, 100,100, 400,400, $green);填充绿色

// 画多边形

// 画椭圆
// 画弧线

// 5.输出或保存图片
header("content-type:image/jpeg");  // 告诉浏览器，给老子们显示一张图片
// imagegif()  imagepng()
imagejpeg($imgg);                    // 将图片内容交给浏览器

// 6.关闭图片资源
imagedestroy($imgg);

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/canvas2image.js"></script>
    <script type="text/javascript" src="js/base64.js"></script>
    <style>
        body, html {
            /*width: 100%;*/
            /*height: 100%;*/
        }

        @media screen and (min-width: 768px) {
            #myCanvas, .img2 {
                width: 50%;
                max-width: 720px;
                max-height: 1180px;
            }
        }

        @media screen and (max-width: 768px) {
            #myCanvas, .img2 {
                width: 100%;
                height: 100%;
                max-width: 720px;
                max-height: 1180px;
            }
        }

        .name {
            display: inline-block;
            border-radius: 5px;
            width: 80vw;
            height: 35px;
            color: #888888;
            padding: 2px 3px;
            border: 1px solid #aaa;
            box-sizing: border-box;
            margin: 10px 0;
        }

        .aKeyCreate {
            display: inline-block;
            width: 80vw;
            background-color: #FF4303;
            color: #FFF;
        }

        /*bootstrap的button样式修改*/
        .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
            color: #fff;
            background-color: #FF6303;
            border-color: #FF6303;
        }

        .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open > .dropdown-toggle.btn-default.focus, .open > .dropdown-toggle.btn-default:focus, .open > .dropdown-toggle.btn-default:hover {
            color: #fff;
            background-color: #FF6303;
            border-color: #FF6303;
        }

        .btn-default:hover {
            color: #fff;
            background-color: #FF6303;
            border-color: #FF6303;
        }

        .btn-default.focus, .btn-default:focus {
            color: #fff;
            background-color: #FF6303;
            border-color: #FF6303;
        }

    </style>
</head>
<body>
<div class="container text-center getName">
    <div class="topImg text-center">
        <img src="img/dog/icon.png" alt="" style="max-height: 300px">
    </div>
    <input type="text" placeholder="请输入姓名(3-8个字)" class="name">
    <button class="btn btn-default btn-lg aKeyCreate">一键生成</button>
    <img src="img/dog/1.png" alt="" style="display: none;width: 720px;height: 1180px;" class="img">
    <canvas id="myCanvas" width="720" height="1180" style="border:solid 1px gray; display: none;"></canvas>
    <img src="" alt="" style="max-width: 720px;max-height: 1180px;" class="img2">

</div>


<script>

    function draw(a) {
        var a = a.toString();

        var iimg = $('.img')[0];
        console.log(iimg);
        var canvas = document.getElementById("myCanvas");
        var ctx = document.getElementById("myCanvas").getContext("2d");
        ctx.drawImage(iimg, 0, 0);
        ctx.fillStyle = "#000";
        ctx.font = "bold 30px 汉仪小麦体简";


        ctx.fillText(a, 159, 294);


        var image = new Image();
        $('.img2').attr('src', canvas.toDataURL("image/png"));
        var img_data1 = Canvas2Image.saveAsPNG(canvas, true).getAttribute('src');
//        saveFile(img_data1, 'richer.png');
//        Canvas2Image.saveAsPNG(canvas);


        function saveFile(data, filename) {
            var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
            save_link.href = data;
            save_link.download = filename;

            var event = document.createEvent('MouseEvents');
            event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            save_link.dispatchEvent(event);
        };

    }


    window.onload = function () {
        var n = Math.ceil(Math.random() * 11);
        console.log(n);
        $('.img').attr('src', 'img/dog/' + n + '.png');
        $('.aKeyCreate').click(function () {
            var nameValue = $('.getName .name').val();
            if (nameValue) {
                draw(nameValue);
            } else {
                alert('您还未填写您的姓名')
            }
        })

    }
</script>

</body>
</html>