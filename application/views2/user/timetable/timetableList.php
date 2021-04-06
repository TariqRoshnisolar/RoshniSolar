<style type="text/css">
    @media print
    {
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
    .print, .print *
    {
        display: none;
    }
    .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td{
        border: 1px solid #dcdcdc;
    }
    .subject_name{
      color:#bf6c15;
      text-align: center;
      font-size: 15px;
    }
    .teacher_name{
      color:#2b589c;
      text-align: center;
      font-size: 15px;
    }
</style>
<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar-times-o"></i> <?php echo $this->lang->line('class_timetable'); ?> </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($result_array)) {
                    ?>
                    <div class="box box-info" id="timetable">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-users"></i> Class Timetable</h3>
                        </div>
                        <div class="box-body">
                            <div class="row print" >
                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-4">
                                        <center><b><?php echo $this->lang->line('class'); ?>: </b> <span class="cls"></span></center> 
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (!empty($result_array)) {
                                 ?>
                                <div class="table-responsive">
                                    <div class="download_label">Class Timetable</div>
                                    <table class="table table-bordered" style="border: 1px solid #dcdcdc;">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <?php echo "Days"; ?>
                                                </th>
                                                
                                                <?php 
                        $periodlist = [1,2,3,4,5,6,7,8];
                                                foreach ($periodlist as $key => $value) {
                                                    ?>
                                                    <th class="text text-center">
                                                        <?php echo "Period ".$value; ?>
                                                    </th>
                                                <?php }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>



<?php
for($i=1; $i<=6; $i++){
?>

<tr>
<td style="width:70px;height:70px;">
<?php
switch($i){
    case 1:
    echo 'Monday';
    break;
    case 2:
    echo 'Tuesday';
    break;
    case 3:
    echo 'Wednesday';
    break;
    case 4:
    echo 'Thrusday';
    break;
    case 5:
    echo 'Friday';
    break;
    case 6:
    echo 'Saturday';
    break;

}
?>
</td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==1){
        ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==2){
       ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==3){
        ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==4){
        ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==5){
       ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==6){
       ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==7){
        ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>
<td style="width:100px;height:50px;"><?php foreach($gettimetable as $key=>$timetable){
    if($timetable['day_id']==$i && $timetable['period_id']==8){
        ?>
        <div class="subject_name"><?php echo $timetable['subject_name']; ?></div>
        <div class="teacher_name">(<?php echo $timetable['teacher_name'].' '.$timetable['teacher_surname']; ?>)</div>
        <?php
    }
} ?></td>


</tr>
<?php
}
?>
 

                                        </tbody>
                                    </table>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-info"><?php echo $this->lang->line('no_record_found'); ?></div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            
        }
        ?>
    </section>
</div>