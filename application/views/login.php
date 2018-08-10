<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-profile.jpg')">
    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="purple" id="wizardProfile">
                        <?php echo form_open('signin');?>
                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    Login to your Account
                                </h3>
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email/phone/reg no/work no <small>(required)</small></label>
                                                    <input name="user" type="text" class="form-control" required value="<?php
                                                        if (isset($_SESSION['user'])){
                                                            echo $_SESSION['user'];
                                                        }else{
                                                            echo '';
                                                        }
                                                    ?>">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password <small>(required)</small></label>
                                                    <input name="password" type="password" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer col-sm-10 col-sm-offset-1">
                                            <input type="submit" class="btn btn-info" value="Login" style="width: 100%;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
