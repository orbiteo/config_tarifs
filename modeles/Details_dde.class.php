<?php
if (!defined('DETAILS_DDE')) {
    define('DETAILS_DDE', 'details_dde');
}
class Details_dde {
	private $details_dde_id;
	private $date_demande;
	private $mkt_digi;
	private $dev_web;
	private $studio;
	private $crm;
	private $ref_nat;
	private $budget_pub;

	public function setdetails_dde_id($pArg = "0") { $this->details_dde_id = $pArg;}
	public function setdate_demande($pArg = "0") { $this->date_demande = $pArg;}
	public function setmkt_digi($pArg = "0") { $this->mkt_digi = $pArg;}
	public function setdev_web($pArg = "0") { $this->dev_web = $pArg;}
	public function setstudio($pArg = "0") { $this->studio = $pArg;}
	public function setcrm($pArg = "0") { $this->crm = $pArg;}
	public function setref_nat($pArg = "0") { $this->ref_nat = $pArg;}
	public function setbudget_pub($pArg = "0") { $this->budget_pub = $pArg;}

	public function getdetails_dde_id() { return $this->details_dde_id; }
	public function getdate_demande() { return $this->date_demande; }
	public function getmkt_digi() { return $this->mkt_digi; }
	public function getdev_web() { return $this->dev_web; }
	public function getstudio() { return $this->studio; }
	public function getcrm() { return $this->crm; }
	public function getref_nat() { return $this->ref_nat; }
	public function getbudget_pub() { return $this->budget_pub; }

	public function readObject($array = array()) {
		$qry = "SELECT * FROM " . DETAILS_DDE;
		$and = " WHERE ";

		$i = 0;

		foreach($this as $key => $value) {
			${"temp".$i} = "get".$key;
			if ($this->${"temp".$i}() != "") {
				$qry .= $and.$key." = '".$this->${"temp".$i}()."' ";
				$and = "AND ";
			}
			$i++;
		}
		$record = Database::select($qry);
		if (count($record[0]) == 0) {
			return array();
		} else {
			$record = $record[0];
			$this->setdetails_dde_id($record['details_dde_id']);
			$this->setdate_demande($record['date_demande']);
			$this->setmkt_digi($record['mkt_digi']);
			$this->setdev_web($record['dev_web']);
			$this->setstudio($record['studio']);
			$this->setcrm($record['crm']);
			$this->setref_nat($record['ref_nat']);
			$this->setbudget_pub($record['budget_pub']);

			return true;
		}
	}
	public static function readArray($array = array())
	{
		$qry = "SELECT *  FROM " . DETAILS_DDE;
		$and = " WHERE ";
		
		foreach($array as $key => $value) {
			if ($array[$key] != "") {
				$qry .= $and.$key." = '".$array[$key]."'" ;
				$and = "AND ";
			}
		}
		
		$qry .= " ORDER BY details_dde_id ASC";
		$recordset     = Database::select($qry);
		$class_objects = array();
		if (is_array($recordset) == true) {
			while (list($i, $record) = each($recordset)) {
				$class_object = new Details_dde();
				
				$class_object->setdetails_dde_id($record['details_dde_id']);
				$class_object->setdate_demande($record['date_demande']);
				$class_object->setmkt_digi($record['mkt_digi']);
				$class_object->setdev_web($record['dev_web']);
				$class_object->setstudio($record['studio']);
				$class_object->setcrm($record['crm']);
				$class_object->setref_nat($record['ref_nat']);
				$class_object->setbudget_pub($record['budget_pub']);
				
				$class_objects[$class_object->getdetails_dde_id()] = $class_object;
			}
		}
		return $class_objects;
	}
	public function insert()
	{
		if ($this->getdetails_dde_id() != '') {
			$qry = "UPDATE " . DETAILS_DDE . " SET 
            details_dde_id = '" . $this->getdetails_dde_id() . 
            "', date_demande = '" . addslashes($this->getdate_demande()) .
            "', mkt_digi = '" . addslashes($this->getmkt_digi()) .
            "', dev_web = '" . addslashes($this->getdev_web()) .
            "', studio = '" . addslashes($this->getstudio()) .
            "', crm = '" . addslashes($this->getcrm()) .
            "', ref_nat = '" . addslashes($this->getref_nat()) .
            "', budget_pub = '" . addslashes($this->getbudget_pub()) .
            "' WHERE details_dde_id = " . $this->getdetails_dde_id() ;
            //echo $qry;
			Database::insert($qry);
		} else {
			$qry = "INSERT INTO " . DETAILS_DDE . " ( details_dde_id, date_demande, mkt_digi, dev_web, studio, crm, ref_nat, budget_pub) VALUES (" .
            "'" . $this->getdetails_dde_id() .
            "','" . addslashes($this->getdate_demande()) .
            "','" . addslashes($this->getmkt_digi()) .
            "','" . addslashes($this->getdev_web()) .
            "','" . addslashes($this->getstudio()) .
            "','" . addslashes($this->getcrm()) .
            "','" . addslashes($this->getref_nat()) .
            "','" . addslashes($this->getbudget_pub()) .
            "')" ;
			//echo $qry;
			$this->setdetails_dde_id(Database::insert($qry));
		}
	}
	public function delete($array = array())
	{
		$qry = "DELETE FROM " . DETAILS_DDE;
		$and = " WHERE ";
		
		$i = 0;

		foreach($this as $key => $value) {
			${"temp".$i} = "get".$key;
			if ($this->${"temp".$i}() != "") {
				$qry .= $and.$key." = '".$this->${"temp".$i}()."' ";
				$and = "AND ";
			}
			$i++;
		}
		Database::delete($qry);
	}
}
