<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
<!--    <link href="css/reset.css" rel="stylesheet">-->
<!--    <link href="skins/futurico/futurico.css" rel="stylesheet">-->
    <link href="skins/flat/red.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/icheck.js"></script>
</head>
<body>
<input type="checkbox"><br>
<input type="checkbox" checked><br>
是的发生发生开发<input type="radio" name="iCheck"><br>
<input type="radio" name="iCheck" checked><br>


<label>
    <div class="icheckbox disabled">
        <input type="checkbox" name="quux[1]" disabled>
    </div>
    Foo
</label>

<label for="baz[1]">Bar</label>
<div class="iradio checked">
    <input type="radio" name="quux[2]" id="baz[1]" checked>
</div>

<label for="baz[2]">Bar</label>
<div class="iradio">
    <input type="radio" name="quux[2]" id="baz[2]">
</div>
<script>
    $(document).ready(function () {
        $('input').iCheck({
            labelHover: false,
            cursor: true
        });

//        $('input').iCheck({
//            checkboxClass: 'icheckbox_futurico',
//            radioClass: 'iradio_futurico',
//            increaseArea: '20%' // optional
//        });

//        $('input').iCheck({
//            checkboxClass: 'icheckbox_flat-red',
//            radioClass: 'iradio_flat-red',
//            increaseArea: '20%' // optional
//        });
    });
</script>
</body>
</html>