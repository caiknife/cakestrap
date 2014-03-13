<div class="container">
    <h3><?php echo h($article['Article']['title']);?></h3>
    <p>
        <span class="alert alert-info">发布日期：<?php echo h($this->Date->format($article['Article']['public_date']));?></span>
        <span class="alert alert-info">所属分类：<?php echo h($category);?></span>
        <?php if ($article['Article']['category_id'] == 401):?>
        <span class="alert alert-info">书籍价格：<?php echo h($this->Item->getFormatPrice($article['Article']['price']));?></span>
        <?php endif;?>
        <span class="pull-right">
            <a class="btn btn-info" href="<?php echo $this->Html->url(array(
                'controller' => 'article', 'action' => 'lists', 'category' => $article['Article']['category_id']));?>">返回列表</a>
        </span>
    </p>
    <hr/>
    <p><?php echo $article['Article']['content'];?></p>
</div>