<?php $site = getSiteSettings(); ?>
<section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/slide-3.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('recruitment'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('recruitment'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page  bg-light">
      <div class="container">
        <div class="card p-3 mb-3 bg-temp text-white">
            <div class="row">
                <div class="col-6 pt-2"><?php echo $this->lang->line('current_openings'); ?></div>
                <div class="col-6">
                    <?php if($postnames){?>
                    <select class="form-control" name="post_name" id="post_name" onclick="getPostNames(this.value)">
                      <option value=""><?php echo $this->lang->line('choose_post_name'); ?></option>
                      <?php foreach($postnames as $key => $val){ ?>
                        <option value="<?php echo $val['id']; ?>"><?php echo $val['postname']; ?></option>
                      <?php } ?>
                    </select>
                    <?php } ?>
                </div>
            </div>
         </div> 
        <?php if($postnames){?>
        <div class="recAcco">
         <div class="recAcco-list">
            <ul>
              <?php foreach($postnames as $key => $val){ ?>
              <li data-aos="fade-up" class="recruitmentList" id="recruitment_<?php echo $val['id']; ?>">
                <i class="fa fa-bullhorn"></i> 
                <a data-toggle="collapse" class="collapse accoTitle" href="#recAcco-list-1" aria-expanded="true">
                    RECRUITMENT OF <?php echo strtoupper($val['postname']); ?> 
                    <span class="text-danger"> (Apply Online from <?php echo (isset($site->opening_date)?date('d.m.Y',strtotime($site->opening_date)):'');?> to <?php echo (isset($site->closing_date)?date('d.m.Y',strtotime($site->closing_date)):'');?>)</span> <br>
                    <small class="text-muted">(Advertisement No. CRPD/CBO/2020-21/20)</small> 
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="recAcco-list-1" class="collapse" data-parent=".recAcco-list">
                    <div class="p-3 bg-white">
                        <p> Download Advertisement <a href="#" class="btn btn-primary btn-sm"> English</a> <a href="#" class="btn btn-primary btn-sm"> Hindi</a></p>
                         <a href="<?php echo base_url(); ?>index.php/form" class="btn btn-success btn-sm"> Apply Online</a>
                     </div>
                </div>
              </li>
              <?php } ?>
              <!-- <li data-aos="fade-up" data-aos-delay="100">
                <i class="fa fa-bullhorn"></i> 
                <a data-toggle="collapse" href="#recAcco-list-2" class="collapsed accoTitle">
                    RECRUITMENT OF CIRCLE BASED OFFICERS 
                    <span class="text-danger"> (Apply Online from 27.07.2020 to 16.08.2020)</span> <br>
                    <small class="text-muted">(Advertisement No. CRPD/CBO/2020-21/20)</small> 
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="recAcco-list-2" class="collapse" data-parent=".recAcco-list">
                    <div class="p-3 bg-white">
                        <p> Download Advertisement <a href="#" class="btn btn-primary btn-sm"> English</a> <a href="#" class="btn btn-primary btn-sm"> Hindi</a></p>
                         <a href="#" class="btn btn-success btn-sm"> Apply Online</a>
                     </div>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="fa fa-bullhorn"></i> 
                <a data-toggle="collapse" href="#recAcco-list-3" class="collapsed accoTitle">
                    RECRUITMENT OF CIRCLE BASED OFFICERS 
                    <span class="text-danger"> (Apply Online from 27.07.2020 to 16.08.2020)</span> <br>
                    <small class="text-muted">(Advertisement No. CRPD/CBO/2020-21/20)</small> 
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="recAcco-list-3" class="collapse" data-parent=".recAcco-list">
                    <div class="p-3 bg-white">
                        <p> Download Advertisement <a href="#" class="btn btn-primary btn-sm"> English</a> <a href="#" class="btn btn-primary btn-sm"> Hindi</a></p>
                         <a href="#" class="btn btn-success btn-sm"> Apply Online</a>
                     </div>
                </div>
              </li>   -->
            </ul>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>

    <script type="text/javascript">
      function getPostNames(id=''){
        if(id !=''){
          $('.recruitmentList').css('display','none');
          $('#recruitment_'+id).css('display','block');
        }
      }
    </script>