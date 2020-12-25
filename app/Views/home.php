<br/>
<br/>
<br/>
<main class="container-fluid">
    <div>
        <?php
            if($_SESSION['isLoggedIn'] == 1){
                echo '<div class="text-center"><h1>Welcome '.$_SESSION['user']['fname'].' '.$_SESSION['user']['lname'].'</h1></div>';
            }
            else{
                foreach($setting as $settingObj){
                    if($settingObj['tkey'] == 'company'){
                        echo '<div class="text-center"><h1>Welcome to '.$settingObj['value'].'</h1></div>';
                    }
                }
            }
        ?>
        <hr/>
    </div>
    
    <div class="row" style="padding: 10px;">
        <div class="col-md-4 pre-scrollable">
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
                                <?php echo '<a class="text-info" href="'.$newsObj['link'].'">'.$newsObj['link'].'</a>'; ?>
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

        <div class="col-md-4 pre-scrollable" style="background-color: #f0f0f5">
            <div class="row text-center">
                <h4 style="background-color: #4b4b4f; padding: 10px;" class="text-white"><b>Events</b></h4>
                <br/>
            </div>
            <?php
                $count = 1;
                foreach ($events as $eventsObj) {
                    ?>
                        <div class="card">
                            <div class="text-center"  style="background-color: #dce0e3;"><h3><?php echo $eventsObj['title']; ?></h3></div>
                            <div class="text-center"><?php echo '<img src="'.base_url().'/uploads/images/events/'.$eventsObj['image'].'" class="card-img-top"/>'; ?></div>
                            <div class="card-body">
                                <h5><b>Zoom Link:</b> <?php echo '<a class="text-info" href="'.$eventsObj['link'].'">'.$eventsObj['link'].'</a>'; ?></h5>
                                <h5><b>Meeting Id:</b> <?php echo $eventsObj['meetingId']; ?></h5>
                                <h5><b>Passcode:</b> <?php echo $eventsObj['passcode']; ?></h5>
                                <h5><b>Time Zone:</b> <?php echo $eventsObj['timeZone']; ?></h5>
                            </div>
                            <div class="card-footer text-center"  style="background-color: #dce0e3; padding: 10px;">
                            <small class="text-muted"><?php echo '<b>Event Date:</b> '.$eventsObj['eventDate']; ?></small> <b>/</b>
                            <small class="text-muted"><?php echo '<b>Event Time:</b> '.$eventsObj['eventTime']; ?></small> <b>/</b>
                            <small class="text-muted"><?php echo '<b>Posted On:</b> '.$eventsObj['postedOn']; ?></small>
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

        <div class="col-md-4 pre-scrollable">
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
</main>
<br/>
<br/>
<br/>