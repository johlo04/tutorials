<?php
/**
 * Created by PhpStorm.
 * User: jerielle14
 * Date: 6/22/2015
 * Time: 2:43 PM
 */

class Tutorial extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('custom');
	}
	
	public function index() {
		
		$this->load->view('common/header');
		$this->load->view('templates/hello_world');
		$this->load->view('common/footer');
		
	}
	
	public function ajax() {
		
		$this->load->view('common/header');
		$this->load->view('templates/ajax');
		$this->load->view('common/footer');
		
	}
	
	public function ajaxCall() {
		
		$this->load->view('common/header');
		$this->load->view('templates/ajax_call');
		$this->load->view('common/footer');
		
	}
	
	public function getAjaxData() {
		
		$this->load->model('model_tutorial');
		
		$articles = $this->model_tutorial->getAllArticle();
		
		$data['article_data'] = array();
		
		if(count($articles > 0)) {
			
			foreach($articles as $article) {
				$data['article_data'][] = array(
					'id' => $article['id'],
					'title' => $article['title'],
					'body' => $article['body'],
					'created_at' => $article['created_at'],
					'updated_at' => $article['updated_at']
				);
			}
			
			echo json_encode($data);
			
		}
		
	}
	
	public function eventTrigger() {
		
		$this->load->view('common/header');
		$this->load->view('templates/event_trigger');
		$this->load->view('common/footer');
		
	}
	
	public function dom() {
		
		$this->load->view('common/header');
		$this->load->view('templates/dom');
		$this->load->view('common/footer');
		
	}
	
	public function controller() {
		
		$this->load->view('common/header');
		$this->load->view('templates/controller');
		$this->load->view('common/footer');
		
	}
	
	public function forms() {
		
		$this->load->view('common/header');
		$this->load->view('templates/forms');
		$this->load->view('common/footer');
		
	}
	
	public function validation() {
		
		$this->load->view('common/header');
		$this->load->view('templates/validation');
		$this->load->view('common/footer');
		
	}
	
	public function noteList() {
		
		$this->load->model('model_tutorial');
		
		$getAllNote = $this->model_tutorial->getAllNote();
		
		$data['note_list'] = array();
		
		if($getAllNote) {
			foreach($getAllNote as $note) {
				$data['note_list'][] = array(
					'id' => $note['id'],
					'subject' => $note['subject'],
					'writer' => $note['writer'],
					'message' => $note['message'],
				);
			}
		} else {
			$data['note_list'] = array();
		}
		
		$this->load->view('common/header');
		$this->load->view('templates/note_list', $data);
		$this->load->view('common/footer');
		
	}
	
	public function getNoteData() {
		
		$subject = $this->input->post('subject', TRUE);
		$message = $this->input->post('message', TRUE);
		$sender = $this->input->post('sender', TRUE);
		
		$json = array();
		
		$this->load->model('model_tutorial');
		
		$save_state = $this->model_tutorial->saveNote($subject, $message, $sender);
		
		if($save_state) {
			$json['status'] = 1;
		} else {
			$json['status'] = 0;
		}
	
	}
	
	public function directive() {
		
		$this->load->view('common/header');
		$this->load->view('templates/directive');
		$this->load->view('common/footer');
		
	}
	
	public function table() {
		
		$this->load->view('common/header');
		$this->load->view('templates/table');
		$this->load->view('common/footer');
		
	}
	
	public function append() {
		
		$this->load->view('common/header');
		$this->load->view('templates/append_list');
		$this->load->view('common/footer');
		
	}
	
	public function quotation() {
		
		$this->load->view('common/header');
		$this->load->view('templates/quotation_list');
		$this->load->view('common/footer');
		
	}
	
	public function submitQuotation() {
		
		$msc = $this->input->post('msc',true);

		//fd($msc['content']);

		$header = array(
			'receiver'		=>	$msc['receiver'],
			'address'		=>	$msc['address'],
			'reference'		=>	$msc['reference_no'],
			'project_name'	=>	$msc['project_name'],
			'date_started'	=>	$msc['dt']
		);

		$totals = $this->input->post('totals');

		$agreement = html_entity_decode($msc['content']);

		//$subtotal = $msc['subtotal'];

		$input_data = $this->input->post('quotation', true);
		
		$this->load->model('model_tutorial');
		
		$saveQuotation = $this->model_tutorial->saveQuotation($header, $agreement, $input_data, $totals);
		
		$json = array();
		$json['status'] = 1;
		
		return json_encode($json);
		
	}

	public function updateQuotation() {

		// $input_data = $this->input->post('quotation');
		// $id = $this->input->post('id');
		
		// $this->load->model('model_tutorial');
		
		// $updateQuotation = $this->model_tutorial->updateQuotation($input_data, $id);
		
		// $json = array();
		// $json['status'] = 1;
		
		// return json_encode($json);
	
		$project_id = $this->input->post('project_id');
		$msc = $this->input->post('msc',true);

		$header = array(
			'receiver'		=>	$msc['receiver'],
			'address'		=>	$msc['address'],
			'reference'		=>	$msc['reference_no'],
			'project_name'	=>	$msc['project_name'],
			'date_started'	=>	$msc['dt']
		);

		$totals = $this->input->post('totals');

		$agreement = $msc['content'];

		//$subtotal = $msc['subtotal'];

		$input_data = $this->input->post('quotation', true);
		
		$this->load->model('model_tutorial');
		
		$saveQuotation = $this->model_tutorial->updateQuotation($header, $agreement, $input_data, $totals, $project_id);
		
		$json = array();
		$json['status'] = 1;
		
		return json_encode($json);

	}
	
	public function quotation_list() {
		
		$this->load->library('pagination');
		$this->load->model('model_tutorial');

		$countTotalRow = $this->model_tutorial->getTotalProjectList();

		$config = array();
		$config['base_url'] = site_url('/tutorial/quotation_list');
		$config['total_rows'] = $countTotalRow['total'];
		$config['per_page'] = 5;

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->model_tutorial->getProjectList($config['per_page'], $page);

		$data['links'] = $this->pagination->create_links();

		$this->load->view('common/header');
		$this->load->view('templates/list_content', $data);
		$this->load->view('common/footer');
		
	}

	public function project_list() {

		$id = $this->uri->segment(3); //project id
		$this->load->model('model_tutorial');

		$data['id'] = $id;

		//quotation header
		$data['quotation'] = $this->model_tutorial->getQuotationInfo($id);
		$getQuotationID = $this->model_tutorial->getQuotationInfo($id);

		//content list
		$data['result'] = json_encode($this->model_tutorial->getQuotationList($id));
		
		//agreement
		$agreement = $this->model_tutorial->getQuotationAgreement($id);
		
		$test = '<h4><strong><u>TERMS &amp; CONDITION</u></strong></h4> <hr /> <ol> <li>Payment: <ul> <li>50% DP Upon Confimation/Purchase Order</li> <li>40% Upon Initial presentation</li> <li>10% Upon completion of the project</li> </ul> </li> <li>Down payment is non-refundable</li> <li>All prices are subject to change without prior notice</li> <li>Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.</li> <li>Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.</li> <li>Secure and safe warehousing for our material shall be provided at the construction free of charge.</li> <li>At our election we shall be allowed to work overtime</li> <li>We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.</li> <li>Application period shall be agreed upon</li> <li>Please make all payments payable to <u><strong>FLAX INC.</strong></u></li> <li>Processing fees for <u><strong>PERMITS ARE NOT INCLUDED</strong></u></li> </ol> <p>We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,</p> <p>Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.</p> <p>&nbsp;</p> <table border="0" cellpadding="1" cellspacing="1" height="132" style="border: 0px solid rgb(255, 255, 255);" width="1027"> <tbody> <tr> <td>Prepared By:</td> <td>Conforme:</td> </tr> <tr> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td>EVA B. BRILLANTES</td> <td>&nbsp;</td> </tr> <tr> <td>Sr. Accounts &amp; Admin. Manager</td> <td>&nbsp;</td> </tr> <tr> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td>Noted &amp; Approved By:</td> <td>&nbsp;</td> </tr> <tr> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td>&nbsp;</td> <td>&nbsp;</td> </tr> <tr> <td>KORO FUJIWARA</td> <td>&nbsp;</td> </tr> <tr> <td>Creative Director</td> <td>&nbsp;</td> </tr> </tbody> </table> <hr /> <p><span style="font-size:11px;"><span style="line-height: 1;">FLAX INC. (Philippines) Units 407 &amp; 409 Mile Long Building Amorsolo Street, Legaspi Village , Makati City</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">Tel: +632-553-3320 Fax: +632-550-1519 Email: info@flax.ph</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">FLAX LTD. (Hong Kong) Flat A16, 24 /F, Kwan Yick Bldg. Phase III, 271-285 Des Voeux Rd. West, Hong Kong</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk</span></span></p> ';
		
		//fp($test);
		
		$data['agreement'] = sanitize_output(html_entity_decode($agreement['agreement']));
		
		//fd($data['agreement']);

		//totals
		$data['totals'] = $this->model_tutorial->getQuotationTotals($getQuotationID['id']);

		$this->load->view('common/header');
		$this->load->view('templates/quotation_list_view', $data);
		$this->load->view('common/footer');

	}

	public function generatePDF($quotation_id) {


		$id = $quotation_id; //project id
		$this->load->model('model_tutorial');

		$data['id'] = $id;

		//quotation header
		$data['quotation'] = $this->model_tutorial->getQuotationInfo($id);
		$data['getQuotationID'] = $this->model_tutorial->getQuotationInfo($id);

		//content list
		$data['content_list'] = $this->model_tutorial->getQuotationList($id);
		
		//agreement
		$agreement = $this->model_tutorial->getQuotationAgreement($id);
		$data['agreement_content'] = sanitize_output(html_entity_decode($agreement['agreement']));
		

		//totals
		$data['totals'] = $this->model_tutorial->getQuotationTotals($data['getQuotationID']['id']);

		$this->load->view('templates/generate_pdf', $data);

	}

	public function generateExcelTemplate($quotation_id) {


		$id = $quotation_id; //project id
		$this->load->model('model_tutorial');

		$data['id'] = $id;

		//quotation header
		$data['quotation'] = $this->model_tutorial->getQuotationInfo($id);
		$getQuotationID = $this->model_tutorial->getQuotationInfo($id);

		

		//content list
		$content_list = $this->model_tutorial->getQuotationList($id);
		
		//agreement
		$agreement = $this->model_tutorial->getQuotationAgreement($id);
		$agreement_content = sanitize_output(html_entity_decode($agreement['agreement']));
		

		//totals
		$totals = $this->model_tutorial->getQuotationTotals($getQuotationID['id']);

		define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
		date_default_timezone_set('Asia/Manila');

		/** PHPExcel_IOFactory */
		//require_once dirname(__FILE__) . '/../Classes/PHPExcel/IOFactory.php';
		require_once('application/third_party/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');

		echo date('H:i:s') , " Load from Excel5 template" , EOL;
		$objReader = PHPExcel_IOFactory::createReader('Excel5');
		$objPHPExcel = $objReader->load("excel_template/quotation_format.xls");


		echo date('H:i:s') , " Add new data to the template" , EOL;

		$objPHPExcel->getActiveSheet()->setCellValue('B4', $getQuotationID['receiver_name']);
		$objPHPExcel->getActiveSheet()->setCellValue('B5', $getQuotationID['address']);
		$objPHPExcel->getActiveSheet()->setCellValue('H4', $getQuotationID['reference_no']);
		$objPHPExcel->getActiveSheet()->setCellValue('H6', $getQuotationID['project_date']);
		$objPHPExcel->getActiveSheet()->setCellValue('B8', $getQuotationID['project_name']);

		$baseRow = 14;

		$style_header = array(
			'font' => array(
				'bold' => true
			)
		);

		foreach($content_list['items'] as $r => $dataRow) {

			$row = $baseRow + $r;
			$h_counter = $r + 1;

			$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

			$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $h_counter);

			$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $dataRow['particular_name']);
			$objPHPExcel->getActiveSheet()->getStyle('B'.$row)->applyFromArray($style_header);




			//fp($dataRow['child_label']['items']);
			// $objPHPExcel->getActiveSheet()->getHighestRow()
			//fp($objPHPExcel->getActiveSheet()->getHighestRow());

			/*
			foreach($dataRow['child_label']['items'] as $key => $value) { 

				$child_row = $row + $key;
				$child_counter = $child_row + 1;

				$objPHPExcel->getActiveSheet()->insertNewRowBefore($child_row,1);

				$objPHPExcel->getActiveSheet()->setCellValue('A'.$child_row, $row . "." . $child_row);

				$objPHPExcel->getActiveSheet()->setCellValue('B'.$child_row, $value['particular']);
				$objPHPExcel->getActiveSheet()->setCellValue('F'.$child_row, $value['unit']);
				$objPHPExcel->getActiveSheet()->setCellValue('G'.$child_row, $value['unit_label']);
				$objPHPExcel->getActiveSheet()->setCellValue('H'.$child_row, $value['unit_price']);
				$objPHPExcel->getActiveSheet()->setCellValue('I'.$child_row, "=F" . $child_row . "* H" . $child_row);

			}

			$objPHPExcel->getActiveSheet()->removeRow($row-1,1);
			*/
		}

		$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);

		echo date('H:i:s') , " Write to Excel5 format" , EOL;
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save(str_replace('.php', '.xls', __FILE__));
		echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;


		// Echo memory peak usage
		echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

		// Echo done
		echo date('H:i:s') , " Done writing file" , EOL;
		echo 'File has been created in ' , getcwd() , EOL;

		/*****
		// Include PHPExcel
		require_once('application/third_party/PHPExcel-1.8/Classes/PHPExcel.php');

		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();

		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
									 ->setLastModifiedBy("Maarten Balliauw")
									 ->setTitle("Office 2007 XLSX Test Document")
									 ->setSubject("Office 2007 XLSX Test Document")
									 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
									 ->setKeywords("office 2007 openxml php")
									 ->setCategory("Test result file");


		// Add some data
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A1', 'Hello')
		            ->setCellValue('B2', 'world!')
		            ->setCellValue('C1', 'Hello')
		            ->setCellValue('D2', 'world!');

		// Miscellaneous glyphs, UTF-8
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A4', 'Miscellaneous glyphs')
		            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

		// Rename worksheet
		$objPHPExcel->getActiveSheet()->setTitle('Simple');


		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);


		// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="01simple.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');

		exit;
		****/

	}
	
	public function promise() {
		
		$this->load->view('common/header');
		$this->load->view('templates/promise_call');
		$this->load->view('common/footer');
		
	}
	
	public function excel() {
		
		$this->load->view('common/header');
		$this->load->view('templates/excel_template');
		
	}

	public function generateExcel() {

		$this->load->view('templates/excel');

	}
	
	
}