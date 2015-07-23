<?php

	require_once('application/third_party/fpdf17/fpdf.php');

	class PDF extends FPDF {

		public function Header() {

			$this->Image('application/images/flax-logo.png', 10, 6, 30);

		}


		public function BasicTable($header, $content_list) {

			//header
			foreach($header as $col) {
				$this->Cell(40, 5, $col, 1);
			}

			$this->Ln();

			//data
			foreach($content_list['items'] as $parent_value) {

				foreach($parent_value['child_label']['items'] as $child_value) {

				}

				// foreach($parent_value['child_label'] as $child_value) {

				// }

			}

		}

	}

	$pdf = new PDF();

	//table header
	$header = array('No.', 'Particular', 'Unit', 'Unit Label', 'Unit(Price)', 'Unit Price(Php)', '');

	$pdf->AddPage();
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 7);
	$pdf->Cell(10, 5, 'To: ');
	$pdf->Ln();

	$pdf->SetFont('Arial', '', 7);
	$pdf->Cell(5, 5, 'Address: ');
	$pdf->Ln(10);

	$pdf->Header();
	$pdf->BasicTable($header, $content_list);

	$pdf->Output();

?>