<main class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('/User/create'); ?>" class="btn-link" alt="Create Tags">Add New</a>
                </div>
            </div>

            <br />
        
            <div class="row">
                <div class="col-md-12">
                    <h3><i class="fas fa-list-alt"></i> All Users</h3>
                    <br />
                    <?php
                        if ($user) {
                            ?>
                                <div class="row">
                                    <form class="form-inline ml-4 mb-2" action="<?php echo base_url('/User/search'); ?>" method="post">
                                        <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn my-2 my-sm-0" type="submit">Search</button>
                                    </form>   
                                </div>
                                <br/>
                            <?php
                            echo '<table class="table table-striped table-bordered" id="tags">';
                                echo '<thead>';
                                    echo '<tr>';
                                        echo '<th>No</th>';
                                        echo '<th>Username</th>';
                                        echo '<th>Email</th>';
                                        echo '<th>First name</th>';
                                        echo '<th>Last name</th>';
                                        echo '<th>Contact</th>';
                                        echo '<th>Date of birth</th>';
                                        echo '<th>Privilege</th>';
                                        echo '<th>Active</th>';
                                        echo '<th>Edit</th>';
                                        echo '<th>Activate / Deactivate</th>';
                                    echo '</tr>';
                                echo '</thead>';

                                echo '<tbody>';
                                    $count = 1;
                                    foreach ($user as $obj) {
                                        
                                        echo '<tr>';
                                            echo '<td>'.$count.'</td>';
                                            echo '<td>'.$obj['username'].'</td>';
                                            echo '<td>'.$obj['email'].'</td>';
                                            echo '<td>'.$obj['fname'].'</td>';
                                            echo '<td>'.$obj['lname'].'</td>';
                                            echo '<td>'.$obj['contact'].'</td>';
                                            echo '<td>'.$obj['dob'].'</td>';
                                            if($obj['privilege'] == "USER"){
                                                echo '<td class="bg-info">USER</td>';
                                            }
                                            else{
                                                echo '<td class="bg-warning">ADMIN</td>';
                                            }
                                            if($obj['status'] == "ACTIVE"){
                                                echo '<td class="bg-success">YES</td>';
                                            }
                                            else{
                                                echo '<td class="bg-danger">No</td>';
                                            }
                                            if($_SESSION['user']['id'] == $obj['id']){
                                                ?>
                                                    <td><button onclick="adminFunc()"><i class="far fa-edit"></i></button></td>
                                                    <td><button class="btn btn-danger" onclick="adminFunc()">deactivate</button></td>
                                                <?php
                                            }
                                            else{
                                                echo '<td><a class="a-orange" href="'.base_url().'/User/edit/'.$obj['id'].'" alt="Edit User - '.$obj['username'].'"><i class="far fa-edit"></i></a></td>';
                                                if($obj['status'] == "ACTIVE"){
                                                    echo '<td><a class="btn btn-danger" href="'.base_url().'/User/deactivate/'.$obj['id'].'" alt="deactivate User - '.$obj['username'].'">deactivate</a></td>';
                                                }
                                                else{
                                                    echo '<td><a class="btn btn-success" href="'.base_url().'/User/activate/'.$obj['id'].'" alt="activate User - '.$obj['username'].'">activate</i></a></td>';
                                                }
                                            }
                                        echo '</tr>';
                                        $count++;
                                    }
                                echo '</tbody>';
                            echo '</table>';
                        } else {
                            echo '<div class="col-md-12">';
                                echo '<div class="alert alert-warning" role="alert">';
                                    echo 'No Users Found!';
                                echo '</div>';
                            echo '</div>';
                        }
                    ?>
                <div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://kit.fontawesome.com/cdee1294ee.js" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $('#user').DataTable();
    } );

    function adminFunc(){
        alert("Sorry you cannot edit or deactivate the following account, try from another Admin account.");
    }
</script>