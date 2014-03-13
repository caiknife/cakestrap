<ul class="dropdown-menu main-menu" data-spy="affix" data-offset-top="0">
    <li <?php if($this->Content->isHighlight('admin_index')):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'content', 'action' => 'index', 'admin' => true));?>">人才库</a>
    </li>
    <li <?php if($this->Content->isHighlight('admin_jiaoshi')):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'content', 'action' => 'jiaoshi', 'admin' => true));?>">教师库</a>
    </li>
    <li <?php if($this->Content->isHighlight('admin_peixunjigou')):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'content', 'action' => 'peixunjigou', 'admin' => true));?>">培训机构</a>
    </li>
    <li <?php if($this->Content->isHighlight('admin_peixunxinxi')):?>class="active"<?php endif;?>>
        <a href="<?php echo $this->Html->url(array('controller' => 'content', 'action' => 'peixunxinxi', 'admin' => true));?>">培训信息</a>
    </li>
</ul>