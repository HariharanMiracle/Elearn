<div class="bgstyle">
<br/>
<br/>
<br/>
<main class="container-fluid">
    <div>
        <?php
            if($_SESSION['isLoggedIn'] == 1){
                echo '<div class="wm-fancy-title"><h2>Welcome '.$_SESSION['user']['fname'].' <span> '.$_SESSION['user']['lname'].'</span></h2></div>';
            }
            else{
                foreach($setting as $settingObj){
                    if($settingObj['tkey'] == 'company'){
                        echo '<div class="wm-fancy-title"><h2>Welcome to <span>'.$settingObj['value'].'</span></h2></div>';
                    }
                }
            }
        ?>
        <hr/>
    </div>
    
    <div class="row" style="padding: 25px;">
        <div class="col-md-4 pre-scrollable" style="background-color: #f0f3f5; ">
            <div class="row text-center">
                <h4 style="background-color: #dce0e3; padding: 10px;"><b>News / Updates</b></h4>
                <br/>
            </div>
            <?php
                $count = 1;
                foreach ($news as $newsObj) {
                    ?>
                        <div class="card">
                            <div class="text-center" style="background-color: #dce0e3;"><h3><?php echo $newsObj['title']; ?></h3></div>
                            <div class="text-center"><?php echo '<img src="'.base_url().'/uploads/images/news/'.$newsObj['image'].'" class="card-img-top"/>'; ?></div>
                            <div class="card-body">
                                <?php echo $newsObj['description']; ?>
                                <?php echo '<a target="_blank" class="text-info" href="'.$newsObj['link'].'">'.$newsObj['link'].'</a>'; ?>
                            </div>
                            <div class="card-footer text-center" style="background-color: #dce0e3; padding: 10px;">
                            <small class="text-muted"><?php echo '<b>News Date:</b> '.$newsObj['newsDate']; ?></small> <b>/</b>
                            <small class="text-muted"><?php echo '<b>News Time:</b> '.$newsObj['newsTime']; ?></small> <b>/</b>
                            <small class="text-muted"><?php echo '<b>Posted On:</b> '.$newsObj['postedOn']; ?></small> 
                            </div>
                        </div>
                        <br/>
                        <hr/>
                        <br/>
                    <?php
                    $count++;
                }
            ?>
        </div>
        <br/>
        <div class="col-md-4 pre-scrollable" style="background-color: #7f7f85;">
            <div class="row text-center">
                <h4 style="background-color: #4b4b4f; padding: 10px;" class="text-white"><b>Events</b></h4>
                <br/>
            </div>
            <?php
                $count = 1;
                foreach ($events as $eventsObj) {
                    ?>
                        <div class="card">
                            <div class="text-center"  style="background-color: #4b4b4f;"><h3 class="text-white"><?php echo $eventsObj['title']; ?></h3></div>
                            <div class="text-center"><?php echo '<img src="'.base_url().'/uploads/images/events/'.$eventsObj['image'].'" class="card-img-top"/>'; ?></div>
                            <div class="card-body">
                                <br/>
                                <h5 class="text-white"><b>Zoom Link:</b> <?php echo '<a href="'.$eventsObj['link'].'"  target="_blank">'.$eventsObj['link'].'</a>'; ?></h5>
                                <br/>
                                <h5 class="text-white"><b>Meeting Id:</b> <?php echo $eventsObj['meetingId']; ?></h5>
                                <br/>
                                <h5 class="text-white"><b>Passcode:</b> <?php echo $eventsObj['passcode']; ?></h5>
                                <br/>
                                <h5 class="text-white"><b>Time Zone:</b> <?php echo $eventsObj['timeZone']; ?></h5>
                                <br/>
                            </div>
                            <div class="card-footer text-center"  style="background-color: #4b4b4f; padding: 10px;">
                            <small class="text-white"><?php echo '<b>Event Date:</b> '.$eventsObj['eventDate']; ?></small> <b class="text-white">/</b>
                            <small class="text-white"><?php echo '<b>Event Time:</b> '.$eventsObj['eventTime']; ?></small> <b class="text-white">/</b>
                            <small class="text-white"><?php echo '<b>Posted On:</b> '.$eventsObj['postedOn']; ?></small>
                            </div>
                        </div>
                        <br/>
                        <hr />
                        <br/>
                    <?php
                    $count++;
                }
            ?>
        </div>
        <br/>
        <div class="col-md-4 pre-scrollable" style="background-color: #f0f3f5; ">
            <div class="row text-center">
                <h4 style="background-color: #dce0e3; padding: 10px;"><b>Notice</b></h4>
                <br/>
            </div>
            <?php
                $count = 1;
                foreach ($notice as $noticeObj) {
                    ?>
                        <div class="card">
                            <div class="text-center"  style="background-color: #dce0e3;"><h3><?php echo $noticeObj['title']; ?></h3></div>
                            <div class="text-center"><?php echo '<img src="'.base_url().'/uploads/images/notice/'.$noticeObj['image'].'" class="card-img-top"/>'; ?></div>
                            <div class="card-body">
                                <?php echo $noticeObj['description']; ?>
                            </div>
                            <div class="card-footer text-center"  style="background-color: #dce0e3; padding: 10px;">
                                <small class="text-muted"><?php echo '<b>Posted On:</b> '.$noticeObj['postedOn']; ?></small>
                            </div>
                        </div>
                        <br/>
                        <hr/>
                        <br/>
                    <?php
                    $count++;
                }
            ?>
        </div>
    </div>

    <br/>
            <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab"  target="_blank">Facebook Page</a></li>
                                <li><a href="https://www.facebook.com/siddukkal/" aria-controls="profile" data-toggle="tab"  target="_blank">சிறகடிக்கும் சிட்டுக்கள்</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> 
                                            <div class="wm-map"> 
                                                <div class="p-4 text-center">
                                                    <!-- <h1>Follow Us</h1>
                                                    <h2>on facebook</h2>
                                                    <h1><b>சிறகடிக்கும் சிட்டுக்கள்</b></h1> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsiddukkal&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                                <!-- <img src = "<?php // echo base_url().'/design/images/fb_wp.jpg' ?>" height="50%" width="50%"/> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>    
</main>
<br/>
<br/>
<br/>
</div>