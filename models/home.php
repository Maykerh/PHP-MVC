<?php

class home extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getData($id){

		$dataArr = array();

		$sql = "SELECT * FROM tabela WHERE id = ".$id;

		$sql = $this->conn->query($sql);

		if($sql->rowCount() > 0){
			
			$dataArr = $sql->fetchAll();
		}

		return $dataArr;
	}
}