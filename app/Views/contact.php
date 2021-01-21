<div>
<!--// Main Section \\-->
<div class="wm-main-section wm-ourhistory-full">
                <span class="wm-light-transparent"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="wm-history-list">
                                <h2>Contact Us</h2>
                                <ul>
                                    <li>
                                        <time>~</time>
                                        <span>
                                            Address:
                                            <?php
                                                foreach($setting as $settingObj){
                                                    if($settingObj['tkey'] == 'address'){
                                                        echo $settingObj['value'];
                                                        break;
                                                    }
                                                }
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <time>~</time>
                                        <span>
                                        Phone: 
                                            <?php
                                                foreach($setting as $settingObj){
                                                    if($settingObj['tkey'] == 'phone'){
                                                        echo $settingObj['value'];
                                                        break;
                                                    }
                                                }
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <time>~</time>
                                        <span>
                                            Phone:
                                            <?php
                                                foreach($setting as $settingObj){
                                                    if($settingObj['tkey'] == 'phone1'){
                                                        echo $settingObj['value'];
                                                        break;
                                                    }
                                                }
                                            ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wm-subscribe-form">
                                <h2>Reach us through Social Media sites!</h2>
                                <p>It's our pleasure to help you...</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="https://www.facebook.com/shanthiaham"><img src = "<?php echo base_url().'/uploads/images/4.png'; ?>" height="100px" width="100px"/></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.instagram.com/shanthiham/"><img src = "<?php echo base_url().'/uploads/images/5.png'; ?>" height="100px" width="100px"/></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://twitter.com/shanthiham?lang=en"><img src = "<?php echo base_url().'/uploads/images/6.png'; ?>" height="100px" width="100px"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
    </div>
</div>