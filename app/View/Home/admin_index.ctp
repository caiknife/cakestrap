<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12 well">
                <h2><?php echo ADMIN_SITE_TITLE;?></h2>
                <p></p>
                <p>请选择下方菜单功能</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4 well">
                <h3>文章管理</h3>
                <p>全站新闻、文章内容的发布、编辑、删除等等。</p>
                <p>
                    <a href="<?php echo $this->Html->url(array('controller'=>'article',
                        'action'=>'index', 'admin' => true)) ?>" class="btn btn-info">前往</a>
                </p>
            </div>
            <div class="span4 well">
                <h3>会员管理</h3>
                <p>网站会员管理。</p>
                <p>
                    <a href="<?php echo $this->Html->url(array('controller'=>'member',
                       'action'=>'index', 'admin' => true)) ?>" class="btn btn-info">前往</a>
                </p>
            </div>
            <div class="span4 well">
                <h3>信息功能</h3>
                <p>上传各种内容。</p>
                <p>
                    <a href="<?php echo $this->Html->url(array('controller'=>'content',
                       'action'=>'index', 'admin' => true)) ?>" class="btn btn-info">前往</a>
                </p>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4 well">
                <h3>其他功能</h3>
                <p>更多功能，等待上线。</p>
                <p>
                    <a href="#" class="btn btn-inverse disabled">请等待</a>
                </p>
            </div>
        </div>
    </div>
</section>

