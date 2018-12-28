<?php
if (!defined('PROSPECTS')) {
    define('PROSPECTS', 'prospects');
}
class Prospects {
	private $prospect_id;
	private $nom;
	private $societe;
	private $email;
	private $telephone;
	private $details_dde_id;

	public function setprospect_id($pArg = "0") { $this->prospect_id = $pArg;}
	public function setnom($pArg = "0") { $this->nom = $pArg;}
	public function setsociete($pArg = "0") { $this->societe = $pArg;}
	public function setemail($pArg = "0") { $this->email = $pArg;}
	public function settelephone($pArg = "0") { $this->telephone = $pArg;}
	public function setdetails_dde_id($pArg = "0") { $this->details_dde_id = $pArg;}

	public function getprospect_id() { return $this->prospect_id; }
	public function getnom() { return $this->nom; }
	public function getsociete() { return $this->societe; }
	public function getemail() { return $this->email; }
	public function gettelephone() { return $this->telephone; }
	public function getdetails_dde_id() { return $this->details_dde_id; }

	public function readObject($array = array()) {
		$qry = "SELECT * FROM " . PROSPECTS;
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
			$this->setprospect_id($record['prospect_id']);
			$this->setnom($record['nom']);
			$this->setsociete($record['societe']);
			$this->setemail($record['email']);
			$this->settelephone($record['telephone']);
			$this->setdetails_dde_id($record['details_dde_id']);

			return true;
		}
	}
	public static function readArray($array = array())
	{
		$qry = "SELECT *  FROM " . PROSPECTS;
		$and = " WHERE ";
		
		foreach($array as $key => $value) {
			if ($array[$key] != "") {
				$qry .= $and.$key." = '".$array[$key]."'" ;
				$and = "AND ";
			}
		}
		
		$qry .= " ORDER BY prospect_id ASC";
		$recordset     = Database::select($qry);
		$class_objects = array();
		if (is_array($recordset) == true) {
			while (list($i, $record) = each($recordset)) {
				$class_object = new Prospects();
				
				$class_object->setprospect_id($record['prospect_id']);
				$class_object->setnom($record['nom']);
				$class_object->setsociete($record['societe']);
				$class_object->setemail($record['email']);
				$class_object->settelephone($record['telephone']);
				$class_object->setdetails_dde_id($record['details_dde_id']);
				
				$class_objects[$class_object->getprospect_id()] = $class_object;
			}
		}
		return $class_objects;
	}
	public function insert()
	{
		if ($this->getprospect_id() != '') {
			$qry = "UPDATE " . PROSPECTS . " SET 
            prospect_id = '" . $this->getprospect_id() . 
            "', nom = '" . addslashes($this->getnom()) .
            "', societe = '" . addslashes($this->getsociete()) .
            "', email = '" . addslashes($this->getemail()) .
            "', telephone = '" . addslashes($this->gettelephone()) .
            "', details_dde_id = '" . addslashes($this->getdetails_dde_id()) .
            "' WHERE prospect_id = " . $this->getprospect_id() ;
            //echo $qry;
			Database::insert($qry);
		} else {
			$qry = "INSERT INTO " . PROSPECTS . " ( prospect_id, nom, societe, email, telephone, details_dde_id) VALUES (" .
            "'" . $this->getprospect_id() .
            "','" . addslashes($this->getnom()) .
            "','" . addslashes($this->getsociete()) .
            "','" . addslashes($this->getemail()) .
            "','" . addslashes($this->gettelephone()) .
            "','" . addslashes($this->getdetails_dde_id()) .
            "')" ;
			//echo $qry;
			$this->setprospect_id(Database::insert($qry));
		}
	}
	public function delete($array = array())
	{
		$qry = "DELETE FROM " . PROSPECTS;
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
