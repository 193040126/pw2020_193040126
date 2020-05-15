<?php 
	
	require '../php/functions.php';
	$elektronik = cari($_GET["keyword"]);
 ?>


 <table cellpadding="11" cellspacing="0" class="responsive-table grey darken-4" style="color: white; ">
      <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>Merk</th>
        <th>Tipe</th>
        <th>Tahun Rilis</th>
        <th>Harga</th>
      </tr>

      <?php if (empty($elektronik)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>

        <?php $i = 1; ?>
        <?php foreach ($elektronik as $elek) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $elek['id']; ?>" onclick="return confirm('Ubah Data')" class="waves-effect waves-light btn-small red darken-4">Ubah</a>
              <a href="hapus.php?id=<?= $elek['id']; ?>" onclick="return confirm('Hapus Data')" class="waves-effect waves-light btn-small red darken-4">Hapus</a>
            </td>
            <td><img src="../assets/img/<?= $elek["foto"]; ?>" width="80" class="materialboxed"></td>
            <td><?= $elek["merk"]; ?></td>
            <td><?= $elek["tipe"]; ?></td>
            <td><?= $elek["tahun_rilis"]; ?></td>
            <td>Rp.<?= $elek["harga"]; ?></td>
          </tr>
          <?= $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>