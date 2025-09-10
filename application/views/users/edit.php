<div class="container mt-3"><br>
    
    <div class="row">
         <div class="col-lg-4">           
            <h2></h2>
        </div>
        <div class="col-lg-4">           
        <h1>Edit User</h1><br>
        </div>
        <div class="col-lg-4">           
          <a href="javascript:window.history.go(-1);"><button class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <form method="post" action="<?php echo base_url('users/update/'.$user->id);?>">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="<?php echo $user->name; ?>">
                    </div><br>
                </div><br>
            </div><br>
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control"><?php echo $user->description; ?></textarea>
                    </div><br>
                </div><br>
            </div><br>

                <?php foreach ($custom_field as $custom) { ?>      
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-3"><?php echo $custom->field_name ?></label>
                            <div class="col-md-9">
                                <?php $col = $custom->column_name; ?>   
                                <input name="<?php echo $custom->column_name ?>" value="<?php echo $user->$col ?>" type="<?php echo $custom->field_type ?>" class="form-control"><br>
                            </div><br>
                        </div><br>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">           
                            <div class="col-md-8 col-md-offset-2 pull-right">
                            <input type="submit" name="Save" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
        </div>
    </form>
</div>