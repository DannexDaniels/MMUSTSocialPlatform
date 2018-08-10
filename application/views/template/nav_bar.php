<body class="<?php echo $page;?>">
<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="<?php echo base_url('')?>">MMUST Social Platform </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <?php if (isset($_SESSION['userno'])){

            ?>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('home');?>" onclick="scrollToDownload()">
                            <i class="material-icons">insert_drive_file</i> Posts
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">school</i> Lecturers
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All
                            </a>
                            <a href="http://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> In My School
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">message</i> Messages
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> Send New
                            </a>
                            <a href="http://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Read Recieved
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">notification_important</i> Notifications
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            <a href="http://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">person</i> <?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?>
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="<?php echo base_url('profile/').$_SESSION['phone'];?>" class="dropdown-item">
                                <i class="material-icons">person_outline</i> My Profile
                            </a>
                            <a href="<?php echo base_url('logout')?>" class="dropdown-item">
                                <i class="material-icons">exit_to_app</i> Log Out
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('profile/').$_SESSION['phone'];?>">
                            <img src="<?php echo base_url('uploads/profilepics/').$_SESSION['picture'];?>" alt="" class="img-raised rounded-circle img-fluid" style="height: 40px; width: 40px;">
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>-->
                </ul>
            </div>
        <?php } ?>

    </div>
</nav>