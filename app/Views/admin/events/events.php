<main class="container-fluid" style="padding: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url('/Events/create'); ?>" class="btn-link" alt="Create Events">Add New</a>
                </div>
            </div>

            <br />
        
            <div class="row">
                <div class="col-md-12">
                    <h3><i class="fas fa-list-alt"></i> All Events</h3>
                    <br />
                    <?php
                        if ($events) {
                            ?>
                                <div class="row">
                                    <form class="form-inline ml-4 mb-2" action="<?php echo base_url('/Events/search'); ?>" method="post">
                                        <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn my-2 my-sm-0" type="submit">Search</button>
                                    </form>   
                                </div>
                                <br/>
                            <?php
                            echo '<table class="table table-striped table-bordered" id="events">';
                                echo '<thead>';
                                    echo '<tr>';
                                        echo '<th>No</th>';
                                        echo '<th>Title</th>';
                                        echo '<th>Image</th>';
                                        echo '<th>Link</th>';
                                        echo '<th>Event Date</th>';
                                        echo '<th>Event Time</th>';
                                        echo '<th>Posted On</th>';
                                        echo '<th>Meeting Id</th>';
                                        echo '<th>Passcode</th>';
                                        echo '<th>Time Zone</th>';
                                        echo '<th>Edit</th>';
                                        echo '<th>Delete</th>';
                                    echo '</tr>';
                                echo '</thead>';

                                echo '<tbody>';
                                    $count = 1;
                                    foreach ($events as $obj) {
                                        
                                        echo '<tr>';
                                            echo '<td>'.$count.'</td>';
                                            echo '<td>'.$obj['title'].'</   td>';
                                            echo '<td><img src="'.base_url().'/uploads/images/events/'.$obj['image'].'" height="250px" width="250px"/></td>';
                                            echo '<td><a target="_blank" class="text-info" href="'.$obj['link'].'">'.$obj['link'].'</a></td>';
                                            echo '<td>'.$obj['eventDate'].'</td>';
                                            echo '<td>'.$obj['eventTime'].'</td>';
                                            echo '<td>'.$obj['postedOn'].'</td>';
                                            echo '<td>'.$obj['meetingId'].'</td>';
                                            echo '<td>'.$obj['passcode'].'</td>';
                                            echo '<td>'.$obj['timeZone'].'</td>';
                                            echo '<td><a class="a-orange" href="'.base_url().'/Events/edit/'.$obj['id'].'" alt="Edit Category - '.$obj['name'].'"><i class="far fa-edit"></i></a></td>';
                                            echo '<td><a class="a-orange" href="'.base_url().'/Events/delete/'.$obj['id'].'" alt="Delete Category - '.$obj['name'].'"><i class="far fa-trash-alt"></i></a></td>';
                                        echo '</tr>';
                                        $count++;
                                    }
                                echo '</tbody>';
                            echo '</table>';
                        } else {
                            echo '<div class="col-md-12">';
                                echo '<div class="alert alert-warning" role="alert">';
                                    echo 'No Events Found!';
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
        $('#events').DataTable();
    } );
</script>