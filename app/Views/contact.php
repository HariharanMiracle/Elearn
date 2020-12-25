<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Contact Us</h3>
            <hr/>
        </div>
    </div>

    <div style="background-color: #5c5a55; padding: 50px; border-radius: 10px; border: 2px solid blue;">
        <h5 class="text-white"><b>Address: </b>
        <?php
            foreach($setting as $settingObj){
                if($settingObj['tkey'] == 'address'){
                    echo $settingObj['value'];
                    break;
                }
            }
        ?>
        </h5>
        <h5 class="text-white"><b>Contact Number 1: </b>
        <?php
            foreach($setting as $settingObj){
                if($settingObj['tkey'] == 'phone'){
                    echo $settingObj['value'];
                    break;
                }
            }
        ?>
        </h5>
        <h5 class="text-white"><b>Contact Number 2: </b>
        <?php
            foreach($setting as $settingObj){
                if($settingObj['tkey'] == 'phone1'){
                    echo $settingObj['value'];
                    break;
                }
            }
        ?>
        </h5>

        <div class="row text-center" style="border: 1px solid blue; border-radius: 10px;">
            <a href="#"><img src = "<?php echo base_url().'/uploads/images/4.png'; ?>" height="100px" width="100px"/></a>
            <a href="#"><img src = "<?php echo base_url().'/uploads/images/5.png'; ?>" height="100px" width="100px"/></a>
            <a href="#"><img src = "<?php echo base_url().'/uploads/images/6.png'; ?>" height="100px" width="100px"/></a>
            <a href="#"><img src = "<?php echo base_url().'/uploads/images/7.png'; ?>" height="100px" width="100px"/></a>
        </div>
    </div>
</div>