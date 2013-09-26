<section id="form">
    <div class="page-header">
        <h1>表单</h1>
    </div>
    <div class="row">
        <div class="span10 offset1">
            <form class="well form-search">
                <input class="input-medium search-query" type="text" />
                <button type="submit" class="btn">搜索</button>
            </form>
            <form class="well form-search">
                <input class="input-small" type="text" placeholder="用户名/邮箱">
                <input class="input-small" type="password" placeholder="密码">
                <button type="submit" class="btn">提交</button>
            </form>
            <form class="well form-search form-horizontal">
                <fieldset>
                    <legend>控件组</legend>
                    <div class="control-group">
                        <label class="control-label" for="input01">input box</label>
                        <div class="controls">
                            <input id="input01" class="input-xlarge" type="text" />
                            <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input02">check box</label>
                        <div class="controls">
                            <label class="checkbox">
                            <input id="input02" type="checkbox" value="option" />
                            Option one is this and that—be sure to include why it's great.
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">select list</label>
                        <div class="controls">
                            <select id="select01">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select02">multi select</label>
                        <div class="controls">
                            <select id="select02" multiple="multiple">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileinput">file input</label>
                        <div class="controls">
                            <input type="file" id="fileinput" class="input-file" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputarea">file input</label>
                        <div class="controls">
                            <textarea id="inputarea" class="input-xlarge" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedinput">focused input</label>
                        <div class="controls">
                            <input type="text" id="focusedinput" class="input-xlarge focused" value="This is focused." />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="uneditableinput">Uneditable input</label>
                        <div class="controls">
                            <span id="uneditableinput" class="input-xlarge uneditable-input">Some value here</span>
                            <input type="text" class="input-xlarge uneditable-input" readonly="readonly" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledinput">disabled input</label>
                        <div class="controls">
                            <input type="text" id="disabledinput" class="input-xlarge disabled" disabled="disabled" placeholder="disabled here"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="optionsCheckbox2" class="control-label">disabled checkbox</label>
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox" disabled="disabled" value="option1" id="optionsCheckbox2" />
                                This is a disabled checkbox
                            </label>
                        </div>
                    </div>          
                    <div class="control-group warning">
                        <label for="inputWarning" class="control-label">Input with warning</label>
                        <div class="controls">
                            <input type="text" id="inputWarning" />
                            <span class="help-inline">Something may have gone wrong</span>
                        </div>
                    </div>  
                    <div class="control-group error">
                        <label for="inputError" class="control-label">Input with error</label>
                        <div class="controls">
                            <input type="text" id="inputError" />
                            <span class="help-inline">Please correct the error</span>
                        </div>
                      </div>    
                    <div class="control-group success">
                        <label for="inputSuccess" class="control-label">Input with success</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" />
                            <span class="help-inline">Woohoo!</span>
                        </div>
                    </div>     
                    <div class="control-group info">
                        <label for="selectError" class="control-label">Select with info</label>
                        <div class="controls">
                            <select id="selectError">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <span class="help-inline">Woohoo!</span>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <button class="btn" type="reset">Cancel</button>
                    </div>
                </fieldset>
            </form>
            <form class="well form-horizontal">
                <fieldset>
                    <legend>控件组</legend>
                    <div class="control-group">
                        <label class="control-label">组合式输入框</label>
                        <div class="controls">
                            <p>
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-align-left" ></i></span>
                                    <input type="text" />
                                </div>
                            </p>
                            <p>
                                <div class="input-append">
                                    <input type="text" />
                                    <span class="add-on"><i class="icon-star" ></i></span>
                                </div>
                            </p>
                            <p>
                                <div class="input-append input-prepend">
                                    <span class="add-on"><i class="icon-screenshot" ></i></span>
                                    <input type="text" />
                                    <span class="add-on"><i class="icon-heart" ></i></span>
                                </div>
                            </p>
                            <p>
                                <div class="input-prepend input-append">
                                    <div class="btn-group">
                                        <button class="btn" type="reset">按钮1</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" class="search-query"/>
                                    <div class="btn-group">
                                        <button class="btn" type="reset"><i class="icon-search"></i></button>
                                        <button class="btn" type="reset">按钮1</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div> 
                </fieldset>
            </form>
        </div>
    </div>
</section>