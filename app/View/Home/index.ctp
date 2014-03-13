<div class="container">
    <div class="row-fluid">
        <div class="span7">
            <div id="myCarousel" class="carousel slide padding-top20 padding-left20">
                <ol class="carousel-indicators">
                    <?php foreach ($newsCategory[103] as $key => $item):?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key?>" <?php if ($key == 0):?>class="active"<?php endif;?>></li>
                    <?php endforeach;?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($newsCategory[103] as $key => $item):?>
                    <div class="item <?php if ($key == 0):?>active<?php endif;?>">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>">
                        <?php if ($item['Article']['image']):?>
                        <img src="<?php echo $item['Article']['image']?>" alt="<?php echo h($item['Article']['title']);?>">
                        <?php else:?>
                        <img src="/img/front/hdcj2014.jpg" alt="<?php echo h($item['Article']['title']);?>">
                        <?php endif;?>
                        </a>
                        <div class="carousel-caption">
                            <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view',
                            $item['Article']['id']))?>"><h4><?php echo h($item['Article']['title']);?></h4></a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>


        </div>
        <div class="span5">
            <div class="row-fluid">
                <h4 class="span10 font-red padding10">
                    国家质量要闻
                </h4>
                <?php foreach ($newsCategory[101] as $item):?>
                    <div class="span10">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']));?>">
                            <?php echo h($item['Article']['title']);?></a>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="row-fluid">
                <h4 class="span10 font-red padding10">
                    地方质量要闻
                </h4>
                <?php foreach ($newsCategory[102] as $item):?>
                    <div class="span10">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']));?>">
                            <?php echo h($item['Article']['title']);?></a>
                    </div>
                <?php endforeach;?>
            </div>

        </div>
    </div>
    <div class="row-fluid">
        <div class="span10">
            <?php foreach($articleCategory as $key => $value):?>
            <h3 class="font-red background padding10">
                <?php echo h($allCateogry[$key]);?>
            </h3>
            <ul class="nav nav-tabs">
                <?php foreach($value as $itemKey => $item):?>
                <li <?php if ($itemKey == 0):?>class="active"<?php endif;?>><a href="#tab<?php echo $item['id']?>" data-toggle="tab"><?php echo h($allCateogry[$item['id']]);?></a></li>
                <?php endforeach;?>
            </ul>
            <div class="tab-content">
                <?php foreach($value as $itemKey => $item):?>
                <div class="row-fluid tab-pane <?php if ($itemKey == 0):?>active<?php endif;?>" id="tab<?php echo $item['id']?>">
                    <?php foreach ($item['data'] as $article):?>
                        <div class="span5" style="margin-left: 30px">
                            <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $article['Article']['id']))?>">
                                <?php echo h($article['Article']['title']);?></a>
                            <?php if ($article['Article']['category_id'] == 401):?>
                            <span class="label label-info"><?php echo h($this->Item->getFormatPrice($article['Article']['price']))?></span>
                            <?php endif;?>
                        </div>
                    <?php endforeach;?>
                    <div class="span10"><a class="pull-right" href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => $item['id']))?>">更多...</a></div>
                </div>
                <?php endforeach;?>
            </div>
            <?php endforeach;?>
        </div>
        <div class="span2">
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>
            <div>
                <h4>查询模块</h4>
                <p><input class="btn btn-large btn-primary" type="submit" value="检索"></p>
            </div>

        </div>
    </div>
</div>