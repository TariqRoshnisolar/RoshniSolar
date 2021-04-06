<?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> <?php echo 'Branch'; ?>     </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            if ($this->rbac->hasPrivilege('branches', 'can_add')) {
                ?>  
                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php //echo $title;       ?><?php echo 'Add Branch'; ?></h3>
                        </div><!-- /.box-header -->
                        <form id="form1" action=""  method="post" accept-charset="utf-8">
                            <div class="box-body">
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <?php echo $this->session->flashdata('msg') ?>
                                <?php } ?>
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                                }
                                ?>
                                <?php echo $this->customlib->getCSRF(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo 'State'; ?></label><small class="req"> *</small>
                                    <input id="state" name="state" placeholder="" type="text" class="form-control"  value="<?php if(isset($branch_data)){ echo set_value('state', $branch_data['state']); } else{ echo set_value('state'); } ?>" />
                                    <span class="text-danger"><?php echo form_error('state'); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo 'Address'; ?></label><small class="req"> *</small>
                                    <textarea name="address" id="address" class="form-control"><?php if(isset($branch_data)){ echo set_value('address', $branch_data['address']); } else{ echo set_value('address'); } ?></textarea>
                                    <span class="text-danger"><?php echo form_error('address'); ?></span>
                                </div>                                

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                            </div>
                        </form>
                    </div>

                </div><!--/.col (right) -->
                <!-- left column -->
            <?php } ?>
            <div class="col-md-<?php
            if ($this->rbac->hasPrivilege('branches', 'can_add')) {
                echo "8";
            } else {
                echo "12";
            }
            ?>">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><?php echo 'Branch List'; ?></h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label"><?php echo 'Branch List'; ?></div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th><?php echo 'Branch'; ?>
                                        </th>
                                        <th><?php echo 'Address'; ?>
                                        </th>                                        

                                        <th class="text-right"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($branch_list as $branch) {
                                        ?>
                                        <tr>
                                            <td class="mailbox-name">
                                                <?php echo $branch['state']; ?>

                                            </td>
                                            <td class="mailbox-name">
                                                <?php echo $branch['address']; ?>

                                            </td>                                            


                                            <td class="mailbox-date pull-right"">
                                                <?php
                                                if ($this->rbac->hasPrivilege('branches', 'can_edit')) {
                                                    ?>  
                                                    <a href="<?php echo base_url('admin/front/branches/edit'); ?>/<?php echo $branch['id']; ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <?php
                                                }
                                                if ($this->rbac->hasPrivilege('branches', 'can_delete')) {
                                                    ?>  
                                                    <a href="<?php echo base_url(); ?>admin/front/branches/delete/<?php echo $branch['id']; ?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table><!-- /.table -->



                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

        </div>
        <div class="row">
            <!-- left column -->

            <!-- right column -->
            <div class="col-md-12">

            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->