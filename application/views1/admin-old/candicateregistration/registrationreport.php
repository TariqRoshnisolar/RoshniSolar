<style>
table.dataTable.cell-border thead th{
    border-top: 1px solid black !important;
    border-right: 1px solid black !important;
    border-left: 1px solid black !important;
    white-space: nowrap;
}
table.dataTable.cell-border tbody td{
    border: 1px solid black !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: 0.5em 1em;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current{
    border: 1px solid black !important; 
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
    font-size: 14px;
}
div.dataTables_wrapper div.dataTables_info{
    font-size: 14px;
}
.example1 tr.even{
    background-color: #f9f9f9;
}
.example1 tr.even:hover {
    background-color: #efefef;
}
.example1 tr.odd:hover {
    background-color: #efefef;
}
.table.dataTable.cell-border tbody th, table.dataTable.cell-border thead th{
    background: #d2d2d2;
}
.onelinetext{
    white-space: nowrap;
}
.picmodal{
    max-width: 300px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 54px;
  height: 29px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #d65e7be0;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #3ca734cc;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="content-wrapper" style="min-height: 946px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-line-chart"></i> <?php echo $this->lang->line('reports'); ?> <small> <?php echo $this->lang->line('filter_by_name1'); ?></small></h1>
    </section>
    <!-- Main content -->
    <section class="content" >

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-line-chart"></i> Search Report</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <form>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Payment Mode</label>
                                                <select id="payment_mode" name="payment_mode" class="form-control formfield" >
                                                    <option value="">All</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Offline</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Payment Status</label>
                                                <select id="payment_status" name="payment_status" class="form-control formfield" >
                                                    <option value="">All</option>
                                                <?php
                                                if(isset($paymentstatuslist) && !empty($paymentstatuslist)){
                                                    foreach($paymentstatuslist as $paymentstatus){
                                                        ?>
                                                        <option value="<?php echo $paymentstatus['payment_status']; ?>"><?php echo $paymentstatus['payment_status']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Registration Steps</label>
                                                <select id="registration_steps" name="payment_mode" class="form-control formfield" >
                                                    <option value="">All</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">  
                                            <div class="form-group">
                                                <button type="button" id="search" name="search" value="search_filter" class="btn btn-primary pull-right btn-sm checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                            </div>
                                        </div>                                        
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- <div class="box box-primary"> -->
                    <!-- <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-line-chart"></i> Registration Report</h3>
                    </div> -->


            
                <div class="box box-info" style="padding:5px;">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-line-chart"></i> <?php echo form_error('student'); ?> Registration Report</h3>
                    </div>
                    <div class="box-body table-responsive">
					<div class="download_label">Registration Report</div>
                        <table class="table table-bordered cell-border example1" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>App No.</th>
                                    <th>Registration Date</th>
                                    <th>Completed <br>Steps</th>
                                    <th>Name</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>Job State</th>
                                    <th>Payment <br>Mode</th>
                                    <th>Payment <br>Status</th>
                                    <th>Payment Date</th>
                                    <th>Category</th>
                                    <th>Religion</th>
                                    <th>Pancard</th>
                                    <th>Aadhar No</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Marital <br>Status</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Spouse Name</th>
                                    <th>Present Address</th>
                                    <th>Permanent Address</th>
                                    <th>Degree</th>
                                    <th>University</th>
                                    <th>Passing Year</th>
                                    <th>Marks</th>
                                    <th>Result</th>
                                    <th>Photo</th>
                                    <th>Signature</th>
                                    <th>Applied Posts</th>
                                    <th>Languages Known</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="candicate_profile">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
<!--                                 </div>
            </div> -->
        </div>       
</div>  
</section>
</div>

<!-- Show Photo Modal -->
<div class="modal" id="candicatephoto">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Candicate Photo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body picmodal">
        <img id="candicate_photo" src="" style="max-width: 300px;display: block;margin: 0 auto;">
      </div>
    </div>
  </div>
</div>


<!-- Signature Photo Modal -->
<div class="modal" id="candicatesignature">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Candicate Signature</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body picmodal">
        <img id="candicate_signature" src="" style="max-width: 300px;display: block;margin: 0 auto;">
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

    function generatedatatable_example1(classname){
        $('.'+classname).dataTable( {
            "autoWidth": false,
            "ordering": false,
            "pagingType": "full_numbers",
            "iDisplayLength": 10,
            dom: "Bfrtip",
            buttons: [

                {
                    extend: 'copyHtml5',
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                   
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                        
                    }
                },

                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    title: $('.download_label').html(),
                        customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i>',
                    titleAttr: 'Columns',
                    title: $('.download_label').html(),
                    postfixButtons: ['colvisRestore']
                },
            ]
        });        
    }

    function showcandicatephoto(id){
        $("#candicate_photo").attr('src', '');
        let img_name = $("#"+id).attr('data-img');
        $("#candicate_photo").attr('src', img_name);
        $('#candicatephoto').modal('show');
    }

    function showcandicatesignature(id){
        $("#candicate_signature").attr('src', '');
        let img_name = $("#"+id).attr('data-img');
        $("#candicate_signature").attr('src', img_name);
        $('#candicatesignature').modal('show');
    }

    function searchvalidation(){
        if( $("#payment_mode").val() == '' && $("#payment_status").val() == '' ){
            toastr.error("Please select a option to search");
            return false;
        }
    }

    function changestatus(user_id){
        let status = ($("#switchcheckbox_"+user_id).prop('checked'))?0:1;
        $.ajax({
            url:base_url+'admin/registrationreport/changeuserstatus',
            method:'post',
            data:{user_id:user_id, status:status},
            dataType:'json',
            success:function(s){
                //console.log(s);
                if(s['type']){
                    if(s['type']=='success'){
                        toastr.success(s['message']);
                    }
                    else if(s['type']=='error'){
                        toastr.error(s['message']);
                    }                    
                }
            }
        });
    }

    function showcandicatedata(payment_mode='', payment_status='', registration_steps=''){
                $.ajax({
                    url:base_url+'admin/registrationreport/filtercandicatereport',
                    method:'post',
                    dataType:'json',
                    data:{payment_mode:payment_mode, payment_status:payment_status, registration_steps:registration_steps},
                    beforeSend:function(){
                        $("#processloading").removeClass();
                        $("#processloading").addClass('show');
                        destroyDataTable('example1');
                        $("#candicate_profile").empty();
                    },                   
                    success:function(s){
                        //console.log(s);
                        if(s['type']){
                            if(s['type']=='success'){
                                $("#candicate_profile").empty();
                                let candicate_data = ``;
                                $.each(s['message'], function(k,v){

                                let m_name = '';
                                let payment_mode = '';
                                let payment_status = '';
                                let dob = '';
                                let present_address = '';
                                let permanent_address = '';
                                let result = '';
                                let photo_btn = '';
                                let signature_btn = '';
                                let applied_posts = '';  
                                let user_languages = '';
                                let job_state = '';
                                let category_name = '';
                                let religion_name = '';
                                let gender_name = '';
                                let maritalstatus_name = '';
                                let degree_name = '';
                                let registration_date = '';
                                let payment_date = '';
                                let status = '';

                                if(v.status != null && v.status !=null && v.status==0){
                                    status = "checked";
                                }

                                if(v.dob != null && v.dob!='' && v.dob!=0){
                                    dob = moment(v.dob).format('ll');
                                }                                

                                if(v.updated_at != null && v.updated_at!=''){
                                    payment_date = moment(v.updated_at).format('ll');
                                }

                                if(v.created_at != null && v.created_at!=''){
                                    registration_date = moment(v.created_at).format('ll');;
                                }

                                if(v.degree_name!=null){
                                    degree_name = v.degree_name;
                                }

                                if(v.maritalstatus_name!=null){
                                    maritalstatus_name = v.maritalstatus_name;
                                }

                                if(v.gender_name!=null){
                                    gender_name = v.gender_name;
                                }

                                if(v.category_name!=null){
                                    category_name = v.category_name;
                                }

                                if(v.religion_name!=null){
                                    religion_name = v.religion_name;
                                }

                                if(v.jobstate_name!=null){
                                    job_state = v.jobstate_name;
                                }                                  

                                    if(v.m_name!=null && v.m_name!=''){
                                        m_name = v.m_name+' ';
                                    }

                                    if(v.payment_mode==1){
                                        payment_mode = "Online";
                                    }
                                    else if(v.payment_mode==2){
                                        payment_mode = "Offline";
                                    }

                                    if(v.payment_status != '' && v.payment_status != 'Pending'){
                                        payment_status = v.payment_status;
                                    }

                                    if(v.present_addressline1 != ''){
                                        present_address = v.present_addressline1+', '+v.present_addressline2;
                                        if(v.present_district != ''){
                                            present_address += "<br>Distt. - "+v.present_district+"<br>State. - "+v.present_state_name+"<br> Pincode - "+v.present_pincode;
                                        }
                                    }

                                    if(v.permanent_addressline1 != ''){
                                        permanent_address = v.permanent_addressline1+', '+v.permanent_addressline2;
                                        if(v.permanent_district != ''){
                                            permanent_address += "<br>Distt. - "+v.permanent_district+"<br>State. - "+v.permanent_state_name+"<br> Pincode - "+v.permanent_pincode;
                                        }
                                    }                                    

                                    if(v.result == 1){
                                        result = "Passed";
                                    }
                                    else if(v.result == 2){
                                        result = "Appeared";
                                    }

                                    if(v.photo != ''){
                                        let photo_url = base_url+'uploads/user_documents/user_photos/'+v.photo;
                                        photo_btn = `<button type="button" id="photo_${v.user_id}" data-img="${photo_url}" class="btn candidatephotos" onclick="showcandicatephoto(this.id)">View</button>`;
                                    }

                                    if(v.signature != ''){
                                        let signature_url = base_url+'uploads/user_documents/user_signatures/'+v.signature;
                                        signature_btn = `<button type="button" id="signature_${v.user_id}" data-img="${signature_url}" class="btn candidatephotos" onclick="showcandicatesignature(this.id)">View</button>`;                                        
                                    }

                                    if(v.appliedposts != ''){
                                        $.each(v.appliedposts, function(ka,va){
                                            applied_posts += `<span class="onelinetext">${++ka}. ${va.postname}</span><br>`;
                                        });
                                    }  

                                    if(v.userlanguages != ''){
                                        $.each(v.userlanguages, function(kl,vl){
                                            user_languages += `<span class="onelinetext">${vl.language_name}, </span>`;
                                        });
                                    }                                                                      

                                    candicate_data += `
                                    <tr>
                                    <td>${v.application_no}</td>
                                    <td>${registration_date}</td>
                                    <td>${v.registration_step}</td>
                                    <td>
                                    <span class="onelinetext">${v.f_name} ${m_name}${v.l_name}
                                    </span>
                                    </td>
                                    <td>
                                    ${v.phone_no}
                                    </td> 
                                    <td>${v.email_id}</td>
                                    <td><span class="onelinetext">${job_state}</span>
                                    </td>  
                                    <td>
                                    ${payment_mode}
                                    </td>
                                    <td>${payment_status}
                                    </td>
                                    <td>${payment_date}</td>                                
                                    <td>${category_name}
                                    </td> 
                                    <td>${religion_name}</td>
                                    <td>${v.pancard}</td>
                                    <td>${v.aadharno}</td>
                                    <td><span class="onelinetext">${dob}</span></td>
                                    <td>${gender_name}</td>
                                    <td>${maritalstatus_name}</td>
                                    <td><span class="onelinetext">${v.father_name}</span></td>
                                    <td><span class="onelinetext">${v.mother_name}</span></td>
                                    <td><span class="onelinetext">${v.spouse_name}</span></td>
                                    <td><span class="onelinetext">${present_address}</span></td>
                                    <td><span class="onelinetext">${present_address}</span></td>
                                    <td>${degree_name}</td>
                                    <td>${v.university}</td>
                                    <td>${v.passing_year}</td>
                                    <td>${v.marks}</td>
                                    <td>${result}</td>
                                    <td>${photo_btn}</td>                                    
                                    <td>${signature_btn}</td>
                                    <td>${applied_posts}</td> 
                                    <td>${user_languages}</td>
                                    <td>
                                    <label id="switch_${v.user_id}" class="switch">
                                    <input id="switchcheckbox_${v.user_id}" type="checkbox"  onchange="changestatus(${v.user_id})" ${status}>
                                    <span id="switchslider_${v.user_id}" class="slider round"></span>
                                    </label>
                                    </td>                               
                                    </tr>
                                    `;
                                });

                                $("#candicate_profile").append(candicate_data);
                                
                            }
                            else if(s['type']=='error'){
                                toastr.error(s['message']);
                            }
                        }
                    },
                    complete:function(){
                        $("#processloading").removeClass();
                        $("#processloading").addClass('hide');
                        generatedatatable_example1('example1');
                    }
                });         
    }

    

    $(document).ready(function () {   

    showcandicatedata();
    //generatedatatable_example1('example1');

        $("#search").click(function(){
                let payment_mode = $("#payment_mode").val().trim();
                let payment_status = $("#payment_status").val().trim();
                let registration_steps = $("#registration_steps").val().trim();
                showcandicatedata(payment_mode, payment_status, registration_steps);
        });


    $('#candicatephoto').on('hidden.bs.modal', function () {
        $("#candicate_photo").attr('src', '');
    });     

    $('#candicatesignature').on('hidden.bs.modal', function () {
        $("#candicate_signature").attr('src', '');
    });

    });
</script>