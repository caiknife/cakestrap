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
<body id="top" class="other-preview" data-spy="scroll" data-target=".other-subnav" data-offset="80">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="brand">首页</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">频道1</a></li>
                        <li><a href="#">频道2</a></li>
                        <li><a href="#">频道3</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">频道4<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="#">子频道1</a></li>
                                <li><a href="#">子频道2</a></li>
                                <li class="divider"></li>
                                <li><a href="#">子频道3</a></li>
                                <li><a href="#">子频道4</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div>
                        <form class="navbar-search form-search" method="get">
                            <div class="input-append">
                                <input name="q" type="text" class="span2 search-query" autocomplete="off" placeholder="搜索" />
                                <button type="submit" class="btn btn-info">
                                    <i class="icon-white icon-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <ul class="nav pull-right">
                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="从这里登录" rel="nofollow">登录</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="从这里注册" rel="nofollow">注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php echo $this->fetch('content');?>
    </div>
    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <p>
                            <div class="pull-right">
                                <a href="#top" rel="nofollow">回到顶端</a>
                            </div>                                
                        </p>
                        <p>
                            <div class="info">
                            BootStrap 2.3.2 速查板
                            </div>
                        </p>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</html>