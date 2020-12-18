<main class="container">
	<h3>Edit Books</h3>
	<div class="container">
		<form action="<?php echo base_url('Books/update');?>" name="books_edit" id="books_edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $books['id']; ?>" required>
            
            <div class="form-group">
                <label for="title">Title <span id="title_err" style="color:red;">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title" value="<?php echo $books['title']; ?>" required>
            </div>

            <div class="form-group">
                <label for="pdf">Pdf <span id="pdf_err" style="color:red;"> If you want to change the pdf please choose one... *</span></label>
                <input type="file" name="pdf" class="form-control" id="pdf">
            </div>

            <div class="text-info">
                <?php echo '<a href="'.base_url().'/uploads/pdf/books/'.$books['pdf'].'">'.$books['title'].'</a>'; ?> 
            </div>
            <br/>

            <div class="container bg-info">
                <?php
                    foreach($tags as $tagsObj){
                        $status = false;
                        foreach($tag_book as $tag_bookObj){
                            if($tag_bookObj['tagId'] == $tagsObj['id']){
                                $status = true;
                                echo $tagsObj['name'].' Marked';
                                echo '<br/>';
                            }
                            else{
                                $status = false;
                            }
                        }

                        if($status == false){
                            echo $tagsObj['name'].' Un Marked';
                            echo '<br/>';
                        }
                    }
                ?>
            </div>

            <br/>

            <div class="form-group">
            	<button type="submit" id="send_form" class="btn btn-success">Update</button>
            </div> 
        </form>
	</div>
</main>