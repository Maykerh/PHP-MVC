<?php

class testeController extends Controller{

	public function index(){

		$dataArr['name'] = 'Little Onion';

		$this->loadTemplate('teste', $dataArr);
	}
}