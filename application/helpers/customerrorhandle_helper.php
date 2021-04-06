<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function displayerror($e){
	log_message("error", $e->getMessage());
    redirect(base_url('customerror/somethingwrong'));
}


?>