<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0025)http://www.mofcom.gov.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>中国质量人才网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta name="keywords" content="中国质量人才网">
    <meta name="Description" content="中国质量人才网">
    <link rel="stylesheet" href="/img/front/index2013_w970_b.css" type="text/css">
    <link rel="stylesheet" href="/img/front/index2013z.css" type="text/css">
    <!--[if IE]>
    <script src="/js/html5.js"></script>
    <![endif]-->
    <style>
        .picTurnPlayer .bg{height:30px;z-index:1;width:100%;left:0;top:280px;filter:alpha(opacity=60);background:#000;opacity:0.6}
        .picTurnPlayer .title{color:#fff;line-height:32px;height:30px;overflow:hidden;left:8px;top:280px;font-size:14px;z-index:6;zoom:1;width:380px;}
        .picTurnPlayer .btnL,.picTurnPlayer .btnR{width:19px;overflow:hidden;text-decoration:none;zoom:1;margin-top:9px;display:inline-block;margin-left:5px;cursor:pointer;height:27px}
        .picTurnPlayer .btnL{background:url(/images/img2013/btnL_01.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/img2013/btnL_01.png',sizingMethod='crop');zoom:1;position:absolute;left:5px;top:-150px;display:none;}
        .picTurnPlayer .btnR{background:url(/images/img2013/btnR_01.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/img2013/btnR_01.png',sizingMethod='crop');zoom:1;position:absolute;right:5px;top:-150px;display:none;}
        .picTurnPlayer .nav p.navHover{position:absolute;right:0;top:0;margin:5px 5px 0 5px;}
        .picTurnPlayer .nav i{width:6px;overflow:hidden;text-decoration:none;zoom:1;margin-top:9px;display:inline-block;margin-left:5px;cursor:pointer;height:7px;background:url(/images/img2013/navHoverBg_01.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/img2013/navHoverBg_01.png',sizingMethod='crop');}
        .picTurnPlayer .nav i.cur,.picTurnPlayer .nav i:hover{background:url(/images/img2013/navHoverBg_01.png) no-repeat 0 -7px;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/img2013/navHoverBg_02.png',sizingMethod='crop');}
    </style>
</head>
<body class="page_index">
<div class="bodyWrapper">
<!--页面头部-->
<header id="header">
    <aside class="topNav">
        <div class="wrapper clearfix">
            <script language="JavaScript">
                var dayarray=new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六")
                var montharray=new Array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月")
                function getthedate(){
                    var mydate=new Date()
                    var year=mydate.getYear()
                    if (year < 1000)
                        year+=1900
                    var day=mydate.getDay()
                    var month=mydate.getMonth()
                    var daym=mydate.getDate()
                    if (daym<10)
                        daym=""+daym
                    var hours=mydate.getHours()
                    var minutes=mydate.getMinutes()
                    var seconds=mydate.getSeconds()
                    var dn="AM"
                    if (hours>=12)
                        dn="PM"
                    if (hours>12){
                        hours=hours-12
                    }
                    if (hours==0)
                        hours=12
                    if (minutes<=9)
                        minutes="0"+minutes
                    if (seconds<=9)
                        seconds="0"+seconds
//change font size here
                    var cdate=year+"年"+montharray[month]+daym+"日 "+"　"+dayarray[day]
                    document.getElementById("time").innerHTML = cdate;
                    setTimeout("getthedate()", 1000);
                }
                window.onload = function() {
                    getthedate();
                }
            </script>
            <script>
                function equalsIgnoreCase(str1, str2)
                {
                    if(str1.toUpperCase() == str2.toUpperCase())
                    {
                        return true;
                    }
                    return false;
                }

                function search_new() {
                    var search = document.form1.value.value;
                    if(equalsIgnoreCase(search,"薄熙来")||equalsIgnoreCase(search,"薄部长")||equalsIgnoreCase(search,"薄书记")||equalsIgnoreCase(search,"BOXILAI")
                        ||equalsIgnoreCase(search,"BOXILAI")||equalsIgnoreCase(search,"Bo Xilai")||equalsIgnoreCase(search,"Бо Силай")
                        ||equalsIgnoreCase(search,"Бо Силая")){
                        document.form1.value.value = "";
                        document.form1.value.focus();
                        return false;
                    }
                    return true;
                }
            </script>
            <span id="time" class="fl">2014年2月7日 　星期五</span>
  <span class="fr topMailLogin">
    <a href="http://mail.mofcom.gov.cn/" target="_blank">邮箱登录</a>
  </span>
        </div>
    </aside>
    <div class="topBanner">
        <div class="wrapper">
            <form name="form1" method="post" action="http://search.mofcom.gov.cn/swb/searchList.jsp" onsubmit="return search_new()" target="_blank">
                <input type="hidden" value="0" id="flag" name="flag">
                <article class="swbSearch fr">
                    <div class="searchCon clearfix">
                        <div class="bg fl clearfix">
                            <div class="search-l"></div>
                            <div class="search-c">
                                <input class="ssTxt" autocomplete="off" id="search" name="value" value="" type="text">
                            </div>
                            <div class="search-r">
                                <!--<a href="#" class="btnSs" onclick="return search_new()"><img src="./img/front/btn_sreach_58x30.png" /></a>-->
                                <input type="image" src="/img/front/btn_sreach_58x30.png">
                            </div>
                        </div>
                    </div>
                </article>
            </form>
        </div>
    </div>
</header>
<!--页面主体-->
<section id="container">
<!--通栏-->
<section class="column mt10p newsPic">
    <div id="p1_picTurnPlayer" class="picTurnPlayer">
        <div class="bg"></div>

        <a href="http://gaohucheng.mofcom.gov.cn/article/activities/201401/20140100474288.shtml" class="pic" style="display: none;">
            <img src="/img/front/ghc20140126.jpg" alt="高虎城调研北京节日市场供应情况" width="487" height="310">
        </a>
        <a href="http://www.mofcom.gov.cn/article/ae/ai/201401/20140100470848.shtml" class="pic dsn" style="display: none;">
            <img src="/img/front/jzw1401221.jpg" alt="全国现代服务业综合试点暨商贸物流工作现场会召开" width="487" height="310">
        </a>
        <a href="http://www.scio.gov.cn/xwfbh/xwbfbh/xczb/index.htm" class="pic dsn" style="display: none;">
            <img src="/img/front/faq140123.jpg" alt="房爱卿出席国新办举行的春节消费市场运行发布会" width="487" height="310">
        </a>
        <a href="http://www.mofcom.gov.cn/article/zt_swbqzlx/" class="pic dsn" style="display: none;">
            <img src="/img/front/qzlx131011.jpg" alt="党的群众路线教育实践活动" width="487" height="310">
        </a>
        <a href="" class="pic dsn" style="display: none;">
            <img src="/img/front/df140121.jpg" alt="春节前，乌鲁木齐市民排队购买中央储备肉" width="487" height="310">
        </a>
        <a href="" class="pic dsn" style="display: none;">
            <img src="/img/front/df140122.jpg" alt="广西农产品在上海特色商品迎春博览会上受到欢迎" width="487" height="310">
        </a>
        <a href="http://jgdw.mofcom.gov.cn/article/zt_syz/" class="pic dsn" style="display: inline;">
            <img src="/img/front/jgdw2014.jpg" alt="商务部职工迎春摄影展" width="487" height="310">
        </a>
        <a href="" class="pic dsn" style="display: none;">
            <img src="/img/front/hdcj2014.jpg" alt="欢度春节" width="487" height="310">
        </a>

        <a href="http://gaohucheng.mofcom.gov.cn/article/activities/201401/20140100474288.shtml" class="title" style="display: none;">1月26日，高虎城调研北京节日市场供应情况</a>

        <a href="http://www.mofcom.gov.cn/article/ae/ai/201401/20140100470848.shtml" class="title dsn" style="display: none;">全国现代服务业综合试点暨商贸物流工作现场会召开</a>

        <a href="http://www.scio.gov.cn/xwfbh/xwbfbh/xczb/index.htm" class="title dsn" style="display: none;">房爱卿出席国新办举行的春节消费市场运行发布会</a>

        <a href="http://www.mofcom.gov.cn/article/zt_swbqzlx/" class="title dsn" style="display: none;">党的群众路线教育实践活动</a>

        <a href="" class="title dsn" style="display: none;">春节前，乌鲁木齐市民排队购买中央储备肉</a>

        <a href="" class="title dsn" style="display: none;">广西农产品在上海特色商品迎春博览会上受到欢迎</a>

        <a href="http://jgdw.mofcom.gov.cn/article/zt_syz/" class="title dsn" style="display: inline;">商务部职工迎春摄影展</a>

        <a href="" class="title dsn" style="display: none;">欢度春节</a>

        <nav class="nav">
            <div class="navbgL">
                <div class="navbgR"> <span class="btnL" style="display: block;"></span> <span class="btnR" style="display: block;"></span> </div>
                <p class="navHover"> <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                    <i class="cur"></i>
                    <i></i>
                </p>
            </div>
        </nav>
    </div>
    <div class="text">
        <div id="newsTitle">
            <h4>新闻发布</h4>
            <a href="#" class="more">更多&gt;&gt;</a> </div>
        <nav id="newsList">
            <ul class="u05 mt5p">
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题1</a>
                </li>
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题</a>
                </li>
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题</a>
                </li>
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题</a>
                </li>
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题</a>
                </li>
                <li>
                    <a title="新闻1" target="_blank" href="#">新闻标题</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!--通栏-->
<section class="column column_lr_04 mt10p">
<section class="section_l">
<article id="qysxzlg" class="md03">
    <header class="md-hd">
        <h2>信息公开</h2>
    </header>
    <div class="md-bd">
        <div id="r1_tabColumn" class="tabTurnPlay">
            <nav class="navTitle">
                <ul class="nav">
                    <li class="cur"> <a href="#">国家政策文件</a> </li>
                    <li> <a href="#">地方政策文件</a> </li>
                    <li> <a href="#">相关通知公告</a> </li>
                    <li> <a href="#">培训班信息</a> </li>
                </ul>
            </nav>
            <div rel="con1" class="con">
                <ul>
                    <?php foreach ($category20101 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20101));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con2" class="con dsn">
                <ul>
                    <?php foreach ($category20102 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20102));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con3" class="con dsn">
                <ul>
                    <?php foreach ($category20103 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20103));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con4" class="con dsn">
                <ul>
                    <?php foreach ($category206 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 206));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
<article id="zlgcs" class="md03">
    <header class="md-hd">
        <h2>质量工程师</h2>
    </header>
    <div class="md-bd">
        <div id="r2_tabColumn" class="tabTurnPlay">
            <nav class="navTitle">
                <ul class="nav">
                    <li class="cur"><a href="#">政策文件</a> </li>
                    <li> <a href="#">通知公告</a> </li>
                    <li> <a href="#">报名通知</a> </li>
                    <li> <a href="#">大纲教材</a> </li>
                    <li> <a href="#">常见问题</a> </li>
                </ul>
            </nav>
            <div rel="con1" class="con">
                <ul>
                    <?php foreach ($category30101 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 30101));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con2" class="con dsn">
                <ul>
                    <?php foreach ($category30102 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 30102));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con3" class="con dsn">
                <ul>
                    <?php foreach ($category30103 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 30103));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con4" class="con dsn">
                <ul>
                    <?php foreach ($category304 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 304));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con5" class="con dsn">
                <ul>
                    <?php foreach ($category303 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 303));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
<article id="zlsy" class="md03">
    <header class="md-hd">
        <h2>质量书苑</h2>
    </header>
    <div class="md-bd">
        <div id="r3_tabColumn" class="tabTurnPlay">
            <nav class="navTitle">
                <ul class="nav">
                    <li class="cur"> <a href="#">国家政策文件</a> </li>
                    <li> <a href="#">地方政策文件</a> </li>
                    <li> <a href="#">相关通知公告</a> </li>
                    <li> <a href="#">培训班信息</a> </li>
                </ul>
            </nav>
            <div rel="con1" class="con">
                <ul>
                    <?php foreach ($category20101 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20101));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con2" class="con dsn">
                <ul>
                    <?php foreach ($category20102 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20102));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con3" class="con dsn">
                <ul>
                    <?php foreach ($category20103 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 20103));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
            <div rel="con4" class="con dsn">
                <ul>
                    <?php foreach ($category206 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 206));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
<article id="zlrczp" class="md03">
    <header class="md-hd">
        <h2>质量人才招聘</h2>
    </header>
    <div class="md-bd">
        <div id="r4_tabColumn" class="tabTurnPlay">
            <div rel="con1" class="con">
                <ul>
                    <?php foreach ($category8 as $item):?>
                        <li>
                            <a title="<?php echo h($item['Article']['title'])?>" target="_blank"
                               href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'view', $item['Article']['id']))?>"><?php echo h($item['Article']['title'])?></a>
                            <span><?php echo h($item['Article']['public_date'])?></span>
                        </li>
                    <?php endforeach;?>
                    <li class="more01">
                        <a href="<?php echo $this->Html->url(array('controller' => 'article', 'action' => 'lists', 'category' => 8));?>">更多&gt;&gt;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
</section>
<section class="section_r">
    <article class="advlist"><img src="/img/front/img_82x63.jpg" class="pic">
        <ul style="padding-top:10px;">
            <li class="up"><a href="http://www.mofcom.gov.cn/article/ae/ah/">例行新闻发布会</a></li>
            <li><a href="http://www.mofcom.gov.cn/mofcom/weibo.shtml">商务微新闻微博</a></li>
        </ul>
    </article>
    <div class="Rimg mt10p">
        <div class="pic"><a href="http://www.mofcom.gov.cn/article/zt_swbqzlx/" target="_blank"><img src="/img/front/qzlx.jpg"></a></div>
    </div>
    <div class="Rimg mt10p">
        <div class="pic"><a href="http://jcj.mofcom.gov.cn/" target="_blank"><img src="/img/front/Rlzzc.png"></a></div>
    </div>
    <article id="gnscjc" class="md02 mra">
        <h2><a href="http://video.mofcom.gov.cn/" target="_blank">商务视频</a></h2>
        <a href="http://video.mofcom.gov.cn/activities/20140123/3471.html" class="vid" target="_blank"><img src="/img/front/vc201401.png"></a>
        <p class="vid"> <a href="http://video.mofcom.gov.cn/activities/20140123/3471.html" target="_blank">2014中外投资促进机构工作会<br>在京举行</a> </p>
    </article>
    <div class="md04 mt10p">
        <h2>查询服务</h2>
        <h4 class="z_searchf"><a target="_blank" href="http://data.mofcom.gov.cn/" style="color:#7a3a00">商务数据中心</a></h4>
        <div class="z_biadata"> <a href="http://data.mofcom.gov.cn/channel/zxjj/zxjj.shtml" target="_blank">简介</a>|<a href="http://data.mofcom.gov.cn/SWSJDomestic/DomesticTrade.action" target="_blank">内贸</a>|<a href="http://data.mofcom.gov.cn/channel/trade/trade.shtml" target="_blank">外贸</a>|<a href="http://data.mofcom.gov.cn/channel/wzsj/wzsj.shtml" target="_blank">外资</a> <br>
            <a href="http://data.mofcom.gov.cn/channel/dwjjhz/dwjjhz.shtml" target="_blank">合作</a>|<a href="http://data.mofcom.gov.cn/channel/spjg/spjg.shtml" target="_blank">商品</a>|<a href="http://data.mofcom.gov.cn/channel/zhsj/zhsj.shtml" target="_blank">综合</a>|<a href="http://data.mofcom.gov.cn/channel/gbsj/gbsj.shtml" target="_blank">国别</a> </div>
        <h4 class="z_searchf"><a target="_blank" href="http://xzsx.mofcom.gov.cn/" style="color:#7a3a00">行政事项结果公开</a></h4>
        <form method="post" accept-charset="gb2312" onsubmit="doSet_xzsxjggk(this)" action="http://xzsx.mofcom.gov.cn/xzsp/search.jhtml" target="_blank">
            <div class="r_result_box clearfix">
                <input class="text_input1 fl" type="text" name="keyword" value="" onfocus="if(this.value==&#39;&#39;){this.value=&#39;&#39;;this.style.color=&#39;#333&#39;}" onblur="if(this.value==&#39;&#39;){this.value=&#39;&#39;;this.style.color=&#39;#aaa&#39;}">
                <input class="btn_s fl" type="submit" value="">
            </div>
        </form>
    </div>
</section>
</section>
</section>
<!--页面尾部-->
<footer id="footer">
    <img src="/img/front/ggfw1.png" usemap="#Map" alt="">
    <map id="Map" name="Map">
        <area shape="rect" coords="89,1,184,74" href="http://ccn.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="186,1,280,74" href="http://policy.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="282,1,374,74" href="http://tax.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="376,1,471,74" href="http://tradedoc.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="473,1,576,74" href="http://project.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="578,1,672,74" href="http://fair.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="674,1,766,74" href="http://www.fdi.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="768,1,875,74" href="http://nc.mofcom.gov.cn/" alt="" target="_blank">
        <area shape="rect" coords="877,1,969,74" href="http://training.mofcom.gov.cn/" alt="" target="_blank">
    </map>
    <nav id="footer_menu" class="topbar mt10p">
        <ul class="clearfix">
            <li><a href="http://www.gov.cn/" class="title" target="_blank">中国政府网</a>
                <!--<menu class="list">
                    <a href=""></a><a href=""></a><a href=""></a><a href=""></a>	</menu>-->
            </li>
            <li><a href="http://www.mofcom.gov.cn/xglj/guowuyuan.shtml" class="title">国务院各部委</a>
                <!--<menu class="list">
                    <a href=""></a><a href=""></a><a href=""></a><a href=""></a>	</menu>-->
            </li>
            <li><a href="http://www.mofcom.gov.cn/xglj/kaifaqu.shtml" class="title">国家级经济技术开发区</a></li>
            <li><a href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/" class="title">省市商务概览</a>
                <menu class="list">
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314795.shtml">北京</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314791.shtml">天津</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314782.shtml">河北</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200610/20061003403529.shtml">山西</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314764.shtml">辽宁</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314762.shtml">吉林</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314752.shtml">上海</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314748.shtml">江苏</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314740.shtml">浙江</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314738.shtml">安徽</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314729.shtml">福建</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200610/20061003403489.shtml">江西</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314709.shtml">山东</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200610/20061003403362.shtml">河南</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200610/20061003403419.shtml">湖北</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200610/20061003403454.shtml">湖南</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314702.shtml">广东</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596487.shtml">广西</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314809.shtml">海南</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596461.shtml">重庆</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596683.shtml">四川</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596621.shtml">贵州</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596699.shtml">云南</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314698.shtml">西藏</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596663.shtml">陕西</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596475.shtml">甘肃</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596640.shtml">青海</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200611/20061103596632.shtml">宁夏</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314671.shtml">新疆</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314651.shtml">兵团</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314772.shtml">内蒙古</a>
                    <a target="_blank" href="http://dzsws.mofcom.gov.cn/article/zt_shwgl/subjectii/200701/20070104314757.shtml">黑龙江</a>
                </menu>
            </li>
            <li><a href="http://www.mofcom.gov.cn/bd/index.shtml" class="title no">相关链接</a></li>
        </ul>
    </nav>
    <div class="bg mt5p">
        <div class="con"> 管理频道： <a href="http://manage.mofcom.gov.cn/" target="_blank">网站管理</a> 　|　 <a href="http://pis.mofcom.gov.cn/" target="_blank">项目管理</a> 　|　 <a href="http://infostat.mofcom.gov.cn/infostat/infoView.jsp" target="_blank">信息统计</a> 　|　 <a href="http://report.mofcom.gov.cn/webleadreport/reports/mofcom_pub/index.asp?defaultreport=summary" target="_blank">访问分析</a> 　|　 <a href="http://www.mofcom.gov.cn/paiming/paiming.shtml" target="_blank">访问排行</a> 　|　 <a href="http://manage.mofcom.gov.cn/shehsj/shehsj.html" target="_blank">工作人员</a> 　|　 <a href="http://www.mofcom.gov.cn/bc/" target="_blank">怀念旧站</a> 　|　 <a href="http://www.mofcom.gov.cn/sitemaps/" target="_blank">网站地图</a> </div>
    </div>
    <div class="info">
        <p> 版权所有：<a href="/img/front/中华人民共和国商务部网站.htm" target="_blank">中华人民共和国商务部</a> 京ICP备05004093号 <br>
            网站管理：<a href="http://dzsws.mofcom.gov.cn/" target="_blank">商务部电子商务和信息化司</a> <br>
            地址：中国北京东长安街2号  100731　　 <a href="http://ditu.google.cn/maps?hl=zh-CN&ie=UTF8&q=%E5%8C%97%E4%BA%AC%E4%B8%9C%E9%95%BF%E5%AE%89%E8%A1%972%E5%8F%B7+%E5%95%86%E5%8A%A1%E9%83%A8&fb=1&gl=cn&hq=%E5%95%86%E5%8A%A1%E9%83%A8&hnear=%E5%8C%97%E4%BA%AC%E4%B8%9C%E9%95%BF%E5%AE%89%E8%A1%972%E5%8F%B7&view=map&cid=17676860046811018845&iwloc=A&ved=0CBcQpQY&sa=X&ei=Ij-HS-74Mqf-ugOu5K3DAQ" target="_blank">路线图　 <img src="/img/front/btn_03.png" alt="" width="14" height="13"></a> <br>
        </p>
        <p> 技术支持：<a href="http://www.cofortune.com.cn/" target="_blank">国富通信息技术发展有限公司</a> <br>
            技术支持电话：86-10-51651200 传真：86-10-65677512 <br>
            业务咨询电话：86-10-65121919  邮箱：<a href="http://gzly.mofcom.gov.cn/website/pubmail/send_mail.jsp" target="_blank">商务部邮箱</a> <br>
        </p>
        <img src="/img/front/logo.gif" alt="" class="logo" width="132" height="34"> </div>
</footer>
</div>
<script type="text/javascript" src="/img/front/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/img/front/index2013c.js"></script>
<script>
    function getUrl(url)
    {
        window.location.href="ht"+"tp://"+url;
        return;
    }
</script>

</body></html>