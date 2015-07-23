<?php 
	//error reporting
	error_reporting(E_ALL); 
	
	//include path
	ini_set('include_path', ini_get('include_path').';../Classes/');
	
	//php excel
	include('application/libraries/PHPExcel.php'); 
	
	//php excel writer 2007
	include('application/libraries/PHPExcel/Writer/Excel2007.php');
	
	//create new phpexcel object
	echo date('H:i:s') . " Create new PHPExcel object \n";
	$objPHPExcel = new PHPExcel();
	
	//set properties
	echo date('H:i:s') . " Set properties \n";
	$objPHPExcel->getProperties()->setCreator('Rochelle Canale');
	$objPHPExcel->getProperties()->setLastModifiedBy('Rochelle Canale');
	$objPHPExcel->getProperties()->setTitle('My New Excel');
	$objPHPExcel->getProperties()->setSubject('My New Excel Subject');
	$objPHPExcel->getProperties()->setDescription('test document');
	
	//add some data
	echo date('H:i:s') . " Add some data \n";
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Hello');
	$objPHPExcel->getActiveSheet()->SetCellValue('B2', 'World');
	$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Hello');
	$objPHPExcel->getActiveSheet()->SetCellValue('D2', 'World');
	
	//rename sheet
	echo date('H:i:s') . " Rename sheet\n";
	$objPHPExcel->getActiveSheet()->setTitle('Simple');
	
	//save excel 2007
	echo date('H:i:s') . " Write to excel2007 format \n";
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save(str_replace('.php','.xlsx', __FILE__));
	
	//ECHO DONE
	echo date('H:i:s') . " Done writing \r\n";
	
?>