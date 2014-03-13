<div class="container navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse collapse">
                <ul class="nav row-fluid">
                    <li class="span8">
                        <p>2014年2月15日&nbsp;&nbsp;&nbsp;&nbsp;星期六</p>
                    </li>
                    <li class="span4">
                        <p>
                            <?php if (isset($member) && $member):?>
                            <span>你好，<?php echo h($member['Member']['username']);?></span>
                            <span><a href="<?php echo $this->Html->url(array('controller' => 'system', 'action' => 'signout'))?>">退出</a></span>
                            <?php else:?>
                            <span><a href="<?php echo $this->Html->url(array('controller' => 'system', 'action' => 'signin'))?>">登录</a></span>
                            <span><a href="<?php echo $this->Html->url(array('controller' => 'system', 'action' => 'signup'))?>">注册</a></span>
                            <?php endif;?>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="subhead" id="overview">
    <div class="container topBanner">
        <div class="wrapper"></div>
    </div>
</header>