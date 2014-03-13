<?php if (isset($structure)):?>
<ul class="dropdown-menu main-menu" data-spy="affix" data-offset-top="0">
    <?php foreach ($structure['subs'] as $item):?>
    <li <?php if (isset($item['subs'])):?>class="dropdown-submenu"<?php endif;?>>
        <a href="<?php echo $this->Html->url(
            array('controller' => 'article',
                'action' => 'index',
                'admin' => true,
                'category'=> $item['id'],
            ))?>"><?php echo h($item['name'])?></a>
        <?php if (isset($item['subs'])):?>
        <ul class="dropdown-menu">
            <?php foreach ($item['subs'] as $subItem):?>
            <li <?php if (isset($subItem['subs'])):?>class="dropdown-submenu"<?php endif;?>>
                <a href="<?php echo $this->Html->url(
                    array('controller' => 'article',
                        'action' => 'index',
                        'admin' => true,
                        'category'=> $subItem['id'],
                ))?>"><?php echo h($subItem['name'])?></a>
                <?php if (isset($subItem['subs'])):?>
                    <ul class="dropdown-menu">
                        <?php foreach ($subItem['subs'] as $leafItem):?>
                        <li <?php if (isset($leafItem['subs'])):?>class="dropdown-submenu"<?php endif;?>>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'article',
                                    'action' => 'index',
                                    'admin' => true,
                                    'category'=> $leafItem['id'],
                                ))?>"><?php echo h($leafItem['name'])?></a>
                            <?php if(isset($leafItem['subs'])):?>
                                <ul class="dropdown-menu">
                                <?php foreach ($leafItem['subs'] as $childItem):?>
                                    <li>
                                        <a href="<?php echo $this->Html->url(
                                            array('controller' => 'article',
                                                  'action' => 'index',
                                                  'admin' => true,
                                                  'category'=> $childItem['id'],
                                            ))?>"><?php echo h($childItem['name'])?></a>
                                    </li>
                                <?php endforeach;?>
                                </ul>
                            <?php endif;?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif?>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif?>
    </li>
    <?php endforeach;?>
</ul>
<?php endif;?>