<p>
    <a href="/artikel/tambah">Tambah</a>
</p>

<table border="1">
 <tr>
     <th>Judul</th>
     <th>Aksi</th>
 </tr>
 <?php foreach ($articles as $row) { ?>
 <tr>
     <td>
        <a href="/artikel/view/<?= $row['id'] ?>">
            <?= $row['judul'] ?>
        </a>
    </td>
     <td>
        <a href="/artikel/edit/<?= $row['id'] ?>">edit</a>
        -
        <a href="/artikel/delete/<?= $row['id'] ?>">delete</a>
     </td>
 </tr>
 <?php } ?>
</table>