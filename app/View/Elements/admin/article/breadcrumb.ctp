<div class="row-fluid">
    <div class="span12">
        <ul class="breadcrumb">
            <li class="active">
                <a href="<?php echo $this->Html->url(array(
                    'controller' => 'article', 'action' => 'index',
                    'admin' => true,
                ));?>">文章管理</a>
            </li>
            <?php foreach ($breadCrumb as $item):?>
                <li class="active">
                    <span class="divider">/</span>
                    <a href="<?php echo $this->Html->url(array(
                        'controller' => 'article', 'action' => 'index',
                        'admin' => true, 'category' => $item['id'],
                    ))?>"><?php echo h($item['name']);?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>