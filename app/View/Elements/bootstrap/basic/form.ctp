<section id="basic-form">
    <div class="page-header">
        <h1>表单</h1>
    </div>
    <h2>form</h2>
    <form>
        <fieldset>
            <legend>legend 标签</legend>
            <label>label 标签</label>
            <input type="text" placeholder="请输入...">
            <span class="help-block">这是一个 .help-block 的样式</span>
            <label class="checkbox">
                <input type="checkbox"> 点击选中
            </label>
            <button type="submit" class="btn">提交</button>
        </fieldset>
    </form>
    <h2>form.form-search</h2>
    <form class="form-search">
        <fieldset>
            <input class="search-query" type="text" placeholder="请输入...">
            <button type="submit" class="btn">提交</button>
        </fieldset>
    </form>
    <h2>form.form-inline</h2>
    <form class="form-inline">
        <input type="text" class="input-small" placeholder="邮箱">
        <input type="password" class="input-small" placeholder="密码">
        <input type="number" class="input-small" placeholder="数字">
        <label class="checkbox">
            <input type="checkbox"> 记住我
        </label>
        <button type="submit" class="btn">登录</button>
    </form>
    <h2>form.form-horizontal</h2>
    <form class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="inputEmail">邮箱</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="邮箱">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">密码</label>
                <div class="controls">
            <input type="password" id="inputPassword" placeholder="密码">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox"> 记住我
                </label>
                <button type="submit" class="btn">登录</button>
            </div>
        </div>
    </form>
    <h2>表单控件</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>标签</td>
                <td>样式</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <code>input</code> <br>
                    有些标签只能在Chrome下有效，FF中无效。
                </td>
                <td>
                    <input type="text" class="input-block-level" placeholder="text">
                    <input type="password" class="input-block-level" placeholder="password">
                    <input type="date" class="input-block-level" placeholder="date">
                    <input type="datetime-local" class="input-block-level" placeholder="datetime-local">
                    <input type="month" class="input-block-level" placeholder="month">
                    <input type="week" class="input-block-level" placeholder="week">
                    <input type="number" class="input-block-level" placeholder="number">
                    <input type="url" class="input-block-level" placeholder="url">
                    <input type="email" class="input-block-level" placeholder="email">
                    <input type="search" class="input-block-level" placeholder="search">
                    <input type="tel" class="input-block-level" placeholder="tel">
                    <input type="color" class="input-block-level" placeholder="color">
                </td>
            </tr>
            <tr>
                <td><code>texarea</code></td>
                <td>
                    <textarea rows="5" class="input-block-level"></textarea>
                </td>
            </tr>
            <tr>
                <td><code>input[type=checkbox]</code></td>
                <td>
                    <label class="checkbox">
                        <input type="checkbox" value="">
                        这是一个checkbox
                    </label>
                </td>
            </tr>
            <tr>
                <td><code>input[type=radio]</code></td>
                <td>
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 这是一个radio
                    </label>
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 这是一个radio
                    </label>
                </td>
            </tr>
            <tr>
                <td><code>select</code></td>
                <td>
                    <select class="input-block-level">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <select class="input-block-level" multiple="multiple">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
</section>