<?php echo $this->Html->docType('html5');?>
<html>
<head>
    <?php echo $this->Html->charset();?>
    <title><?php echo $title_for_layout;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php 
        echo $this->Html->meta('icon');
        echo $this->Html->meta(array('name' => 'viewport','content' => 'width=device-width, initial-scale=1.0'));
        echo $this->Html->css('/bs/css/bootstrap.min.css');
        echo $this->Html->css('/bs/css/bootstrap-responsive.min.css');
        echo $this->Html->css('other.css');
        echo $this->Html->script('jquery/jquery-1.8.3.min.js');
        echo $this->Html->script('/bs/js/bootstrap.min.js');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <script type="text/javascript">
    $(function(){
        // prevent default click event;
        $('a').click(function(e){
            if ($(this).attr('href') == '#') {
                e.preventDefault();
            }
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });
    </script>
</head>
<body id="top" class="other-preview" data-spy="scroll" data-target=".other-subnav" data-offset="80">
    <div class="navbar navbar-fixed-top">
        <?php echo $this->element('bootstrap_header')?>
    </div>
    <div class="container">
        <?php echo $this->fetch('content');?>
    </div>
    <div class="navbar navbar-fixed-bottom">
        <?php echo $this->element('bootstrap_footer')?>
    </div>
</body>
</html>