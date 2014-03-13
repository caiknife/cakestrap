<?php $this->extend('admin_template');?>

<?php $this->start('article_right');?>
<div class="container-fluid">
    <div class="row-fluid page-header">
        <div class="span6">
            <h4>搜索文章</h4>
        </div>
        <div class="span6">
            <?php echo $this->Form->create('Article', array(
                'url'   => array(
                    'controller' => 'article',
                    'action'     => 'search',
                    'admin'      => true,
                ),
                'type'  => 'get',
                'class' => 'navbar-search form-search pull-right',
            ));?>

            <div class="input-append">
                <?php echo $this->Form->text('keyword', array(
                    'class' => 'search-query', 'placeholder' => '请输入标题关键字'));?>
                <button class="btn btn-info" type="submit">
                    <i class="icon-white icon-search"></i>
                </button>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
    <?php if (isset($articles)):?>
    <div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th class="span1">ID</th>
                <th class="span2">类目</th>
                <th>文章标题</th>
                <th class="span2">发布日期</th>
                <th class="span2">是否公开</th>
                <th class="span3">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($articles as $item):?>
                <tr>
                    <td><?php echo h($item['Article']['id'])?></td>
                    <td><?php echo h($this->Item->getCategoryName($item['Article']['category_id'], $structure))?></td>
                    <td><?php echo h($item['Article']['title'])?></td>
                    <td><?php echo h($this->Date->format($item['Article']['public_date']))?></td>
                    <td><?php echo $this->Item->isPublic($item['Article']['is_public'])?></td>
                    <td>
                        <a href="<?php echo $this->Html->url(array(
                            'controller' => 'article', 'action' => 'edit',
                            'admin' => true, $item['Article']['id'], 'category' => $item['Article']['category_id'],
                        ))?>" class="btn btn-info btn-mini">编辑</a>
                        <a href="<?php echo $this->Html->url(array(
                            'controller' => 'article', 'action' => 'delete',
                            'admin' => true, $item['Article']['id'], 'category' => $item['Article']['category_id'],
                        ))?>" class="btn btn-warning btn-mini delete">删除</a>
                        <?php if ($item['Article']['is_public']):?>
                            <a href="<?php echo $this->Html->url(array(
                                'controller' => 'article', 'action' => 'status',
                                'admin' => true, 'status' => 'close', 'category' => $item['Article']['category_id'],
                                $item['Article']['id'],
                            ))?>" class="btn btn-danger btn-mini status">下线</a>
                        <?php else:?>
                            <a href="<?php echo $this->Html->url(array(
                                'controller' => 'article', 'action' => 'status',
                                'admin' => true, 'status' => 'open', 'category' => $item['Article']['category_id'],
                                $item['Article']['id'],
                            ))?>"class="btn btn-success btn-mini status">发布</a>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('admin/pagination');?>
    <?php endif;?>
</div>
<script type="text/javascript">
    $(function(){

        $('a.delete').click(function(e){
            var $this = $(this);
            if (confirm('确定删除该条记录？')) {
                $.get($this.attr('href'), function(data){
                    window.location.reload();
                }, 'json');
            }
            return false;
        });

        $('a.status').click(function(e){
            var $this = $(this);
            $.get($this.attr('href'), function(data){
                window.location.reload();
            }, 'json');
            return false;
        });

    });
</script>
<?php $this->end();?>