<?php

namespace Akaneapp\Controller;

class PagesController extends \Akane\Controller\BaseController
{
	public function detailAction()
	{
		$articles = $this->artikelModel->all();

		echo $this->layout->render('layout',[
			'content' => $this->layout->render('page/detail', [
				'articles' => $articles
			])
		]);
	}
}