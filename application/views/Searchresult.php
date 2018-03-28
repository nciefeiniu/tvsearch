<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bens</title>
    <!--<style type="text/css" href="./css/result.css"></style>-->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/result.css" rel="stylesheet">
    <link href="/static/css/fenye.css" rel="stylesheet">
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

</div>

<!--结果展示-->
<div id="main">
    <div class="result">
        <div class="box_2">
            <?php
                //判断
                if (is_array($ids) && !empty($ids)){
                //循环输出
                foreach($ids as $id):
            ?>
            <div class="panel panel-primary">
                 <a href="<?php echo '/index.php/detail/get_urls/' .  base64_encode($id['id']) . '/' .  preg_replace($id['name'])?>">
                 <div class="panel-body">
                      <?php
                        echo $id['name'];
                      ?>
                 </div>
                 </a>
            <div class="panel-footer">
                <span class="label label-success">magnet</span>
                <span class="label label-warning">ed2k</span>
                <span class="label label-info">thunder</span>
            </div>
            </div>
            <?php
                endforeach;
            }else{
                //下面是没匹配到数据返回的信息！
            ?>
            <div class="panel panel-primary">
                <div class="panel-body">
                    There is nothing!!! 
                </div>
            </div>
            <?php
                }
            ?>
            <!--这里结束-->

            <!-- 翻页 -->
            <div id="pagelist">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php
                        echo $pages;
                    ?>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</div>
<!--页脚-->
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