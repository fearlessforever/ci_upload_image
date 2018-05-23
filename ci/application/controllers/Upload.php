<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Saya\Upload as U;
class Upload extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('load');
	}
	public function index()
	{
		$this->load->view('upload_view');
	}
	
	public function save()
	{
		$respond=[];
		try{
			if(empty($_FILES['file']))
				throw new Exception('Image file not found');
			
			$settings = [
				'max_width'=>500,
				'max_height'=>500,
				'quality'=>90,
				'folder'=> date('Y').'/'.date('m').'/'.date('d').'/',
				'asset'=> 'assets/upload/' ,
				'mode'=> 'resize' ,
				'file_save'=> md5( $_FILES['file']['name'].time() ) .'.jpg' ,
			];
			U::imageSet( $settings );
			//die(var_dump($_FILES['file']));
			if( !U::generate_image_thumbnail($_FILES['file']['tmp_name'] , $settings['file_save'] )  ){
				throw new Exception('Cant save image');
			}
			$this->load->database();
			
			$this->db->insert('files',[
				'folder'=>$settings['asset'] . $settings['folder'],
				'file_name'=>$settings['file_save'],
			]);
			$respond=['success'=> 'Well done !!!' ];
		}catch(Exception $e){
			$this->output->set_header("HTTP/1.0 400 Bad Request");
			$respond=['error'=> $e->getMessage() ];
		}
		$this->output->set_header('Content-Type: application/json');
		echo json_encode($respond);
	}
}
