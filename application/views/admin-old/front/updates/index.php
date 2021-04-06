<style type="text/css">
    .table-sortable tbody tr {
        cursor: move;
    }

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-empire"></i> <?php echo $this->lang->line('front_cms'); ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary" id="holist">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Updates List</h3>
                        <?php
                        if ($this->rbac->hasPrivilege('updates', 'can_add')) {
                            ?>
                            <div class="box-tools pull-right">
                                <a href="<?php echo site_url('admin/front/updates/create'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add'); ?></a>

                            </div>
                        <?php } ?>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="mailbox-controls">
                            <div class="pull-right">
                            </div><!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">

                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('title'); ?></th>
                                        <th><?php echo $this->lang->line('url'); ?></th>
                                        <th>Type</th>
                                        <th>Active</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th class="text-right no-print">
                                            <?php echo $this->lang->line('action'); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($listResult)) {
                                        ?>

                                        <?php
                                    } else {
                                        $count = 1;
                                        foreach ($listResult as $page) {
                                            ?>
                                            <tr id="<?php echo $page["id"]; ?>">

                                                <td class="mailbox-name">
                                                    <a href="#" ><?php echo $page['title'] ?></a>


                                                </td>
                                                <td class="mailbox-name"> <a href="<?php echo base_url() . $page['url'] ?>" target="_blank"><?php echo base_url() . $page['url'] ?></a></td>
                                                <td class="mailbox-name">
                                                   <?php 
                                                       switch($page['update_type']){
                                                          case 1: 
                                                          echo 'Notice Board';
                                                          break;
                                                          case 2: 
                                                          echo 'Governments Orders';
                                                          break;                          
                                                          case 3: 
                                                          echo 'Tenders';
                                                          break;
                                                       }
                                                   ?> 
                                                </td>
                                                <td>
                                                    <?php 
                                                      if($page['to_date']>=date('Y-m-d')){
                                                        echo '<span class="label label-default">Yes</span>';
                                                      }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-m-Y', strtotime($page['from_date'])); ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-m-Y', strtotime($page['to_date'])); ?>
                                                </td>                                                
                                                <td class="mailbox-date pull-right no-print">
                                                    <?php
                                                    if ($this->rbac->hasPrivilege('notice', 'can_edit')) {
                                                        ?>
                                                        <a href="<?php echo site_url('admin/front/updates/edit/' . $page['slug']); ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <?php
                                                    }
                                                    if ($this->rbac->hasPrivilege('notice', 'can_delete')) {
                                                        ?>
                                                        <a href="<?php echo site_url('admin/front/updates/delete/' . $page['slug']); ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $count++;
                                    }
                                    ?>
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

