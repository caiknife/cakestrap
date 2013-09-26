<div class="pagination pagination-right">
    <ul>
        <?php echo $this->Paginator->first(
            '最前页',
            array(
                'tag'=>'li', 
            )
        );?>
        <?php echo $this->Paginator->prev(
            '上一页',
            array(
                'tag'=>'li', 
            ),
            '上一页没有了',
            array(
                'tag'=>'li', 
                'disabledTag'=>'a',
                'class'=>'disabled',
            )
        );?>
        <?php echo $this->Paginator->numbers(
            array(
                'separator'=>false, 
                'tag'=>'li', 
                'currentTag'=>'a', 
                'currentClass'=>'active',
            )
        );?>
        <?php echo $this->Paginator->next(
            '下一页',
            array(
                'tag'=>'li', 
            ),
            '下一页没有了',
            array(
                'tag'=>'li', 
                'disabledTag'=>'a',
                'class'=>'disabled',
            )
        );?>
        <?php echo $this->Paginator->last(
            '最后页',
            array(
                'tag'=>'li', 
            )
        );?>
        <li>
            <span>
            <?php
            echo $this->Paginator->counter(array(
                'format' => '页数：当前第 {:page} 页，总共 {:pages} 页 | 记录数：当前展示第 {:start} - {:end} 条记录，总共有 {:count} 条记录',
            ));
            ?>
            </span>
        </li>
    </ul>
</div>