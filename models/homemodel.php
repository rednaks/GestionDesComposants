<?php
require_once "classes/dbmodel.php";

class HomeModel extends DbModel
{
	public function index()
	{
		return "Home Index";
	}
	
	public function getPageTitle()
	{
		return "Home Page";
	}
}
	