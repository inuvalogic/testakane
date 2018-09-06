<?php

$routes = [
	'page/(.*)' => 'Pages:detail',

    'artikel/list' => 'Artikel:list',
    'artikel/tambah' => 'Artikel:tambah',
    'artikel/view/([0-9]+)' => 'Artikel:view',
    'artikel/edit/([0-9]+)' => 'Artikel:edit',
    'artikel/delete/([0-9]+)' => 'Artikel:delete',

];