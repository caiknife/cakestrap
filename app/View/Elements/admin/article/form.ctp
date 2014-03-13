<div class="row-fluid">
    <div class="span12">
        <?php echo $this->Form->hidden('id');?>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="ArticleTitle">文章标题</label>
                <div class="controls">
                    <?php echo $this->Form->text('title', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入文章标题',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php if ($categoryId == 103):?>
            <div class="control-group">
                <label class="control-label" for="ArticleImage">图片路径</label>
                <div class="controls">
                    <?php echo $this->Form->text('image', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入图片路径',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php endif;?>
            <?php if ($categoryId == 401):?>
            <div class="control-group">
                <label class="control-label" for="ArticlePrice">书籍价格</label>
                <div class="controls">
                    <?php echo $this->Form->text('price', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入书籍价格',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php endif;?>
            <div class="control-group">
                <div class="span6">
                    <label class="control-label" for="ArticlePublicDate">发布日期</label>
                    <div class="controls">
                        <?php echo $this->Form->text('public_date', array(
                            'placeholder' => '请输入发布日期',
                            'required' => true,
                        ));?>
                    </div>
                </div>
                <div class="span6">
                    <label class="control-label" for="ArticleIsPublic">是否发布</label>
                    <div class="controls">
                        <?php echo $this->Form->checkbox('is_public', array(
                            'placeholder' => '是否发布',
                        ));?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="ArticleContent">文章内容</label>
                <div class="controls">
                    <?php echo $this->Form->textarea('content', array(
                        'class' => 'input-block-level',
                        'placeholder' => '请输入文章内容',
                        'required' => true,
                    ));?>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<?php echo $this->Html->css('ui-lightness/jquery-ui-1.9.2.custom.min.css', 'stylesheet', array('media'=>'screen', 'inline'=>false));?>
<?php echo $this->Html->script('jquery/jquery-ui-1.9.2.custom.min.js')?>
<?php echo $this->Html->script('jquery/datepicker-zh-CN.js')?>

<?php echo $this->Html->css('/kindeditor/themes/default/default.css', 'stylesheet', array('media'=>'screen', 'inline'=>false));?>
<?php echo $this->Html->script('/kindeditor/kindeditor-all-min.js')?>
<?php echo $this->Html->script('/kindeditor/lang/zh_CN.js')?>
<?php echo $this->Html->script('admin/article/article')?>

