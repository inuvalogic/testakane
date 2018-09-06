<form method="post">
    <div>
        <label for="judul">Judul</label><br>
        <input type="text" name="judul" value="<?= $artikel['judul'] ?>">
    </div>
    <div>
        <label for="judul">Isi</label><br>
        <textarea name="isi" cols="30" rows="10"><?= $artikel['isi'] ?></textarea>
    </div>
    <div>
        <button name="submit" value="submit">Ubah</button>
    </div>
</form>

<?php echo $notif ?>