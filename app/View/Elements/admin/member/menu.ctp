<ul class="dropdown-menu main-menu" data-spy="affix" data-offset-top="0">
    <li <?php if($typeId == 0):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'index', 'admin' => true, 'type' => 0));?>">普通用户</a>
    </li>
    <li <?php if($typeId == 1):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'index', 'admin' => true, 'type' => 1));?>">机构用户</a>
    </li>
</ul>