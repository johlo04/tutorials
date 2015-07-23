<?php
/**
 * Created by PhpStorm.
 * User: jerielle14
 * Date: 6/22/2015
 * Time: 2:44 PM
 */

class Model_Tutorial extends CI_Model {
	
	public function getAllArticle() {
		
		$query = $this->db->query("SELECT * FROM articles");
		
		if($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
		
	}
	
	public function getAllNote() {
		
		$query = $this->db->query("SELECT * FROM note");
		
		if($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
		
	}
	
	public function saveNote($subject, $message, $sender) {
		
		$sql = "INSERT INTO note SET subject = '" . $subject . "', writer = '" . $writer . "', message = '" . $message . "', date_added = NOW(), date_modified = NOW()";
		$query = $this->db->query($sql);
		
		if($query) {
			return true;
		} else {
			return false;
		}
		
	}
	
	public function saveQuotation($header = array(), $agreement, $data_array = array(), $totals = array()) {

		//insert quotatio header
		$sqlInsertQuotationHeader = "INSERT INTO quotation SET reference_no = " . $this->db->escape($header['reference']) . ", project_name = " . $this->db->escape($header['project_name']) . ", receiver_name = " . $this->db->escape($header['receiver']) . ", address = " . $this->db->escape($header['address']) . ", project_date = " . $this->db->escape($header['date_started']) . "";
		$queryInsetQuotationHeader = $this->db->query($sqlInsertQuotationHeader);

		$quotationID = $this->db->insert_id();

		//insert agreement
		$sqlInsertQuotationAgreement = "INSERT INTO quotation_agreement SET quotation_id = " . (int)$quotationID . ", agreement = \"" . htmlspecialchars($agreement) . "\"";
		$queryInsertQuotationAgreement = $this->db->query($sqlInsertQuotationAgreement);

		//insert list content
		foreach($data_array as $values) {
			
			$note = isset($values['note']) ? $values['note'] : '';

			$sqlInsertHeader = "INSERT INTO particular_header SET particular_name = " . $this->db->escape($values['particular_name']) . ",status='1', quotation_id = " . (int)$quotationID . ", note = " . $this->db->escape($note) . "";
			$insertHeader = $this->db->query($sqlInsertHeader);
			
			$quotation_id = $this->db->insert_id();
			
			foreach($values['child_label']['items'] as $value) {
				
				$sqlInsertQuotationItems = "INSERT INTO particular_header_items SET 
											particular_header_id='" . (int)$quotation_id . "', 
											particular_name=" . $this->db->escape($value['particular']) . ", 
											unit='" . (int)$value['unit'] . "', 
											unit_label = " . $this->db->escape($value['unit_label']) . ",
											unit_price = " . (int)$value['unit_price'] . ",
											unit_subtotal = " . $value['unit'] * $value['unit_price'] . "";
				
				$insertContent = $this->db->query($sqlInsertQuotationItems);
				
			}
			
		}

		//insert totals
		$sqlInsertQuotationTotals = "INSERT INTO quotation_totals SET quotation_id = " . (int)$quotationID . ", subtotals = " . $totals[0]['subtotals'] . ", vat_rate = " . $totals[0]['vat_rate'] . ", grand_total = " . $totals[0]['grandtotal'] . "";
		$queryInsertQuotationTotals = $this->db->query($sqlInsertQuotationTotals);
		
	}

	public function updateQuotation($header = array(), $agreement, $data_array = array(), $totals = array(), $id) {
		
		//quotation ID
		$selectParentID = $this->db->query("SELECT id FROM quotation WHERE project_id = '" . (int)$id . "'");
		$parentID = $selectParentID->row_array();
		
		//update quotation header
		$sqlUpdateHeader = 'UPDATE quotation SET reference_no = ' . $this->db->escape($header['reference']) . ", project_name = " . $this->db->escape($header['project_name']) . ", receiver_name = " . $this->db->escape($header['receiver']) . ", address = " . $this->db->escape($header['address']) . ", project_date = " . $this->db->escape($header['date_started']) . " WHERE project_id = " . (int)$id . "";
		$queryUpdateHeader = $this->db->query($sqlUpdateHeader);
		
		//update agreement
		$sqlUpdateAgreement = "UPDATE quotation_agreement SET agreement = \"" . htmlspecialchars($agreement) . "\" WHERE quotation_id = " . (int)$parentID['id'] . "";
		$queryUpdateAgreement = $this->db->query($sqlUpdateAgreement);
		
		//remove and reinsert
		if($selectParentID->num_rows()) {
			
			//get parent particular ID
			$getParentParticularID = $this->db->query("SELECT id FROM particular_header WHERE quotation_id = " . $parentID['id']);
			$parentParticularID = $getParentParticularID->result_array();
			
			//remove childs
			foreach($parentParticularID as $ids) {
				$deleteChildParticular = $this->db->query("DELETE FROM particular_header_items WHERE particular_header_id = '" . (int)$ids['id'] . "'");
			}

			//remove parent
			$deleteParentParticular = $this->db->query("DELETE FROM particular_header WHERE quotation_id = '" . (int)$parentID['id'] . "'");
			
		} else {
			
			$deleteParentParticular = $this->db->query("DELETE FROM particular_header WHERE quotation_id = '" . (int)$parentID['id'] . "'");
			
		}

		foreach($data_array as $values) {
			
			$sqlInsertHeader = "INSERT INTO particular_header SET quotation_id = '" . (int)$parentID['id'] . "',particular_name = " . $this->db->escape($values['particular_name']) . ",status='1', note=" . $this->db->escape($values['note']);
			$insertHeader = $this->db->query($sqlInsertHeader);
			
			$quotation_id = $this->db->insert_id();
			
			foreach($values['child_label']['items'] as $value) {
				
				$sqlInsertQuotationItems = "INSERT INTO particular_header_items SET 
											particular_header_id='" . (int)$quotation_id . "', 
											particular_name=" . $this->db->escape($value['particular']) . ", 
											unit='" . (int)$value['unit'] . "', 
											unit_label = " . $this->db->escape($value['unit_label']) . ",
											unit_price = " . (int)$value['unit_price'] . ",
											unit_subtotal = " . $value['unit'] * $value['unit_price'] . "";
				
				$insertContent = $this->db->query($sqlInsertQuotationItems);
				
			}
			
		}

		$sqlInsertQuotationTotals = "UPDATE quotation_totals SET subtotals = " . $totals[0]['subtotals'] . ", vat_rate = " . $totals[0]['vat_rate'] . ", grand_total = " . $totals[0]['grandtotal'] . " WHERE quotation_id = " . (int)$parentID['id'];
		$queryInsertQuotationTotals = $this->db->query($sqlInsertQuotationTotals);
		
		/*
		//remove and reinsert
		$selectParentID = $this->db->query("SELECT id FROM particular_header WHERE project_id = '" . (int)$id . "'");

		if($selectParentID->num_rows()) {

			//remove child
			foreach($selectParentID->result_array() as $ids) {
				$deleteChildParticular = $this->db->query("DELETE FROM particular_header_items WHERE particular_header_id = '" . (int)$ids['id'] . "'");
			}

			//remove parent
			$deleteParentParticular = $this->db->query("DELETE FROM particular_header WHERE project_id = '" . (int)$id . "'");

		} else {	
			$deleteParentParticular = $this->db->query("DELETE FROM particular_header WHERE project_id = '" . (int)$id . "'");
		}

		foreach($data_array as $values) {
			
			$sqlInsertHeader = "INSERT INTO particular_header SET project_id = '" . (int)$id . "',particular_name = " . $this->db->escape($values['particular_name']) . ",status='1'";
			$insertHeader = $this->db->query($sqlInsertHeader);
			
			$quotation_id = $this->db->insert_id();
			
			foreach($values['child_label']['items'] as $value) {
				
				$sqlInsertQuotationItems = "INSERT INTO particular_header_items SET 
											particular_header_id='" . (int)$quotation_id . "', 
											particular_name=" . $this->db->escape($value['particular']) . ", 
											unit='" . (int)$value['unit'] . "', 
											unit_label = " . $this->db->escape($value['unit_label']) . ",
											unit_price = " . (int)$value['unit_price'] . ",
											unit_subtotal = " . $value['unit'] * $value['unit_price'] . "";
				
				$insertContent = $this->db->query($sqlInsertQuotationItems);
				
			}
			
		}
		*/

	}

	public function getProjectList($limit, $start) {

		$this->db->limit($limit, $start);
		$query = $this->db->get('projects');

		if($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
		

	}

	public function getTotalProjectList() {

		$query = $this->db->query("SELECT COUNT(*) AS total FROM projects");

		if($query->num_rows()) {
			return $query->row_array();
		} else {
			return array();
		}

	}

	public function getQuotationInfo($id) {

		$sqlGetQuotationHeader = "SELECT * FROM quotation WHERE project_id = " . (int)$id . "";
		$querygetQuotationHeader = $this->db->query($sqlGetQuotationHeader);

		return $querygetQuotationHeader->row_array();

	}

	public function getQuotationList($id) {

		$quotation_list = array();
  
		// $sqlGetHeader = "SELECT * FROM particular_header WHERE project_id = '" . (int)$id . "'";
		// $queryGetheader = $this->db->query($sqlGetHeader);

		$sqlQuotation = "SELECT id, project_id FROM quotation WHERE project_id = '" . (int)$id . "'";
		$queryQuotationInfo = $this->db->query($sqlQuotation);
		$resultQuotationInfo = $queryQuotationInfo->row_array();

		$sqlGetHeader = "SELECT * FROM particular_header WHERE quotation_id = '" . (int)$resultQuotationInfo['id'] . "'";
		$queryGetheader = $this->db->query($sqlGetHeader);

		foreach($queryGetheader->result_array() as $list_header) {

			$queryGetList = $this->db->query("SELECT * FROM particular_header_items WHERE particular_header_id = '" . (int)$list_header['id'] . "'");

			$quot = array();

			foreach($queryGetList->result_array() as $list) {
				$quot[] = array(
					'particular' => $list['particular_name'],
					'unit' => (int)$list['unit'],
					'unit_label' => $list['unit_label'],
					'unit_price' => (float)$list['unit_price'],
					'subtotal' => $list['unit_subtotal'],
					'sublevel' => array(
						'items' => array()
					)
				);
			}

			$quotation_list['items'][] = array(
				'particular_name' => $list_header['particular_name'],
				'child_label' => array(
					'items' => $quot
				),
				'note' => $list_header['note']
			);
		}

		return $quotation_list;

	}
	
	public function getQuotationAgreement($project_id) {
		
		$sqlGetQuotationAgreement = "SELECT qa.agreement AS agreement 
									FROM quotation AS q 
									LEFT JOIN quotation_agreement AS qa
									ON(q.id = qa.quotation_id)
									WHERE q.project_id = " . (int)$project_id . "";
		$queryGetQuotationAgreement = $this->db->query($sqlGetQuotationAgreement);
		
		return $queryGetQuotationAgreement->row_array();
		
	}

	public function getQuotationTotals($quotation_id) {

		$sqlGetQuotationTotals = "SELECT * FROM quotation_totals WHERE quotation_id = " . (int)$quotation_id . "";
		$queryGetQuotationTotals = $this->db->query($sqlGetQuotationTotals);

		return $queryGetQuotationTotals->row_array();
		
	}

}