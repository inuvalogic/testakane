<?php

namespace Akaneapp\Controller;

class ArtikelController extends \Akane\Controller\BaseController
{
	public function listAction()
	{
        $articles = $this->artikelModel->all();
		// $articles = $this->artikelModel->all('id ASC', '0,1');

        // $sql = "SELECT * FROM artikel ORDER BY id DESC LIMIT 0,1";
        // $articles = $this->artikelModel->getData($sql);

        $data = array(
            'articles' => $articles
        );

		echo $this->layout->render('artikel/list', $data);

	}

    public function viewAction()
    {
        $id = $this->http->uri_segment(2);

        $article = $this->artikelModel->get($id);
        // $article = $this->artikelModel->get($id, 'id_artikel');

        // $sql = "SELECT * FROM artikel WHERE id = ?";
        // $article = $this->artikelModel->getSingleData($sql, array($id));

        $data = array(
            'article' => $article
        );

        echo $this->layout->render('artikel/view', $data);
    }

    public function tambahAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }

}