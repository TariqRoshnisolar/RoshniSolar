<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Cms extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			$this->load->model('form_master_model');
			$this->load->library('email');
			$this->load->library('encrypt');
			//$this->load->model('home_model');
			//$this->load->model('front/cms_model');
			
		}
		
		public function index(){
			
		}
		
		public function getAboutUs(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'About Us','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getMission(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Mission','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getVission(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Vision','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getValues(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Values','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getWhoWeAre(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Who we are','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getWhoWeUs(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Who we us','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getCertificatian(){
			$data = array('viewPage'=>'cms/about-us','pageTitle'=>'Certificatian','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getRecruitment(){
			$data = array('viewPage'=>'cms/recruitment','pageTitle'=>'Recruitment','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$data['postnames'] = $this->form_master_model->getposts();
			$this->load->view('front/template/default',$data);
		}
		
		public function getContactUs(){
			$data = array('viewPage'=>'cms/contact-us','pageTitle'=>'Mission','jsFiles'=>array('cms','locationpicker'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getcareer(){
			$data = array('viewPage'=>'cms/career','pageTitle'=>'career','jsFiles'=>array('cms','locationpicker'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		
		public function contactSaveData(){
			$data = $this->input->post();	
			$storeContact = $this->db->insert('contacts',$data);	
			$getUserEmailTemplate = $this->db->get_where('email',array('code'=>'frontend-contact-us','email_for'=>'admins','status'=>1))->row();
			if($getUserEmailTemplate){
				$pattern = array('{NAME}','{EMAIL}','{SUBJECT}','{MESSAGE}');
				$replacement = array($data['name'],$data['email'],$data['subject'],$data['message']);
				$body = str_replace($pattern,$replacement,$getUserEmailTemplate->content);
				$this->email->from($getUserEmailTemplate->from_email,$getUserEmailTemplate->from_name);
				$this->email->to($orDetails['email']);
				$this->email->set_mailtype('html');
				$this->email->subject($getUserEmailTemplate->subject);
				$this->email->message($body);
				$mail = $this->email->send();
			}
			$return['status'] = '1';
			$return['message'] = $this->lang->line('mail_send_successfully');
			echo json_encode($return);
		}

		public function getOurServices(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Our services','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getAdvantages(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Advantages','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getSolarTechnologySolutions(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Solar Technology solutions','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		public function getRooftopSolar(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Rooftop solar','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		public function getGroundMountedSolar(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Ground Mounted Solar','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		public function getSolarParks(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Solar Parks','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		public function getFloatingSolarSystem(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Floating Solar System','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getBusinessModel(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Business Model','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getCapex(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Capex','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getRescoOpexBoatConsidersPpa(){
			$data = array('viewPage'=>'cms/our-services','pageTitle'=>'Resco Opex Boat Considers Ppa','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getSolarProducts(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Solar Products','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getModules(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Modules','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getMonocrystaline(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Monocrystaline','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getPolycrystaline(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Polycrystaline','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getMonoPerc(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Mono Perc','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getRemoteMonitoring(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Remote Monitoring','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getSolarPumps(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Solar Pumps','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getSolarHeater(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Solar Heater','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getSolarStreetLight(){
			$data = array('viewPage'=>'cms/solar-products','pageTitle'=>'Solar Street Light','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getTermsOfService(){
			$data = array('viewPage'=>'cms/terms-service','pageTitle'=>'Terms Of Service','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getPrivacyPolicy(){
			$data = array('viewPage'=>'cms/privacy-policy','pageTitle'=>'Privacy Policy','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		public function getFeedback(){
			$data = array('viewPage'=>'cms/feedback','pageTitle'=>'Privacy Policy','jsFiles'=>array('cms'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}

		///////******************* End chinmoy work
		
		// new code
		
		public function getSolarpanel(){
			$data = array('viewPage'=>'cms/solar-panel','pageTitle'=>'Solar Panel','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getOngrid(){
			$data = array('viewPage'=>'cms/solar-panel','pageTitle'=>'Solar Panel','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getOffgrid(){
			$data = array('viewPage'=>'cms/solar-panel','pageTitle'=>'Solar Panel','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getHybrid(){
			$data = array('viewPage'=>'cms/solar-panel','pageTitle'=>'Solar Panel','jsFiles'=>array('cms','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-pages','pages'));
			$this->load->view('front/template/default',$data);
		}
		
		public function getInterestrequest()
		{
			$getstates = $this->form_master_model->getstates();
			$getintrest_category = $this->form_master_model->getintrest_category(); 
			
			$data = array(
			'viewPage'=>'cms/interest_request',
			'pageTitle'=>'Solar Panel',
			'getstates'=>$getstates,
			'getintrest_category'=>$getintrest_category,
			'jsFiles'=>array(
			'cms','moment.min',
			'daterangepicker.min'),
			'cssFiles'=>array('daterangepicker'),
			'activeMenus'=>array('all-pages','pages'
			)
			);
			$this->load->view('front/template/default',$data);
		}
		public function getDistributor()
		{ 
			//$getdistributor = $this->form_master_model->getdistributor($_POST['statecd']);
			
			//$output = ''; 
			/* $output .= '<option value="">Select Distribution Company</option>';
				foreach($getdistributor as $row)
				{
				$output .= '<option value="'.$row['id'].'">'.$row['ed_name'].'</option>';
			} */
			
			$getcities = $this->form_master_model->getcities($_POST['statecd']);
			$state = ''; 
			$state .= '<option value="">Select District</option>';
			foreach($getcities as $rows)
			{
				$state .= '<option value="'.$rows['id'].'">'.$rows['name'].'</option>';
			}
			$data =array( 
			'state'=> $state
			);
			echo json_encode($data);
			
		}
		public function getportal_link()
		{ 
			$getportal_link = $this->form_master_model->getportal_link($_POST['elec_distribution_name']);
			echo json_encode($getportal_link); 
		}
		public function postRequest()
		{ 
			$getstateby_id = $this->form_master_model->getstateby_id($_POST['statecd']);
			$getcityby_id = $this->form_master_model->getcityby_id($_POST['distcd']);
			$getcategory_id = $this->form_master_model->getcategory_id($_POST['id_bene_catg']);
			$size = "";
			$area = "";
			$annual_energy = "";
			$avg_tariff = "";
			$landphone_std = "";
			$landphone = "";
			if(isset($_POST['size']))
			{
		 		$size = $_POST['size'];
			}
			if(isset($_POST['area']))
			{
		 		$area = $_POST['area'];
			}
			if(isset($_POST['annual_energy']))
			{
		 		$annual_energy = $_POST['annual_energy'];
			}
			if(isset($_POST['avg_tariff']))
			{
		 		$avg_tariff = $_POST['avg_tariff'];
			}
			if(isset($_POST['landphone_std']) || isset($_POST['landphone']) )
			{
		 		$landphone = $_POST['landphone'];
			}
			
			$subject = 'Welcome To Roshni Solar'; 
			$from = 'dineshpatil3332577@gmail.com';   
			$emailContent = '<div class="table-responsive">  
			<table class="table table-bordered">'; 
			$emailContent .='<tr>  
			<td width="30%"><label>Intrest Category</label></td>  
			<td width="70%">'.$getcategory_id["name"].'</td>  
			</tr>  
			<tr>  
			<td width="30%"><label>State</label></td>  
			<td width="70%">'.$getstateby_id["state"].'</td>  
			</tr>  
			<tr>  
			<td width="30%"><label>Electricity Distribution Company Name</label></td>  
			<td width="70%">'.$_POST["elec_distribution_name"].'</td>  
			</tr>  
			<tr>  
			<td width="30%"><label>Consumer Number from Electricity Bill</label></td>  
			<td width="70%">'.$_POST["elect_consumer_acc"].'</td>  
			</tr> 
			<tr>  
			<td width="30%"><label>Name of the Individual</label></td>  
			<td width="70%">'.$_POST["contact_name"].'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Address of the Individual</label></td>  
			<td width="70%">'.$_POST["address"].'</td>  
			</tr>  
			<tr>  
			<td width="30%"><label>District</label></td>  
			<td width="70%">'.$getcityby_id["name"].'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Pin</label></td>  
			<td width="70%">'.$_POST["pin"].'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Mobile</label></td>  
			<td width="70%">'.$_POST["mobile"].'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Email</label></td>  
			<td width="70%">'.$_POST["email"].'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Land Line phone</label></td>  
			<td width="70%">+'.$landphone_std.' '.$landphone.'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Shadow free Rooftop area available</label></td>  
			<td width="70%">'.$area.'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Size of power plant (in kW)</label></td>  
			<td width="70%">'.$size.'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Average Annual Electricity Consumption (in kWh)</label></td>  
			<td width="70%">'.$annual_energy.'</td>  
			</tr>
			<tr>  
			<td width="30%"><label>Average Tariff paid (in Rs. / kWh)</label></td>  
			<td width="70%">'.$avg_tariff.'</td>  
			</tr></table></div>'; 
			
			$to = $_POST['email']; 
			$headers = 'From: dineshpatil3332577@gmail.com' . "\r\n" .
			'Reply-To: dineshpatil3332577@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			mail($to, $subject, $emailContent, $headers); 
			$this->session->set_flashdata('msg',"Mail has been sent successfully"); 
			$this->session->set_flashdata('color',"green"); 
			redirect('interest_request');
			/* $config['protocol']    = 'smtp';
				$config['smtp_host']    = 'tls://smtp.gmail.com';
				$config['smtp_port']    = '587'; 
				$config['smtp_user']    = 'dineshpatil3332577@gmail.com';     
				$config['smtp_pass']    = 'kareliya@123';  
				
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html';  
				$config['validation'] = TRUE;  
				
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->from($from);
				$this->email->to($_POST["email"]);
				$this->email->subject($subject);
				$this->email->message($emailContent);
			$this->email->send();  */ 
			
			
		}
	}
?>