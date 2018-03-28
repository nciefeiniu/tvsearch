<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>犇云</title>
    <link rel="shortcut icon" href="/static/images/favico.ico">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <link href="/static/css/main.css" rel="stylesheet">

</head>
<body>
<div id="viewport">
    <div class="content" id="main">
        <div class="logo">
            <div class="logo_">
                <center>
                <img id="logo_img" src="/static/images/logos.png"  >
                </center>
            </div>
        </div>
        <!--搜索框-->
        <div class="search">
            <?php $this->load->library('form_validation');?>
            <?php echo validation_errors(); ?>
            <!-- 生成表单 -->
            <?php echo form_open('result/view'); ?>
                <input type="text" name="text" class="form-control" placeholder="请输入剧名~  按回车键确认">
            </form>
        </div>
        <!--&lt;!&ndash;提示框&ndash;&gt;-->
        <!--<div class="alert alert-info sure" role="alert">-->
            <!--<a href="#" class="alert-link">回车键确认</a>-->
        <!--</div>-->
    </div>

    <!--copyright-->
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
</div>
</body>
</html>