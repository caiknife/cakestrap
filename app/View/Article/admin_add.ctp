<?php $this->extend('admin_template');?>

<?php $this->start('article_right');?>
<?php echo $this->Form->create('Article', array(
    'url' => array('controller' => 'article', 'action' => 'create',
        'admin' => true, 'category' => $categoryId,
    ),
    'type' => 'post',
    'class' => 'form-search form-horizontal',
));?>
    <div class="container-fluid">
        <?php echo $this->element('admin/article/breadcrumb');?>
        <div class="row-fluid page-header">
            <div class="span6">
                <h4>新增文章</h4>
            </div>
            <div class="span6">
                <div class="pull-right">
                    <a class="btn" href="<?php echo $this->Html->url(array(
                        'controller' => 'article', 'action' => 'index', 'admin' => true,
                        'category' => $categoryId,
                    ));?>">返回列表</a>
                    <button class="btn btn-success" type="submit">保存文章</button>
                </div>
            </div>
        </div>
        <?php echo $this->element('admin/article/form')?>
    </div>
<?php echo $this->Form->end();?>
<?php $this->end();?>