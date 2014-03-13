<div class="pagination pagination-right">
    <ul>
        <?php echo $this->Paginator->first(
            '最前页',
            array(
                'tag' => 'li',
            )
        );?>
        <?php if ($this->Paginator->hasPrev()):?>
        <?php echo $this->Paginator->prev(
            '上一页',
            array(
                'tag' => 'li',
            )
        );?>
        <?php endif;?>
        <?php echo $this->Paginator->numbers(
            array(
                'separator'    => false,
                'tag'          => 'li',
                'currentTag'   => 'a',
                'currentClass' => 'active',
            )
        );?>
        <?php if ($this->Paginator->hasNext()):?>
        <?php echo $this->Paginator->next(
            '下一页',
            array(
                'tag' => 'li',
            )
        );?>
        <?php endif;?>
        <?php echo $this->Paginator->last(
            '最后页',
            array(
                'tag' => 'li',
            )
        );?>
        <li>
            <span>
            <?php
            echo $this->Paginator->counter(array(
                'format' => '总共有 {:count} 条记录',
            ));
            ?>
            </span>
        </li>
    </ul>
</div>