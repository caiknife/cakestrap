<?php
Configure::write('Admin.structure', array(
    'subs' => array(
        array(
            'id' => '1',
            'name' => '质量要闻',
            'subs' => array(
                array(
                    'id' => '101',
                    'name' => '国家质量要闻',
                ),
                array(
                    'id' => '102',
                    'name' => '地方质量要闻',
                ),
                array(
                    'id' => '103',
                    'name' => '图片新闻',
                ),
            ),
        ),
        array(
            'id' => '2',
            'name' => '企业首席质量官',
            'subs' => array(
                array(
                    'id' => '201',
                    'name' => '国家政策文件',
                ),
                array(
                    'id' => '202',
                    'name' => '地方政策文件',
                ),
                array(
                    'id' => '203',
                    'name' => '相关通知公告',
                ),
                array(
                    'id' => '204',
                    'name' => '培训班信息',
                ),
            ),
        ),
        array(
            'id' => '3',
            'name' => '质量工程师',
            'subs' => array(
                array(
                    'id' => '301',
                    'name' => '政策文件',
                ),
                array(
                    'id' => '302',
                    'name' => '通知公告',
                ),
                array(
                    'id' => '303',
                    'name' => '报名通知',
                ),
                array(
                    'id' => '304',
                    'name' => '大纲教材',
                ),
                array(
                    'id' => '305',
                    'name' => '常见问题',
                ),
            ),
        ),
        array(
            'id' => '4',
            'name' => '质量书苑',
            'subs' => array(
                array(
                    'id' => '401',
                    'name' => '书籍信息',
                ),
            ),
        ),
        array(
            'id' => '5',
            'name' => '质量人才招聘',
            'subs' => array(
                array(
                    'id' => '501',
                    'name' => '招聘信息',
                ),
            ),
        ),
    ),
));