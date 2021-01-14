<?php
class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Reg_Model');
	}

	public function savedata()
	{
		$this->load->view('Registration_form');
		if ($this->input->post('save')) 
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');

			$this->Reg_Model->saverecords($name,$email,$mobile);
			echo "Records saved successfully";
			redirect("Registration/displaydata");
		}
	}
	public function displaydata()
	{
		$result['data']=$this->Reg_Model->displaydata();
		$this->load->view('Display_users', $result);
	}

	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->Reg_Model->delete_users($id);
		redirect("Registration/displaydata");
	}



	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['data']= $this->Reg_Model->displayusersbyid($id);
		$this->load->view('Update_users', $result);

		if ($this->input->post('update')) {

			$id=$this->input->get('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');

			$this->Reg_Model->Update_users($id,$name,$email,$mobile);
			echo "Records saved successfully";
		}
	}

	public function report()
	{
		$result['data']=$this->Reg_Model->displaydata();
		$result['Number_of_Employees']=count($result['data']);

		$this->load->view('Dbrecord.php',$result);
		// $this->load->view('Display_users', $result);

		
	}

	public function generate_pdf() {
	$this->load->library('Pdf');
	$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('https://www.roytuts.com');
	$pdf->SetTitle('Sales Information for Products');
	$pdf->SetSubject('Report generated using Codeigniter and TCPDF');
	$pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->SetFont('times', 'BI', 12);
	
	$template = array(
		'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
	);

	$this->table->set_template($template);

	$this->table->set_heading('id', 'name', 'email', 'mobile');
	
	$salesinfo = $this->Reg_Model->displaydata();
		
	foreach ($salesinfo as $sf):
		$this->table->add_row($sf->id, $sf->name, $sf->email, $sf->mobile);
	endforeach;
	
	$html = $this->table->generate();
	$pdf->AddPage();
	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->lastPage();
	$pdf->Output(md5(time()).'.pdf', 'D');
}





}

	







?>