<br/>
<br/>
<br/>
<main class="container">
    <div>
        <?php
            if($_SESSION['isLoggedIn'] == 1){
                echo '<h1>Welcome '.$_SESSION['user']['fname'].' '.$_SESSION['user']['lname'].'</h1>';
            }
            else{
                foreach($setting as $settingObj){
                    if($settingObj['tkey'] == 'company'){
                        echo '<h1>Welcome to '.$settingObj['value'].'</h1>';
                    }
                }
            }
        ?>
        <hr/>
    </div>
    
</main>
<br/>
<br/>
<br/>