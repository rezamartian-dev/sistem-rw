<?php
/**
 * Created by PhpStorm.
 * User: annashrulyusuf
 * Date: 2/13/2022
 * Time: 1:25 AM
 */

class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$v = 'dashboard';
		$this->pathFile = $this->folder . $v . '/';
		$this->indexFile = $this->pathFile . $this->index;
		$this->dataFile = $this->pathFile . 'data-' . $v;
	}

	public function index()
	{
		$data[$this->title] = $this->pathFile;
		$data[$this->page] = $this->indexFile;
		view($this->layout, $data);
	}


}
