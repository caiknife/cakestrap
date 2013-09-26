<div class="navbar-inner">
    <div class="container">
        <a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a href="<?php echo $this->Html->url('/')?>" class="brand">CaiKnife's Pages</a>
        <div class="nav-collapse collapse">
            <ul class="nav">
                <li <?php if ($this->request->controller == 'code'): ?>class="active"<?php endif;?>>
                    <a href="<?php echo $this->Html->url(array('controller'=>'code', 'action'=>'index'))?>">代码</a>
                </li>
            </ul>
            <ul class="nav pull-right">
                <li> 
                    <a href="http://caiknife.github.io" target="_blank">博客 <i class="icon-share-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>