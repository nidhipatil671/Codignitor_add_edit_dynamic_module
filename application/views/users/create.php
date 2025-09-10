<div class="container mt-3"><br>
    
    <div class="row">
         <div class="col-lg-4">           
            <h2></h2>
        </div>
        <div class="col-lg-4">           
        <h1>Create User</h1><br>
        </div>
        <div class="col-lg-4">           
          <a href="javascript:window.history.go(-1);"><button class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <form method="post" action="<?php echo base_url('usersCreate');?>">
        <div class="row">
            <input type="hidden" name="table_name" value="users" class="form-control">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control"><br>
                    </div>
                </div>
            </div><br>
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control"></textarea><br>
                    </div>
                </div>
            </div>

            <?php foreach ($custom_field as $d) { ?>      
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label class="col-md-3"><?php echo $d->field_name ?></label>
                        <div class="col-md-9">
                            <input name="<?php echo $d->column_name ?>" type="<?php echo $d->field_type ?>" class="form-control"><br>
                        </div>
                    </div>
                </div>
            <?php } ?>
                
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">           
                        <div class="col-md-8 col-md-offset-2 pull-right">
                        <input type="submit" name="Save" class="btn btn-primary">
                    </div>
                </div>
                <div class="col-lg-4">           
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add Custom Field
                    </button>
                </div>
            </div>
            
        </div>
    </form>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Custom Field</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('addCustomFields');?>">
                    <div class="form-group">
                        <label class="col-md-3">Type</label>
                        <div class="col-md-9">
                            <select id="sqlDataType" name="sqlDataType" class="form-control">
                                <option value="">Please Select</option>
                                <option value="NUMBER">INT</option>
                                <option value="TEXT">VARCHAR</option>
                            </select>
                        </div><br>
                    </div><br>
                    <div class="form-group">
                        <label class="col-md-3">Custom Name</label>
                        <div class="col-md-9">
                            <input type="text" name="custom_name" class="form-control" placeholder="Custom Name">
                        </div><br>
                    </div><br>
                    <!-- Submit button -->
                    <input type="submit" name="Save" class="btn btn-primary btn-block">
                    <!-- <button type="submit" class="btn btn-primary btn-block">submit</button> -->
                </form>
            </div>
            </div>
        </div>
    </div>
</div>