<div class="row-fluid container">
    <div class="span3">
        <div class="t_left_domn">
            <div class="t_left_domn1">
               <h4><a href="<?php echo $this->Html->url('/')?>">主站首页</a></h4>
            </div>
            <?php foreach ($structure['subs'] as $item):?>
            <hr/>
            <div class="t_left_domn1">
                <h4><?php echo h($item['name'])?></h4>
                <ul>
                    <?php foreach ($item['subs'] as $subItem):?>
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists',
                        'category' => $subItem['id']))?>"><?php echo h($subItem['name'])?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="span9">
        <h3><?php echo h($category);?></h3>
        <ul class="breadcrumb">
            <li class="active">当前位置：</li>
            <li class="active"><a href="<?php echo $this->Html->url('/')?>">首页</a></li>
            <li class="active">
                <span class="divider">/</span>
                <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists',
                'category' => $categoryId))?>"><?php echo h($category);?></a>
            </li>
        </ul>
        <hr/>
        <div>
            <?php foreach ($articles as $item):?>
                <div class="well well-small">
                    <span class="pull-right alert alert-info">
                        发布日期：<?php echo h($this->Date->format($item['Article']['public_date']));?>
                    </span>
                    <h4>
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']));?>">
                            <?php echo h($item['Article']['title']);?>
                        </a>
                    </h4>
                </div>
            <?php endforeach;?>
            <?php echo $this->element('front/pagination');?>
        </div>
    </div>
</div>