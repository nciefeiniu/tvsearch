<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bens</title>
    <link rel="shortcut icon" href="/static/images/favico.ico">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/result.css" rel="stylesheet">
    <link href="/static/css/detail.css" rel="stylesheet">
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
</head>
<body>
<!--搜索框-->
<div id="header">
    <div class="box_1">
        <div class="box_2">
            <!--logo-->
            <div class="row">
                <div class="col-xs-6 col-md-3">
                <a href="http://bens.cow66.cn"><img class="logo_img" src="/static/images/logos.png"></a>
                </div>
            </div>
            <!--输入框-->
            <div class="s_input">
            <?php $this->load->library('form_validation');?>
            <?php echo validation_errors(); ?>
            <!-- 生成表单 -->
            <?php echo form_open('result/view'); ?>
                    <input type="text" name="text" class="form-control" placeholder="请输入剧名~  按回车键确认">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clear_float">
<hr />
</div>

<!--结果展示-->
<div id="main">
    <div class="result">
        <div class="detail">
            <h2><?php echo $name;?></h2>
            <div class="xian">
                <i><?php echo $name;?></i>
                <i>的下载链接</i>
            </div>
            <!--链接部分 循环输出-->
            <?php
                foreach ($urls as $url){
            ?>
            <p><a href="<?php echo $url['url'];?>"><?php echo $url['url_name'];?></a></p>
            <?php }?>
        </div>
    </div>
</div>

<!--占位-->
<div class = "blank">
<div class="alert alert-danger" role="alert">我是有底线的~</div>
</div>

<!--footer-->
<div id="footer" class="container">
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-inner navbar-content-center">
        <span class="text-muted credit ziti_1" >
            蜀ICP备16035040号-2
        </span>
        <span class="text-muted credit ziti_2" >
            &copy nicefeiniu 2018
        </span>

    </div>
</nav>
</div>
</body>
</html>