
<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url('/assets/')?>img/kit/city.jpg');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="<?php echo base_url('uploads/profilepics/').$_SESSION['picture'];?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title"><?php echo $profile['fname'].' '.$profile['lname'];?></h3>
                            <h6><?php echo $profile['user_type'];?></h6>
                            <a href="#" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <center>
                    <table width="80%">
                        <tr>
                            <th>Registration Number</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['userno']?></td>
                        </tr>
                        <tr>
                            <th>Course Taken</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['course']?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['gender']?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['dob']?></td>
                        </tr>
                        <tr>
                            <th>Nickname</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['nick_name']?></td>
                        </tr>
                        <tr>
                            <th>Email address</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['email']?></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['phone']?></td>
                        </tr>
                        <tr>
                            <th>School</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['school']?></td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['department']?></td>
                        </tr>
                        <tr>
                            <th>Date of Joining</th>
                            <td>:</td>
                            <td class="text-right"><?php echo $profile['yoj']?></td>
                        </tr>
                    </table>
                </center>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                    <i class="material-icons">camera</i> Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                    <i class="material-icons">palette</i> Posts
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <?php
                        if (isset($posts)){
                            $counter = 1;
                            foreach ($posts as $photo):
                                if ($photo['photo']!=''){
                            ?>
                                <div class="row">
                                    <?php
                                        if ($counter%2==1){
                                            ?>
                                            <div class="col-md-3">
                                                <img src="<?php echo base_url('uploads/postpics/').$photo['photo'];?>" class="rounded">
                                            </div>
                                            <?php
                                        }elseif ($counter%2==0){
                                            ?>
                                            <div class="col-md-3">
                                                <img src="<?php echo base_url('uploads/postpics/').$photo['photo'];?>" class="rounded">
                                            </div>
                                            <?php
                                        }
                                    ?>

                                </div>
                    <?php       }
                        $counter++;
                            endforeach;
                            }else{
                                echo 'You have not posted any photos yet';
                            }
                    ?>

                </div>
                <div class="tab-pane text-center gallery" id="works">
                    <?php
                    if (isset($posts)){
                        foreach ($posts as $post):
                            ?>
                            <div class="row">
                                <p><? echo $post['message'];?></p>
                            </div>
                        <?php
                        endforeach;
                    }else{
                        echo 'You have not posted anything yet';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>