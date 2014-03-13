<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 bs-docs-sidebar dropdown clearfix">
                <?php echo $this->element('admin/article/menu');?>
            </div>
            <div class="span10">
                <?php echo $this->fetch('article_right');?>
            </div>
        </div>
    </div>
</section>