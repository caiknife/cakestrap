<div class="navbar-inner">
    <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index', 'admin' => 'true',))?>" class="brand">中国质量人才网</a>
        <div class="nav-collapse collapse">
            <ul class="nav">
                <li <?php if ($this->request->controller == 'article'):?>class="active"<?php endif;?>>
                    <a data-toggle="tooltip" data-placement="bottom" title="文章管理" href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'index', 'admin' => true))?>">文章管理</a>
                </li>
                <li <?php if ($this->request->controller == 'member'):?>class="active"<?php endif;?>>
                    <a data-toggle="tooltip" data-placement="bottom" title="会员管理" href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'index', 'admin' => true))?>">会员管理</a>
                </li>
                <li <?php if ($this->request->controller == 'content'):?>class="active"<?php endif;?>>
                    <a data-toggle="tooltip" data-placement="bottom" title="信息管理" href="<?php echo $this->Html->url(array('controller' => 'content', 'action' => 'index', 'admin' => true))?>">信息管理</a>
                </li>
            </ul>
            <ul class="nav pull-right">
                <li><a>当前用户：<?php echo $admin['Account']['username']?></a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?php echo $this->Html->url(array('controller' => 'system', 'action' => 'signout', 'admin' => 'true'))?>" data-toggle="tooltip" data-placement="bottom" title="退出">退出</a></li>
            </ul>
        </div>
    </div>
</div>