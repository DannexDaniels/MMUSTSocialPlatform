
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url(<?php echo base_url('assets/')?>'img/kit/bg2.jpg');">
    <!--<div class="container">
        <div class="row">
            <!--<div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Material Kit.</h1>
                    <h3>A Badass Bootstrap 4 UI Kit based on Material Design.</h3>
                </div>
            </div>
        </div>
    </div>-->
</div>
<div class="main main-raised" style="margin-top: -40%;">
    <div class="section section-basic"  style="background-color: lightgrey;">
        <div class="container">
            <div class="section section-tabs">
                <div class="container">
                    <?php if (isset($_SESSION['userno'])){

                        ?>
                        <div class="post-form" style="background-color: white; border-radius: 2%; padding: 2%; margin-top: -100px;">
                            <?php echo form_open_multipart('addpost');?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Post To :</label>
                                        <select name="post_to" class="form-control" required>
                                            <option disabled selected> </option>
                                            <option value="All">All</option>
                                            <option value="Students">Students</option>
                                            <option value="Lecturers">Lecturers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Select School :</label>
                                        <select name="school" class="form-control" required>
                                            <option disabled selected> </option>
                                            <option value="SCH1">Computing and Informatics</option>
                                            <option value="SCH2">Business and Economics</option>
                                            <option value="SCH3">Nursing, Midwifery and Paramedics</option>
                                            <option value="SCH4">Engineering and Built Environment</option>
                                            <option value="SCH5">Natural Sciences</option>
                                            <option value="SCH6">Arts and Social Sciences</option>
                                            <option value="SCH7">Public Health, Biological Sciences and Technology</option>
                                            <option value="SCH8">Agriculture and Veterinary Technology</option>
                                            <option value="SCH9">Disaster Management and Humanitarian Assistance</option>
                                            <option value="SCH10">Open Learning and Continuing Education</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="exampleMessage" class="bmd-label-floating">Make a Post</label>
                                        <textarea type="text" class="form-control" rows="4" id="exampleMessage" name="msg" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="picture-container">
                                        <div class="picture" style="border-radius: 10%;width: 200px;height: 150px;">
                                            <img src="" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input name="picture" type="file" id="wizard-picture" accept="image/*" >
                                        </div>
                                        <h6>Select a Picture</h6>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Post" class=" btn btn-primary btn-round"/>
                            <?php echo form_close();?>
                        </div>
                    <?php } ?>


                    <?php
                        $position = 0;
                        foreach ($posts as $post) :
                     ?>
                            <!--                nav tabs	             -->
                            <div id="nav-tabs">
                                <!-- Tabs with icons on Card -->
                                <div class="card card-nav-tabs">
                                    <div class="card-header card-header-primary">
                                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <div class="row" style="height: 50px;">
                                                    <div class="col-sm-1">
                                                        <img src="assets/img/kit/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" style="height: 110%;">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <b><?php echo $post['fname'].' '.$post['lname'];?></b>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <b><?php echo 'To '.$post['posted_to'].' in school of '.$post['name']?></b>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <b><?php echo $post['time']?></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content text-center">
                                            <div class="row" style="height: 200px;">
                                                <?php
                                                    if ($post['photo']==''){
                                                        ?>
                                                        <div class="card-body ">
                                                            <div class="tab-content text-center">
                                                                <p><?php echo word_limiter($post['message'],100);?> </p>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Like this post">
                                                                            <i class="fa fa-thumbs-up"></i><b> like (0)</b>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Dislike this post">
                                                                            <i class="fa fa-thumbs-down"></i><b> DisLike (0)</b>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Leave a comment">
                                                                            <i class="fa fa-comment"></i><b> Comment (0)</b>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }else{
                                                        ?>
                                                        <div class="card-body ">
                                                            <div class="tab-content text-center">
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        <p><?php echo word_limiter($post['message'],80);?> </p>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php echo base_url('like/').$post['post_id'];?>" target="_blank" data-original-title="Like this post">
                                                                                    <i class="fa fa-thumbs-up"></i><b> like (0)</b>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php echo base_url('dislike/').$post['post_id'];?>" target="_blank" data-original-title="Dislike this post">
                                                                                    <i class="fa fa-thumbs-down"></i><b> DisLike (0)</b>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Leave a comment">
                                                                                    <i class="fa fa-comment"></i><b> Comment (0)</b>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <img src="<?php echo base_url('uploads/postpics/').$post['photo'];?>" alt="<?php echo $post['photo'];?>" class="img-raised rounded img-fluid" style="height: 40%; max-height: 500px;"/>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tabs with icons on Card -->
                            </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <!-- 	            end nav tabs -->
        </div>
    </div>
</div>