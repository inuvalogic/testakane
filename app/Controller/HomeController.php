<?php

namespace Akaneapp\Controller;

class HomeController extends \Akane\Controller\HomeController
{
	public function indexAction()
	{
		echo $this->layout->render('layout', array(
			'content' => $this->layout->render('home')
		));
	}
}