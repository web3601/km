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
        body,html{
            width:100%;
            height:100%;
        }

        @media screen and (min-width: 768px) {
            #myCanvas{
                width:50%;
                max-width:720px;
                max-height:1156px;
            }
        }
        @media screen and (max-width: 768px) {
            #myCanvas{
                width:100%;
                height:100%;
                max-width:720px;
                max-height:1156px;
            }
        }
    </style>
</head>
<body>
<input type="text" class="input">请输入生日:
<img src="img/20180208100344.png" alt="" style="display: none;width: 720px;height: 1156px;" class="img">
<canvas id="myCanvas" width="720" height="1156" style="border:solid 1px gray;"></canvas>
<script src="lay/layui.all.js"></script>
<script>
    layer.msg('hello');
    function draw() {
        var iimg = $('.img')[0];
        var canvas = document.getElementById("myCanvas");
        var ctx = document.getElementById("myCanvas").getContext("2d");
        ctx.drawImage(iimg, 0, 0);
        ctx.fillStyle = "#F7737C";
        ctx.font = "bold 30px 微软雅黑";
        var textArr = [
            ['犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '爱上菊花'],
            ['捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱','捡到钱', '奔小康'],
            ['平淡无奇','平淡无奇','平淡无奇','遇到贵人','人生开挂','读书','旅行','遇到爱','出名','拍电影','上映', '60亿票房'],
            ['犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '犯桃花', '桃花劫'],
            ['遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱','遇到爱', '依旧单身'],
            ['旅行','旅行','犯桃花','瘦五斤','瘦五斤','突然火了','粉丝暴增','粉丝再增','低调','更加火了','暴富', '人生巅峰'],
            ['瘦一斤','瘦一斤','瘦两斤','瘦一斤','瘦两斤','瘦一斤','瘦一斤','瘦一斤','瘦一斤','瘦一斤','有艳遇', '艳遇*2'],
            ['平静','平静*2','平静*3','平静*4','彩票中奖','彩票中奖','彩票中奖','彩票中奖','捡到钱','捡到钱','捡到钱', '奔小康'],
            ['企图创业','纠结','纠结','拼了','拼了','拼了','拼了','还在拼','继续拼','成了!','上市了!', '做慈善'],
            ['捡到钱','捡到钱','旅行','犯桃花','瘦五斤','犯桃花','犯桃花','遇到爱','胖五斤','胖五斤','旅行', '中大奖'],
            ['捡到钱','捡到钱','旅行','犯桃花','瘦五斤','犯桃花','犯桃花','遇到爱','胖五斤','胖五斤','旅行', '中大奖']
        ];


        var n=Math.ceil(Math.random()*10);
        for (var i = 0; i < 12; i++) {
            i == 1 ? ctx.fillStyle = "#fff" :
                (i == 3 ? ctx.fillStyle = "#fff" :
                    (i == 4 ? ctx.fillStyle = "#fff" :
                        (i == 6 ? ctx.fillStyle = "#fff" :
                            (i == 9 ? ctx.fillStyle = "#fff" :
                                (i == 11 ? ctx.fillStyle = "#fff" :
                                    ctx.fillStyle = "#F7737C")))));
            if (i < 4) {
                ctx.fillText(textArr[n][i], 70 + 158 * i, 550);
            } else if (i < 8) {
                ctx.fillText(textArr[n][i], 70 + 158 * (i - 4), 550 + 170);
            } else if (i < 12) {
                console.log(textArr[n][i]);
                ctx.fillText(textArr[n][i], 70 + 158 * (i - 8), 550 + 170 + 170);
            }
        }



        var image = new Image();
        image.src = canvas.toDataURL("image/png");
        console.log(image);
        var img_data1 = Canvas2Image.saveAsPNG(canvas, true).getAttribute('src');
//        saveFile(img_data1, 'richer.png');
//        Canvas2Image.saveAsPNG(canvas);


        function saveFile(data, filename){
            var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
            save_link.href = data;
            save_link.download = filename;

            var event = document.createEvent('MouseEvents');
            event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            save_link.dispatchEvent(event);
        };

    }
    window.onload = function () {
        draw();
    }
</script>
</body>
</html>