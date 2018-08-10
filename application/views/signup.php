<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-profile.jpg')">
    <!--   Creative Tim Branding   -->
   <!-- <a href="http://creative-tim.com">
        <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>-->

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="purple" id="wizardProfile">
                        <?php echo form_open_multipart('createstudent');?>
                            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    Create a new Account
                                </h3>
                                <h5>Please use real information to enable others to easily find you.</h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#about" data-toggle="tab">Personal Info</a></li>
                                    <li><a href="#account" data-toggle="tab">Contact Info</a></li>
                                    <li><a href="#address" data-toggle="tab">School Info</a></li>
                                    <li><a href="#password" data-toggle="tab">Login Credentials</a> </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Let's start with the Personal information</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="<?php echo base_url('assets')?>/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input name="picture" type="file" id="wizard-picture" accept="image/*" >
                                                </div>
                                                <h6>Choose Picture</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name <small>(required)</small></label>
                                                    <input name="firstname" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name <small>(required)</small></label>
                                                    <input name="lastname" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">perm_identity</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Registration Number <small>(required)</small></label>
                                                        <input name="regno" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">tag_faces</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nick Name <small>(optional)</small></label>
                                                        <input name="nickname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">accessibility</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Select Gender <small>(required)</small></label>
                                                            <select name="gender" class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">date_range</i>
													</span>
                                                        <div class="form-group">
                                                            <label class="label-control">Date of Birth<small> (required)</small></label>
                                                            <input class="datetimepicker form-control" type="date" name="dob"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> How can others contact you? </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Personal Email Address<small>(required)</small></label>
                                                            <input name="email" type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Phone Number <small>(required)</small></label>
                                                            <input name="phone" type="phone" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">School Email/Other Email <small>(optional)</small></label>
                                                            <input name="email2" type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Other Phone Number <small>(optional)</small></label>
                                                            <input name="phone2" type="phone" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Tell us a little about your school. </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Course Taken (required)</label>
                                                <input name="course" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Department (required)</label>
                                                <select name="department" class="form-control">
                                                    <option disabled selected> </option>
                                                    <optgroup label="Computing and Informatics">
                                                        <option value="DEP2">Computer Science</option>
                                                        <option value="DEP1">Information Technology</option>
                                                    </optgroup>
                                                    <optgroup label="Engineering">
                                                        <option value="DEP21">Electrical Engineering</option>
                                                        <option value="DEP22">Mechanical Engineering</option>
                                                        <option value="DEP23">Civil Engineering</option>
                                                    </optgroup>
                                                    <optgroup label="Nursing and Mid-Wifery">
                                                        <option value="DEP27">Nursing</option>
                                                        <option value="DEP28">Nutrition</option>
                                                    </optgroup>
                                                    <optgroup label="Education and Social Sciences">
                                                        <option value="DEP19">Education</option>
                                                        <option value="DEP17">Sport Science</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-4">
                                            <div class="form-group">
                                                <label class="control-label">Date you Joined the school</label>
                                                <input name="jod" type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="password">
                                    <h4 class="info-text"> Finally, Set the password you'll use to access the platform </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Password<small>(required)</small></label>
                                                            <input name="pass" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Confirm Password<small>(required)</small></label>
                                                            <input name="passconf" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input name="path" type="text" class="form-control" id="path">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' onclick="getpath()"/>
                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->


    <script type="text/javascript">
        function getpath() {
            var x = document.getElementById("wizard-picture").value;
            document.getElementById("path").setAttribute('path',x);
            alert("hello");
        }
    </script>