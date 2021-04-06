<style type="text/css">
  /*Header*/
.fancy .ajax__tab_header
        {
            font-size: 13px;
            font-weight: bold; /*text-align:center;*/
            font-family: sans-serif;
            vertical-align: top;
            cursor: pointer;
        }
        .fancy .ajax__tab_active .ajax__tab_outer
        {
            /* height: 0px;
            text-align: center;
            vertical-align: top; /*  background:url(img/blue_left.jpg) no-repeat left top;*/
        }
        .fancy .ajax__tab_active .ajax__tab_inner, .fancy .ajax__tab_header .ajax__tab_inner
        {
            width: 250px;
            margin-right:5px;
            text-align: center;
            vertical-align: top; /* offset the width of the left image */
        /*  background: url(../Images/blue_right_new.jpg) no-repeat right top;*/
          background: url(../Images/brown_tab.png) no-repeat right top;
        }
        .fancy .ajax__tab_active .ajax__tab_tab, .fancy .ajax__tab_header .ajax__tab_tab
        {
            margin: 3px 0px 20px 0px;
            vertical-align: top; /*text-align:center;*/
        }
        .fancy .ajax__tab_active .ajax__tab_tab
        {
            text-align: center;
            vertical-align: top;
            color: #cccccc;
        }
        .fancy .ajax__tab_body
        {
            margin: 7px 2px 2px 2px;
            padding:2px 2px 2px 2px;
            font-family: verdana,tahoma,helvetica;
            font-size: 10pt;
            border: 1px solid #999999;
            vertical-align: top;
            border-top: 0; /*text-align: center;*/
            border-top: 1px solid #999999;
            height: auto;
        }
       .headng
        {
            font: bold 12px Verdana,Arial,Helvetica,sans-serif;
            color:#003366;
            letter-spacing: 1px;
            margin-bottom:5px;
            text-align: left;
            padding: 2px 2px 2px 7px;
             background: #f7ecdf url(../images/cell2.png) repeat-x;
             background-position: top;
             border-right:solid 1px #F2813D;
             border-left:solid 1px #F2813D
             
             }
    .TFtable{
        width:100%; 
        border-collapse:collapse; 
        font-weight:bold;
    }
    .TFtable td{ 
        padding:7px; border:#4e95f4 1px solid;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size : 12px;
        
        
        
    }
    /* provide some minimal visual accomodation for IE8 and below */
    .TFtable tr{
        background: #FFFACD;
    }
    /*  Define the background color for all the ODD background rows  */
    .TFtable tr:nth-child(odd){ 
        background: #FFFACD;
    }
    /*  Define the background color for all the EVEN background rows  */
    .TFtable tr:nth-child(even){
        background: #FFFFE0;
    }
    
    .name
    {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 13px;
    
    }
</style>
<style type="text/css">
    th{
        font: bold 14px Verdana,Arial,Helvetica,sans-serif;
        color:#003399;
        letter-spacing: 2px;
        margin-bottom:5px;
        text-align: left;
        padding: 6px 6px 6px 12px;
        background: #f7ecdf url(../images/cell2.png) repeat-x;
        background-position: top;
    }
    .style1
    {
        width: 100%;
        border: "0";
        left: 10px;
        padding-left: 0px;
        border-color: #B35E1B;
        -webkit-box-shadow:1px 2px 9px rgba(50, 50, 50, 0.75);
        -moz-box-shadow:1px 2px 9px rgba(50, 50, 50, 0.75);

    } 
    .td {
        color:#003399;     

    }

</style>



<script type="text/javascript">
    $(document).ready(function () {
        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');
            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    })
</script>
<style type ="text/css">    
    .tabcontainer{
            width: 550px;
            margin: 0 auto;            
        }



        ul.tabs{
            margin: 0px;
            padding: 0px;
            list-style: none;
            border: 1px solid #ffffff;
            background-color: #6699ff;
              overflow: hidden;
        }
        ul.tabs li{
            background: none;
            color: #ffffff;
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
            float: left;
            border: 1px solid #ffffff;
        }

        ul.tabs li.current{
            background: #0066cc;
            color: #222;
        }

        .tab-content{
            display: none;
            padding: 8px 15px;
    border: 1px solid #0066cc;
    border-top: none;
        }
        
        ul.tabs li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 5px 12px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tabs li a:hover {background-color: #0066cc; color: black;}

        .tab-content.current{
            display: inherit;
            background-color: #ffffff; color: black;
        }
    
    </style>  


<form method="post" action="<?php echo base_url(); ?>page/keyofficials" id="form1">
    <div class="aspNetHidden">
        <input type="hidden" name="ContentPlaceHolder1_TabContainer1_ClientState" id="ContentPlaceHolder1_TabContainer1_ClientState" value="{&quot;ActiveTabIndex&quot;:0,&quot;TabState&quot;:[true]}" />
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="mPfA+wmsKXpYoK1Bg76Ke8pt8unnFLo+1P/sbgqL8YiQkcPAUGtwLdNfg5h+hx8+ZUIDybf7WQCP0cGAPdRtFeaSrH+54is/wQf7Ot/DvTJkHq96nwiunduym0fC0nQ3ODV36BrodIGiQHJRZWRLNXIhGUUDd3c8NlfBaaSCpcO/tmj7OyvKOVqZPfAZteOSGt+PWyYajaVLCQJbAsd3qhqFOwewhnTOIQi9CjIxpjXPhDlh6Nizev3JpgcqxMr/" />
    </div>

    <script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZAn0GY69x6fFVGAZE00KwsLKlZk0jk-y9I3eMFPVDIJO4CQloC0oT_HxquFSVtCOlA2&amp;t=635793216349294682" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yJisvXuHyHXu5jZ3KMwbBiQ4I6unIoRh0ex9n1KFDbQRdmw1Fmh7IwJYC5Yjk44QBImZTrIcUutmSiVCHLBw5jOlaposkXLGkLIWw1_iNNzejI9DXphetniXrYqL2V4FoEhX-2Zcs0NeQbDElGXe6lc1&amp;t=72e85ccd" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=Jw6tUGWnA15YEa3ai3FadGjAnQH5-8DFFfgd1AZJuo7YKDMQmnyKgRste-AV_bYiAfI6xynwDOfCm1HegFoxYiZPwk9sl5MUZ8tUBSPauqKNJ4yyCw6wWk_N9eCMsFVcsGTDDqzM54ojzjWaLxsVw_33ywMiiLhFqljoo5wdjZk1&amp;t=72e85ccd" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=5h0NtxUlQa8Df2oWXPhUL9b98lG6Zh-xcZWGnor9xZ4huxHz6noX7TeIzvl0JQLAsQ2KhcJvRqmec86gZyNfz6-vEPKzn2-GXxQVszROfKGG9PXS1_5VJXyvzoc10a2tIqjSieu9o66jtHmrC5ifng2&amp;t=ffffffffa6d9deb7" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=I5r_uwF_kmHq3vRnqwJ1AYk751uI9p3hvwZs-qnsmTBzMtAODsB4eN6_zJVvIrY1RIuNohiO0Emlfh1bvx4Xj8jvoHnWnldrzCj1_JaFml9Pt5zldj5X2BkKhVwfqg8HAl00_r8t8v5pBc3NPDoGQV6VuAnuAiwGZfFmhnH_U7s1&amp;t=ffffffffa6d9deb7" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=vIhUl1O-EhLBzhydg0tKhzjFvWYTWsweer1XTHNsJmQoiQgaxrdMS8WS_YgvJq7I70Y-Cc73qJY33J9ySRPritg6iHbRAEXpmtnvQJoyML5EbGg4JXt3KrzgBA9wIXZ3nAaS-nJl8Dqw9SASeEhcEg2&amp;t=ffffffffa6d9deb7" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=a8-5fblyF_ztGy9t8kO_wJnLuS2k_0q1jrekF9DiapIhVEh5fNqu3m6820JZ0uQa2X76VT_4T6NUUqgKXLPWm-IkP_PIEhtKAGd7Lb4Y_EjX68wK1P937w0zDsPwKD_-01CqtylqdSAb4xJ5O8x9oBrRnmHHpU-N72lM5NaszG5X1w-29v9omimvgSc8Zmd80&amp;t=ffffffffa6d9deb7" type="text/javascript"></script>
<div class="aspNetHidden">

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="4F3BD0FE" />
    <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
</div>
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', ['tctl00$ContentPlaceHolder1$UpdatePanel2','ContentPlaceHolder1_UpdatePanel2'], [], [], 90, 'ctl00');
//]]>
</script>




<div >  


    <div class="row head oth_border" style ="background-color:black; margin-left:0px;margin-right:0px">

        <div  >
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <a href="#main_content"><label class="skip skip_border"> &nbsp;&nbsp;Skip to main content &nbsp; &nbsp;</label></a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <input type="text" class="search_textbox" id="search_textbox" name="search_textbox" placeholder="Search- Keyword, Phrase" style="color:#000;">
                <img src="<?php echo base_url(); ?>assets/front/anandadhara/images/search_24.png" class="img in_search" title="Content Search" style="height:auto; width:5%; cursor:pointer;">
                <a href="http://www.google.com/search" rel ="noopener noreferrer" target="_blank" title="Google Search"><img src="<?php echo base_url(); ?>assets/front/anandadhara/images/google_24.png" class="img" style="height:auto; width:5%; "></a>

            </div>
            <div class="col-md-1" >
                <a href="../ProtectedPage/Login.aspx"><label class="skip">Login</label></a>
            </div>
            <div class="col-md-1">
                <input type="button" id="btnincfont" value="A+" style="font-size:.8em" />
                <input type="button" id="btndecfont" value="A-" style="font-size:.8em" />

            </div>



        </div>

    </div>


    <div class="col-md-11" style ="background-color:White;margin-left:4%; margin-right:4% ">




        <!--end of header-->

        <div class="container" >
            <div class="col-md-12" >
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/front/images/TC_KOB.png"  height="152px" />

            </div>

<!--<div class="col-sm-3">
<div class="support">
<i class="fa fa-envelope"></i> wbprd@gmail.com <br>
 <i class="fa fa-phone-square"></i> 1234567890
</div>
</div>-->
</div>




<nav class="navbar navbar-default" role="navigation">

    <div class="container" style ="background:url(<?php echo base_url(); ?>assets/front/images/bg-noise.png) repeat-x; color:white">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!--/.navbar-header-->

        <ul class="nav navbar-nav" >
            <li ><a href="<?php echo base_url(); ?>" >Home</a></li>
            <li><a href="../ProtectedPage/wb_dictor.aspx" rel ="noopener noreferrer">Panchayats Directory</a></li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Schemes<b class="caret"></b></a>                
                <ul class="dropdown-menu">
                  <li><a href="../HtmlPage/srd_HomePage.aspx" rel ="noopener noreferrer">SRD</a></li>
                  <li><a href="../anandadhara/index.aspx" rel ="noopener noreferrer">Anandadhara</a></li>
                  <li><a href="../HtmlPage/sahay_homepage.aspx" rel ="noopener noreferrer">Sahay</a></li>
                  <li><a href="../HtmlPage/STARDPARD.aspx" rel ="noopener noreferrer">Starpard</a></li>
                  <li><a href="../HtmlPage/PMGSY.aspx" rel ="noopener noreferrer"> PMGSY</a></li>
                  <li><a href="../HtmlPage/RHOUSING.aspx" rel ="noopener noreferrer"> Rulal Housing</a></li>
                  <li><a href="../HtmlPage/SSECURITY.aspx" rel ="noopener noreferrer">Social Security</a></li>
                  <li> <a href="#" target="_blank" >ISGPP</a></li>
                  <li><a href="../HtmlPage/Chcmi1.aspx" rel ="noopener noreferrer">CHCMI</a></li>
              </ul>
          </li>


          <li><a href="#">Acts & Rule</a></li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Organisations & Offices<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#" rel ="noopener noreferrer">Directorate</a></li>
              <li><a href="#" rel ="noopener noreferrer">WBSRDA</a></li>
              <li><a href="#" rel ="noopener noreferrer">WBSRLM</a></li>
              <li><a href="#" rel ="noopener noreferrer"> PBRSSM</a></li>
              <li><a href="#" rel ="noopener noreferrer">WBCADC</a></li>
          </ul>
      </li>

      <li><a href="#" rel ="noopener noreferrer">Finance</a></li>
      <li><a href="#">Photo Gallery</a></li>
      <li><a href="#" rel ="noopener noreferrer">Press & Media</a></li>
      <li><a href="../HtmlPage/ContactUs.aspx" rel ="noopener noreferrer">Contact Us</a></li>

      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Contact Us<b class="caret"></b></a>
        <ul class="dropdown-menu">

        </ul>
    </li>
</ul>
</div>
<!--/.navbar-collapse-->
<!--/.navbar-->

</nav>





<!--Navbar-->

<!--/.Navbar-->


<!--/start-footer-section-->





<table class="style1"  cellpadding="0" cellspacing="0" style ="background-color:#ffffff;">
    <tr>
        <td style="padding-left: 0px;" align="left">

            <table style="width: 100%; border-width: 0px;" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <br />
                    </td>
                </tr>
                <tr>
                    <th style="width: 100%; text-align:Center; border-width: 0px;">
                        <span id="ContentPlaceHolder1_Label1">DETAILS OF KEY OFFICIAL </span>
                    </th>
                    <th style="width:0%; text-align: right; border-width: 0px;">

                    </th>
                </tr>
            </table>

            <div style="padding: 20px 10px 5px 10px; background-image: url('<?php echo base_url(); ?>assets/front/Images/cell.gif');
            background-repeat: repeat-x;  font-size: small;">
            <table width="100%" cellpadding="0" cellspacing="0" style="">
                <tr>
                    <td>

                        <div id="ContentPlaceHolder1_UpdatePanel2">


                            <div id="ContentPlaceHolder1_TabContainer1" class="fancy" style="visibility:hidden;">
                                <div id="ContentPlaceHolder1_TabContainer1_header">
                                    <span id="ContentPlaceHolder1_TabContainer1_tbpnluser_tab"><span class="ajax__tab_outer"><span class="ajax__tab_inner"><span class="ajax__tab_tab" id="__tab_ContentPlaceHolder1_TabContainer1_tbpnluser">
                                        Major assignments of Departmental Officers
                                    </span></span></span></span>
                                </div><div id="ContentPlaceHolder1_TabContainer1_body">
                                    <div id="ContentPlaceHolder1_TabContainer1_tbpnluser" class="ajax__tab_panel">

                                        <div id="ContentPlaceHolder1_TabContainer1_tbpnluser_UserReg">

                                            <table align="center" width ="100%" class ="TFtable">
                                                <tr >
                                                    <td style ="width :15px" class ="headng">Sl. No</td >
                                                    <td  style ="width :500px"  align="left" class ="headng">
                                                        Name of The Officers 
                                                    </td>
                                                    <td align="left"class ="headng" style ="width :100px"  colspan ="2" >
                                                        <b>Designation</b>
                                                    </td>

                                                    <td class ="headng" style ="width :400px" >Responsibilites</td>

                                                    <td class ="headng" style ="width :200px">Phone No.</td>

                                                    <td class ="headng" style ="width :100px">Email Id</td>

                                                </tr>



                                                <tr>
                                                    <td  valign ="top">1&nbsp;</td>
                                                    <td align="left"  valign ="top">
                                                        <div class ="name">
                                                        Smt. Choten Dhendup Lama, IAS</div> 
                                                    </td>
                                                    <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                        <td valign ="top" style ="border-left:none!important">
                                                            Secretary in the P&amp;RD Dept. and CEO WBSRLM
                                                        </td>


                                                    </td>
                                                    <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                        Anandadhara(NRLM/SRLM)<br />

                                                    </td>
                                                    <td valign ="top">2335-3711</td>
                                                    <td valign ="top">


                                                        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                                        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                                    </a>





                                                </td>
                                            </tr>


                                            <tr>
                                                <td  valign ="top">2&nbsp;</td>
                                                <td align="left"  valign ="top">
                                                    <div class ="name">
                                                    Dibyendu Sarkar, IAS</div> 
                                                </td>
                                                <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                    <td valign ="top" style ="border-left:none!important">
                                                        Secretary in the P&amp;RD Dept.
                                                    </td>


                                                </td>
                                                <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                    &nbsp;
                                                </td>
                                                <td valign ="top">&nbsp;</td>
                                                <td valign ="top">


                                                    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                                    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                                </a>





                                            </td>
                                        </tr>





                                        <tr>
                                            <td  valign ="top">3</td>
                                            <td align="left"  valign ="top">
                                                <div class ="name">
                                                Debashis Das, IAS</div> 
                                            </td>
                                            <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                <td valign ="top" style ="border-left:none!important">
                                                    Commissioner in P&RD
                                                </td>


                                            </td>
                                            <td width ="10px" valign ="top" style ="border-right:none!important;">
                                                Law and Vigilance<br />

                                            </td>
                                            <td valign ="top">2334-3339</td>
                                            <td valign ="top">


                                                <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                                'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                            ddas4360@gmail.com</a>





                                        </td>
                                    </tr> 

                                    <tr>
                                        <td  valign ="top">4</td>
                                        <td align="left"  valign ="top">
                                            <div class ="name">
                                            Soumya Purkait, IAS</div> 
                                        </td>
                                        <td width ="10px" valign ="top" style ="border-right:none!important;">
                                            <td valign ="top" style ="border-left:none!important">
                                                Commissioner in P&RD
                                            </td>


                                        </td>
                                        <td width ="10px" valign ="top" style ="border-right:none!important;">
                                            Project Director,<br />
                                            ISGPP-II<br />

                                        </td>
                                        <td valign ="top"></td>
                                        <td valign ="top">


                                            <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                            'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                        </a>





                                    </td>
                                </tr>  

                                <tr>
                                    <td  valign ="top">5</td>
                                    <td align="left"  valign ="top">
                                        <div class ="name">
                                        Kaushick Saha, IAS</div> 
                                    </td>
                                    <td width ="10px" valign ="top" style ="border-right:none!important;">
                                        <td valign ="top" style ="border-left:none!important">
                                            Commissioner,MGNREGA
                                        </td>


                                    </td>
                                    <td width ="10px" valign ="top" style ="border-right:none!important;">
                                        Nirmal Bangla/Swatcha Bharat Mission,<br />
                                        Mission Antyodaya,<br />
                                    Mahatma Gandhi National Rural Employment Gurantee Scheme (MGNREGS)</td>
                                    <td valign ="top">2335-6103</td>
                                    <td valign ="top">


                                        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                    </a>

                                    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                                </a>




                            </td>
                        </tr>


                        <tr>
                            <td  valign ="top">6</td>
                            <td align="left"  valign ="top">
                                <div class ="name">
                                Dibyendu Das, WBCS(Exe)</div> 
                            </td>
                            <td width ="10px" valign ="top" style ="border-right:none!important;">
                                <td valign ="top" style ="border-left:none!important">
                                    Special Secretary
                                </td>


                            </td>
                            <td width ="10px" valign ="top" style ="border-right:none!important;">
                                Policy Cell,<br />
                                Administrative Cell,<br />
                                Budget Cell, <br />
                                Medical Cell,<br />
                                STARPARD/Training,<br />
                                Joint BDO Cell,<br />
                                SOMOBYATHI<br />


                            </td>
                            <td valign ="top">2334-3392</td>
                            <td valign ="top">


                                <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                                'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >das614276@gmail.com
                            </a>





                        </td>
                    </tr>

                    <tr>
                        <td  valign ="top">7</td>
                        <td align="left"  valign ="top">
                            <div class ="name">
                            Smt. Suktisita Bhattacharya, WBCS(Exe)</div> 
                        </td>
                        <td width ="10px" valign ="top" style ="border-right:none!important;">
                            <td valign ="top" style ="border-left:none!important">
                                Special Secretary
                            </td>


                        </td>
                        <td width ="10px" valign ="top" style ="border-right:none!important;">
                            Mahatma Gandhi National Rural Employment Gurantee Scheme(MGNREGS),<br />
                            Public Health,<br />


                        </td>
                        <td valign ="top">2335-6162</td>
                        <td valign ="top">


                            <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                            'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >suktisita@gmail.com
                        </a>
                        <br />
                        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >sphcwb@gmail.com
                    </a>



                </td>
            </tr> 

            <tr>
                <td  valign ="top">8</td>
                <td align="left"  valign ="top">
                    <div class ="name">
                    Soumyajit Das, WBCS(Exe)</div> 
                </td>
                <td width ="10px" valign ="top" style ="border-right:none!important;">
                    <td valign ="top" style ="border-left:none!important">
                        Joint Secretary
                    </td>


                </td>
                <td width ="10px" valign ="top" style ="border-right:none!important;">
                    Block/PRI Cell,<br />
                    Comprehensive Area Development Corporation(CADC)

                </td>
                <td valign ="top">2334-6130</td>
                <td valign ="top">


                    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
                </a>





            </td>
        </tr> 

        <tr>
            <td  valign ="top">9</td>
            <td align="left"  valign ="top">
                <div class ="name">
                Smt. Manirupa Bhattacharya, WBCS(Exe)</div> 
            </td>
            <td width ="10px" valign ="top" style ="border-right:none!important;">
                <td valign ="top" style ="border-left:none!important">
                    Joint Secretary
                </td>


            </td>
            <td width ="10px" valign ="top" style ="border-right:none!important;">
                Establishment Cell<br />


            </td>
            <td valign ="top">&nbsp;</td>
            <td valign ="top">


                <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
                'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
            </a>
            <br />
            <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
            'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
        </a>




    </td>
</tr>

<tr>
    <td  valign ="top">10</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Dipanjan Bhattacharyya, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Joint Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Rural Infrastructure-Rural Connectivity/RIDF/Engineering/JRY Cell, <br />
        e-Panchayats and Computerization Cell ,<br />
        MIS and Statistical Cell<br />

    </td>
    <td valign ="top">2334-3378 <br /> 2335-0026</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >wbsrdacal@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >prdridf@gmail.com
</a>




</td>
</tr>

<tr>
    <td  valign ="top">11</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Smt. Debahuti Bhowmik, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Joint Secretary & Additional Director at P&RD Directorate
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        In Charge of P&amp;RD Directorate/Social Security Pension

    </td>
    <td valign ="top">2334-3357</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >debahutibhowmik09@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >wbpanch.directorate@gmail.com
</a>




</td>
</tr>

<tr>
    <td  valign ="top">12</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Smt. Sonali Dutta Roy, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Joint Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Mission Nirmal Bangla,<br />

        Rural Housing Cell, <br />


    </td>
    <td valign ="top">2334-3343</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >sonaldattaray@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >wbstatecoordinator.sanitation@gmail.com
</a>




</td>
</tr>




<tr>
    <td  valign ="top">13</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Anjan Chakrabarti, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Joint Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Anandadhara (NRLM) Cell,<br />
        e-Governance through Common Service Centre,<br />
        Finance Commission/CCA Cell, <br />
        SECC<br />

    </td>
    <td valign ="top"></td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">14</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Jagadish Ch.Ghosh, W.B.A & A.S</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Financial Advisor
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Audit &amp; Accounts Cell<br />


    </td>
    <td valign ="top">2334-3394</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">15</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Nirod Baran Mandal,W.B.S.S</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            joint Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Law and Vigilance Cell<br />


    </td>
    <td valign ="top">2334-3328</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>



<tr>
    <td  valign ="top">16</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Smt. Indrani Sarkar, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Deputy Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Mahatma Gandhi National Rural Employment Gurantee Scheme (MGNREGS) Cell,<br />
        Policy matters<br />


    </td>
    <td valign ="top">2335-4540</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">17</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Soumyajit Dutta, WBCS(Exe)</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Officer on Special Duty
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Administrative Officer, STARPARD,<br />
        Jt. BDO Cell,<br />
        Policy Cell, <br />
        Training Cell, <br />
        BRAIPRD related matters,<br />
        Media Monitoring Cell, <br /> 
        Rashtriya Gram swaraj Abhiyan,<br />
        Gram Panchayat Development Plan,<br />
        Report Return to CMO and Office of the CS, WB
    </td>
    <td valign ="top">2334-6170</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">18</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Amal Kanti Mandal</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Chief Engineer(Civil)
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2334-6162</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >chiefengg.prd@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">19</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Bishwanath Acharya</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Superintending Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6608</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >se.pnrd.hq@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">20</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Subrata Manna</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Superintending Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6611</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >msubrata91@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">21</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Arun Kumar Roy</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Superintending Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6611</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >msubrata91@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">22</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Santanu Kundu</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Executive Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6612</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >prdridfcell@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">23</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Goutam Roy</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Executive Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6610</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >wb-itno@pmgsy.nic.in
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">24</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Arnab Biswas</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Executive Engineer 
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Engineering Cell,P&amp;RD<br />


    </td>
    <td valign ="top">2340-6605</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >wbsrda_maintenance@rediffmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>



<tr>
    <td  valign ="top">25</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Sandip Kumar Mandal,W.B.A & A.S</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Deputy Financial Advisor
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Adviser to finance matter of WBSRDA,P&amp;RD<br />


    </td>
    <td valign ="top">2334-0058</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >mandalsandip1967@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>

<tr>
    <td  valign ="top">26</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Partha Basu,W.B.A & A.S</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Financial Controller
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Controller of Finance,WBSRDA,P&amp;RD<br />


    </td>
    <td valign ="top">2334-3373</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >fcwbsrda12@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>



<tr>
    <td  valign ="top">27</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Smt. Minakshi Das, WBSS</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Deputy Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Supporting charge of Medical Cell,<br />
    Service matters of employee of HQ(above Grade Pay 5400 upto 6600</td>
    <td valign ="top">2340-6532</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>




<tr>
    <td  valign ="top">28</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Ajoy Das, WBSS</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Assistant Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        Supporting charge of management,<br />
        Service matters of employee of HQ(above Grade Pay 5400 upto 6600),<br />
        Budget matters,<br />
    </td>
    <td valign ="top">2340-6504</td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >ajoydas1963@gmail.com
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>


<tr>
    <td  valign ="top">29</td>
    <td align="left"  valign ="top">
        <div class ="name">
        Sudip Bhattacharya, WBSS</div> 
    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        <td valign ="top" style ="border-left:none!important">
            Assistant Secretary
        </td>


    </td>
    <td width ="10px" valign ="top" style ="border-right:none!important;">
        SPIO of the Department,<br />
        Supporting charge of Block Establishment,<br />

    </td>
    <td valign ="top"></td>
    <td valign ="top">


        <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    </a>
    <br />
    <a href="http://www.gmail.com/" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
</a>




</td>
</tr>


</table>
</div>

</div>
















</div>
</div>
</div>

</div>
</td>
</tr>
</table>
</div>

</td>
</tr>
</table>

<div class="copyright" style ="background-color:white;margin-top:20px">



    <hr style ="margin-top: 5px ;
    margin-bottom: 5px ;
    border: 0;
    border-top: 2px solid #197cc5 ;"/>	

    <div class="container">
        <div class="col-md-12">

            <div class="col-md-10">
                <a href="<?php echo base_url(); ?>" rel ="noopener noreferrer" title="home">Home</a>&nbsp;|&nbsp;
                <a href="#" rel ="noopener noreferrer"  title="Site Map">Site Map</a>&nbsp;|&nbsp;
                <a href="#" rel ="noopener noreferrer"  title="About the Portal">About the Portal</a>&nbsp;|&nbsp;
                <a href="contact_us.aspx" rel ="noopener noreferrer" title="Contact Us">Contact Us</a>&nbsp;|&nbsp;
                <a href="#" rel ="noopener noreferrer"  title="Downloads">Downloads</a>
            </div>
            <div class="col-md-2">

                <a href="westbengal_map.aspx" rel ="noopener noreferrer" title="West Bengal Map"><img src="<?php echo base_url(); ?>assets/front/anandadhara/images/westbengal_map_logo.jpg" style="height:50px;width:153px; "></a>
            </div>

        </div>
        <div class="col-md-12">
            <br>

            <p style ="font-size: 14px; color:black;
            line-height: 1.42857143;
            ">Disclaimer: Site Contents owned, designed, developed, maintained and updated by the <b>Govt. of West Bengal Rural Development Department, </b>. Official Site of Rural Development Department, West Bengal, India </p></div>
        </div>
    </div>

</div>

</div>



<script type="text/javascript">
//<![CDATA[
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.TabPanel, {"headerTab":$get("__tab_ContentPlaceHolder1_TabContainer1_tbpnluser"),"ownerID":"ContentPlaceHolder1_TabContainer1"}, null, {"owner":"ContentPlaceHolder1_TabContainer1"}, $get("ContentPlaceHolder1_TabContainer1_tbpnluser"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.TabContainer, {"activeTabIndex":0,"clientStateField":$get("ContentPlaceHolder1_TabContainer1_ClientState")}, null, null, $get("ContentPlaceHolder1_TabContainer1"));
});
//]]>
</script>
</form>
