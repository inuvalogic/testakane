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
        $notif = '';
        if (isset($_POST['submit']))
        {
            $judul = filter_var($_POST['judul'], FILTER_SANITIZE_STRING);
            $isi   = filter_var($_POST['isi'], FILTER_SANITIZE_STRING);

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
            );

            $insert = $this->artikelModel->insert($data);
            
            if ($insert!=false)
            {
                $id_artikel = $this->artikelModel->getLastInsertId();
                // $notif = 'berhasil menambahkan artikel dengan ID ' . $id_artikel;
                $this->http->redirect('/artikel/list');
            } else {
                $notif = 'gagal menambahkan';
            }
        }

        echo $this->layout->render('artikel/form', ['notif' => $notif]);
    }

    public function editAction()
    {
        $id = $this->http->uri_segment(2);

        $artikel = $this->artikelModel->get($id);

        if (!$artikel){
            echo 'ID salah';
            exit;
        }

        $notif = '';
        if (isset($_POST['submit']))
        {
            $judul = filter_var($_POST['judul'], FILTER_SANITIZE_STRING);
            $isi   = filter_var($_POST['isi'], FILTER_SANITIZE_STRING);

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
            );

            $where = array(
                'id' => $artikel['id'],
                // 'id_user' => $artikel['id_user'],
            );

            $update = $this->artikelModel->update($data, $where);
            
            if ($update!=false)
            {
                $this->http->redirect('/artikel/list');
            } else {
                $notif = 'gagal mengubah';
            }
        }
        
        $data2 = [
            'notif' => $notif,
            'artikel' => $artikel,
        ];

        echo $this->layout->render('artikel/form_edit', $data2);
    }

    public function deleteAction()
    {
        $id = $this->http->uri_segment(2);

        $artikel = $this->artikelModel->get($id);

        if (!$artikel){
            echo 'ID salah';
            exit;
        } else {
            $this->artikelModel->delete($artikel['id']);
            $this->http->redirect('/artikel/list');
        }
    }

}