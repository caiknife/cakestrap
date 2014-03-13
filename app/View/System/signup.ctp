<style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
    }
    /* Main marketing message and sign up button */
    .jumbotron {
        margin: 60px 0;
        text-align: center;
    }
    .jumbotron h1 {
        font-size: 60px;
        line-height: 1;
    }
</style>
<div class="container-fluid">
    <?php echo $this->Form->create('Member', array(
        'type' => 'post',
        'class' => 'form-signin',
    ));?>
    <?php echo $this->Session->flash();?>
    <?php echo $this->Form->text('username', array('class' => 'input-block-level',
        'placeholder' => '请输入登录名', 'required' => true, 'field' => 'username'))?>
    <?php echo $this->Form->password('password', array('class' => 'input-block-level',
        'placeholder' => '请输入密码', 'required' => true, 'pattern' => '.{6,18}', 'title' => '长度6到18位'))?>
    <?php echo $this->Form->password('password_confirm', array('class' => 'input-block-level',
        'placeholder' => '请输入确认密码', 'required' => true, 'pattern' => '.{6,18}', 'title' => '长度6到18位'))?>
    <?php echo $this->Form->email('email', array('class' => 'input-block-level',
        'placeholder' => '请输入电子邮箱', 'required' => true, 'field' => 'email'))?>
    <?php echo $this->Form->submit('注册', array('class' => 'btn btn-large btn-primary', 'type' => 'submit'))?>
    <?php echo $this->Form->end();?>
</div>
<script type="text/javascript">
$(function(){

var formSubmit = true;

$('#MemberSignupForm').on('submit', function(){
    if ($('#MemberPassword').val() != $('#MemberPasswordConfirm').val()) {
        noty({
            text: '两次输入密码不匹配，请重新确认！',
            type: 'error',
            layout: 'topCenter'
        });
        return false;
    }

    if (!formSubmit) {
        return false;
    }

    return true;
});

$('#MemberUsername, #MemberEmail').on('blur', function(){
    var postData = {
        field: $(this).attr('field'),
        value: $(this).val()
    };

    $.ajax({
        async: false,
        type: 'POST',
        data: postData,
        dataType: 'json',
        url: '/system/check'
    })
    .done(function(data){
        if (data.result == 'error') {
            formSubmit = false;
        }
        noty({
            text: data.message,
            type: data.result,
            layout: 'topCenter'
        });
    });
});

});
</script>
