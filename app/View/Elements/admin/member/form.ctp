<div class="row-fluid">
    <div class="span12">
        <?php echo $this->Form->hidden('id');?>
        <fieldset>
            <?php if ($this->request->action == 'admin_add'):?>
            <div class="control-group">
                <label class="control-label" for="MemberUsername">登录名</label>
                <div class="controls">
                    <?php echo $this->Form->text('username', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入登录名',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php else:?>
            <div class="control-group">
                <label class="control-label" for="MemberUsername">登录名</label>
                <div class="controls">
                    <?php echo $this->Form->text('username', array(
                        'class' => 'input-xxlarge disabled',
                        'placeholder' => '请输入登录名',
                        'disabled' => true,
                    ));?>
                </div>
            </div>
            <?php endif;?>
            <?php if ($this->request->action == 'admin_add'):?>
            <div class="control-group">
                <label class="control-label" for="MemberPassword">登录密码</label>
                <div class="controls">
                    <?php echo $this->Form->password('password', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入登录密码',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php else:?>
            <div class="control-group">
                <label class="control-label" for="MemberPassword">登录密码</label>
                <div class="controls">
                    <?php echo $this->Form->password('password', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '不填写此字段表示保留原密码',
                    ));?>
                </div>
            </div>
            <?php endif;?>
            <div class="control-group">
                <label class="control-label" for="MemberEmail">电子邮箱</label>
                <div class="controls">
                    <?php echo $this->Form->email('email', array(
                        'class' => 'input-xxlarge',
                        'placeholder' => '请输入电子邮箱',
                        'required' => true,
                    ));?>
                </div>
            </div>
            <?php if ($typeId == 0):?>
                <div class="control-group">
                    <label class="control-label" for="ArticleImage">会员姓名</label>
                    <div class="controls">
                        <?php echo $this->Form->text('huiyuanxingming', array(
                            'class' => 'input-xxlarge',
                            'placeholder' => '请输入会员姓名',
                            'required' => true,
                        ));?>
                    </div>
                </div>
            <?php endif;?>
            <?php if ($typeId == 1):?>
                <div class="control-group">
                    <label class="control-label" for="ArticlePrice">机构名称</label>
                    <div class="controls">
                        <?php echo $this->Form->text('jigoumingcheng', array(
                            'class' => 'input-xxlarge',
                            'placeholder' => '请输入机构名称',
                            'required' => true,
                        ));?>
                    </div>
                </div>
            <?php endif;?>
        </fieldset>
    </div>
</div>

