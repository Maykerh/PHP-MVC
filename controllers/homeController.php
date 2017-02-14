<?php

class homeController extends Controller{
	
	public function index($id){

		echo 'este é o método index';

		$dataArr = array();

		$home = new home;

		$dataArr['homeData'] = $home->getData($id);

		$this->loadTemplate('home', $dataArr);
	}
}