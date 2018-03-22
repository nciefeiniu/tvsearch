<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>犇云</title>

    <link href="static/css/main.css" rel="stylesheet">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>


</head>
<body background="https://az29176.vo.msecnd.net/videocontent/WaterDay_1080_HD_ZH-CN46683123.jpg">
<div id="viewport">
    <div class="content" id="main">
        <div class="logo">
            <div class="logo_">
                <center>
                <img id="logo_img" src="static/images/logos.png"  >
                </center>
            </div>
        </div>
        <!--搜索框-->
        <div class="search">
            <?php echo validation_errors(); ?>
            <?php echo form_open('result/view'); ?>
            <!-- <form action="http://baidu.com" method="get"> -->
                <input type="text" name="text" class="form-control" placeholder="请输入剧名~  按回车键确认">
            </form>
        </div>
        <!--&lt;!&ndash;提示框&ndash;&gt;-->
        <!--<div class="alert alert-info sure" role="alert">-->
            <!--<a href="#" class="alert-link">回车键确认</a>-->
        <!--</div>-->
    </div>

    <!--copyright-->
<div id="footer">
    <em>&copy; 2018 <a href="https://github.com/nciefeiniu"> nicefeiniu</a></em>
</div>
</div>
</body>
</html>