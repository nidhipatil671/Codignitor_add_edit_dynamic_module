<div class="container">
   <br><br><br><br>
    <div class="row">
        <div class="col-lg-12">           
            <h2>User Listing         
                <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo base_url('users/create') ?>"> Create New User</a>
                </div>
            </h2>
        </div>
    </div><br><br><br><br>
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <?php foreach ($custom_field as $custom) { ?>      
                    <th><?php echo $custom->field_name; ?></th>     
            <?php } ?>  
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $d) { ?>      
        <tr>
            <td><?php echo $d->name; ?></td>
            <td><?php echo $d->description; ?></td>
            
            <?php foreach ($custom_field as $custom) { ?>   
                    <?php $col = $custom->column_name; ?>   
                    <td><?php echo $d->$col; ?></td>   
            <?php } ?>  
            
                <td>
                    <form method="DELETE" action="<?php echo base_url('users/delete/'.$d->id);?>">
                    <a class="btn btn-info btn-xs" href="<?php echo base_url('users/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
                </td>     
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
</div>