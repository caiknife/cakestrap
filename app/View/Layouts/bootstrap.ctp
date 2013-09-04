<?php echo $this->Html->docType('html5');?>
<html lang="zh-CN">
<head>
    <?php echo $this->Html->charset();?>
    <title><?php echo $title_for_layout;?></title>
    <?php 
        echo $this->Html->meta('icon');
        echo $this->Html->meta(array('name' => 'viewport','content' => 'width=device-width, initial-scale=1.0'));
        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('bootstrap-responsive.min.css');
        echo $this->Html->css('other.css');
        echo $this->Html->script('jquery/jquery-1.8.3.min');
        echo $this->Html->script('bootstrap.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#?>" class="brand">首页</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">频道1</a></li>
                        <li><a href="#">频道2</a></li>
                        <li><a href="#">频道3</a></li>
                        <li><a href="#">频道4</a></li>
                        <li class="other-search-box">
                            <form class="navbar-search" method="get">
                                <div class="input-append">
                                    <input name="q" type="text" class="span2" autocomplete="off" placeholder="搜索" />
                                    <button type="submit" class="btn btn-success">
                                        <i class="icon-white icon-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li><a href="#" rel="nofollow">登录</a></li>
                        <li><a href="#" rel="nofollow">注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php echo $this->fetch('content');?>
    </div>
</body>
</html>