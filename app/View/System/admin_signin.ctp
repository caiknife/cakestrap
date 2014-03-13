<div class="container-fluid">
    <div class="jumbotron">
        <h1>中国质量人才网后台管理系统</h1>
    </div>
    <?php echo $this->Form->create('Account', array(
        //'url' => $this->request->url,
        'type' => 'post',
        'class' => 'form-signin',
    ));?>
        <?php echo $this->Session->flash();?>
        <?php echo $this->Form->text('username', array('class' => 'input-block-level', 'placeholder' => '用户名', 'required' => true))?>
        <?php echo $this->Form->password('password', array('class' => 'input-block-level', 'placeholder' => '密码', 'required' => true))?>
        <?php echo $this->Form->submit('登录', array('class' => 'btn btn-large btn-primary', 'type' => 'submit'))?>
    <?php echo $this->Form->end();?>

</div>
