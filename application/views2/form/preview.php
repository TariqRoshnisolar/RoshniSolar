<?php
// echo "<pre>";
// print_r($login_user_data);
// echo "</pre>";
?>
<?php $base_assets_url = '/backend/themes/default/'; ?>
<style>
@media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
  .wrapper{
    width:950px;
    border: 0 !important;
    overflow-x: auto;
}
    html, body {
      height:100vh; 
      margin: 0 !important; 
      padding: 0 !important;
      overflow: hidden;
    }
}
.wrapper{
    width:950px;
    border: 1px solid gray;
    overflow-x: auto;
}
.logoforpreview{
    width: 300px;
}
.header{
    width:900px;
    margin:0 auto;
}
.dates{
    width:100px;
    display: inline-block;
}
.heading{
    width: 783px;
    text-align: center;
    display: inline-block;
}
.logodiv{
    margin-left: 18px;
    width: 300px;
}
.heading1{
    width:940px;
    text-align: center;
}
.info{
    width:650px;
}
.sidephoto{
    width:200px;
    float: right;
}
.middleinfo{
    width:900px;
    margin:0 auto;
}
.maininfo{
    float: left;
    width: 650px;
}
.leftinfo{
    width: 47%;
    text-align: left;
    display: inline-block;
}
.rightinfo{
    /*text-align: right;*/
    display: inline-block;
}
.middledot{
    margin-left: 10px;
    margin-right: 10px;
    display: inline-block;
}
.languagetbl{
    border: 1px solid gray;
    width: 590px;
    margin-top: 20px;
}
.languagetbl thead{
    background-color: #e2e2e2;
}
.languagetbl tr td, .languagetbl tr th{
    padding: 8px;
}
.fullwidth{
    padding-left: 27px;
    padding-right: 27px;
    padding-top: 20px;
}
.i_agree{
    font-size: 17px;
    font-weight: bold;
}
.declaration{
    text-align: justify;
}
.signature{
    text-align: right;
}
.datetoday{
    margin-top: -55px;
}
</style>
                <div class="form_part">

<div class="wrapper" id="candicate_data">
<br>

<div class="logodiv">
    <img class="logoforpreview" src="http://www.surveyofindia.gov.in/logo/logo.jpg" style="width: 15%;"/>
</div>



<div class="heading1">
    <h4>
Application Form
</h4>
</div>



<div class="middleinfo">

<?php
if(isset($login_user_data) && !empty($login_user_data)){
    $data = $login_user_data;
?>
<div class="maininfo">
<div class="info">
    <div class="leftinfo"><b>Application Number</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['application_no']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Applied Posts</b><br />
        &nbsp;
    </div>
    <span class="middledot">:<br />
        &nbsp;
    </span>
    <div class="rightinfo"><?php
        if(isset($data['applied_posts']) && !empty($data['applied_posts'])){
            $count = 1;
            foreach($data['applied_posts'] as $applied_posts){
                echo $count.'. '.$applied_posts['postname'];
                echo "<br />";
                $count++;
            }
        }
        ?>
    </div>
</div>

<div class="info">
    <div class="leftinfo"><b>Full Name</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo">
        <?php echo $data['f_name'].' '; ?>
        <?php
        if(isset($data['m_name'])){
            echo $data['m_name'].' ';
        }
        ?>
        <?php echo $data['l_name']; ?>
        </div>
</div>

<div class="info">
    <div class="leftinfo"><b>Mobile Number</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['phone_no']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Email Id</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['email_id']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Prefered Job State</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['jobstate_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Category</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['category_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Religion</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['religion_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Pan Card Number</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['pancard']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Aadhaar Number</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['aadharno']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Date of Birth</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo date('d-M-Y',strtotime($data['dob'])); ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Gender</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['gender_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Marital Status</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['maritalstatus_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Father's Name</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['father_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Mother's Name</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['mother_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Spouse's Name</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['spouse_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Have Skill India Certificate?</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo ($data['have_certificates']==1) ? 'Yes':'No' ; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Passing Year</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['passing_year']; ?></div>
</div>

<br>
<h4>Present Address</h4>
<div class="info">
    <div class="leftinfo"><b>Address Line 1</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['present_addressline1']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Address Line 2</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['present_addressline2']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>State</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['present_state_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>District</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['present_district']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Pin Code</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['present_pincode']; ?></div>
</div>

<br>
<h4>Permanent Address</h4>
<div class="info">
    <div class="leftinfo"><b>Address Line 1</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['permanent_addressline1']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Address Line 2</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['permanent_addressline2']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>State</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['permanent_state_name']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>District</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['permanent_district']; ?></div>
</div>

<div class="info">
    <div class="leftinfo"><b>Pin Code</b></div>
    <span class="middledot">:</span>
    <div class="rightinfo"><?php echo $data['permanent_pincode']; ?></div>
</div>


<h4>Educational Qualification</h4>
<div class="info">
<table class="languagetbl">
        <thead>
            <tr>
                <th>Degree/Course</th>
                <th>Name of Institution /College</th>
                <th>Passing Year</th>
                <th>% of Marks</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php echo '<pre>'; print_r($data); ?> -->
            <tr>
                <td><?php echo $data['degree_name']; ?></td>
                <td><?php echo $data['university']; ?></td>
                <td><?php echo $data['passing_year']; ?></td>
                <td><?php echo $data['marks']; ?></td>
                <td><?php echo ($data['result']==1) ? 'Passed':'Appeared' ; ?></td>
            </tr>
            
            <!-- <tr>
                <td><?php echo $data['degree_name']; ?></td>
                <td><?php echo $data['university']; ?></td>
                <td><?php echo $data['passing_year']; ?></td>
                <td><?php echo $data['marks']; ?></td>
                <td><?php echo ($data['result']==1) ? 'Passed':'Appeared' ; ?></td>
            </tr>
            <tr>
                <td><?php echo $data['degree_name']; ?></td>
                <td><?php echo $data['university']; ?></td>
                <td><?php echo $data['passing_year']; ?></td>
                <td><?php echo $data['marks']; ?></td>
                <td><?php echo ($data['result']==1) ? 'Passed':'Appeared' ; ?></td>
            </tr> -->
        </tbody>
    </table>
</div>


<h4>Other Details</h4>
<div class="info">
    <table class="languagetbl">
        <thead>
            <tr><th>Languages Known</th><th>Read</th><th>Write</th><th>Speak</th></tr>
        </thead>
        <tbody>
            <?php
            if(isset($data['user_languages']) && !empty($data['user_languages'])){
                foreach($data['user_languages'] as $user_languages){
                    ?>
                    <tr>
                        <td><?php echo $user_languages['language_name']; ?></td>
                        <td><?php echo ($user_languages['can_read']==1)?'Yes':'No'; ?></td>
                        <td><?php echo ($user_languages['can_write']==1)?'Yes':'No'; ?></td>
                        <td><?php echo ($user_languages['can_speak']==1)?'Yes':'No'; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

</div>

<div class="sidephoto">
    <img style="max-width: 180px;" src="<?php echo base_url().'uploads/user_documents/user_photos/'.$data['photo']; ?>">
</div>
<?php
}
?>

</div>

<div style="clear:both;"></div>

<div class="fullwidth">
<h4>Declaration:</h4>
<div class="declaration">
I hereby declare that all the documents made in this application are True, Complete and Correct to the best of my knowledge and belief. I
understand that in the event of any information being found untrue or incorrect at any stage or I am not satisfying any of the eligibility criteria
stipulated, and also in case of creating influence/undue pressure regarding recruitment shall tantamount to cancellation of my candidature.
</div>
</div>

<div class="fullwidth">
<div class="signature">
<img style="max-width: 140px;" src="<?php echo base_url().'uploads/user_documents/user_signatures/'.$data['signature']; ?>">
<h5>Signature of Applicant</h5>
</div>
<div class="datetoday">
    <div class="i_agree">
<input type="checkbox" name="agree" id="agree" 
    <?php
        if(isset($login_user_data) && $login_user_data['agree_preview']==1){
            echo 'checked';
        }
    ?>
> &nbsp; I Agree
</div>
    <h6>Date : <?php echo date('d-m-Y'); ?></h6>
</div>
</div>
</div>

<br>
<div class="col-md-10">
<button type="button" class="btn btn-dark" id="print_preview" onclick="PrintData()">Print Preview</button>
<div style="float: right;">
<a href="https://www.uvsil.in/form/doc_upload"><button type="button" class="btn btn-danger">Back</button></a>
<button type="button" class="btn btn-dark" id="gotopayment" 
    <?php
        if(isset($login_user_data) && $login_user_data['agree_preview']==1){

        }
        else{
            echo 'disabled';
        }
    ?>
>Go to Payment</button>
</div>
</div>
<br><br>
                </div>

            </div>

        </div>

    </div>

</div>

<script>

$(document).ready(function(){
    $("#agree").click(function(){
        if($("#agree").prop('checked')){
            $("#gotopayment").attr('disabled', false);
        }
        else{
            $("#gotopayment").attr('disabled', true);
        }
    });

    $("#gotopayment").click(function(){
        let agree_preview = 0;
        if($("#agree").prop('checked')){
            agree_preview = 1;
            let registration_step = '5';
            $.ajax({
                url:base_url+'index.php/user/registration/registration/previewagree',
                method:'post',
                data:{agree_preview:agree_preview, registration_step:registration_step},
                success:function(s){
                    console.log(s);
                    if(s['type']){
                        if(s['type']=='success'){
                            $(location).attr('href', base_url+'index.php/form/payment');
                        }
                        else if(s['type']=='error'){
                            toastr.error(s['message']);
                        }
                    }
                }
            });
        }        
    });
});

function PrintData() {
    printElement(document.getElementById("candicate_data"));
    //printElement(document.getElementById("printThisToo"), true, "<hr />");
    window.print();
}

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}
</script>