<div class="container">
  <!-- modal -->
    <h3>Daftar Siswa</h3>
  <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#TambahData">
  Tambah data siswa
</button>

    
<table class="table">
  <thead class=" table-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody class="table-success">
  <?php 
  $no = 1;
  foreach($data['siswa'] as $siswa): ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$siswa['nama'] ?></td>
      <td><?=$siswa['nis'] ?></td>
      <td><?=$siswa['email'] ?></td>
      <td><?=$siswa['jurusan'] ?></td>
      <td><a href="<?php BASE_URL;?>siswa/detail/<?=$siswa['id']?>" class="btn btn-primary btn-sm">Detail</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<!-- pop up tambah data -->
<div class="modal fade" id="TambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

  <form action="<?= BASE_URL ?>/siswa/tambah" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <!-- input nama -->
      <div class="mb-3">
        <label for="InputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="InputNama" aria-describedby="Nama" name="nama">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
      <!-- input NIS -->
      <div class="mb-3">
        <label for="InputNis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="InputNis" aria-describedby="Nis" name="nis">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <!-- input Email -->
    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="Email" name="email">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
   <!-- input jurusan -->
   <div class="mb-3">
    <label for="InputJurusan">Input Jurusan</label>
<select class="form-select" aria-label="Default select example" name="jurusan">
  <option selected>Pilih jurusan</option>
  <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis</option>
  <option value="AKL">Akuntasi keuangan Lembaga</option>
  <option value="AN">Animasi</option>
  <option value="PSPT">PSPT</option>
  <option value="OTKP">OTKP</option>
  <option value="RPL">RPL</option>
</select>
   </div>
    <!-- <button type="submit" class="btn btn-secondary"></button> -->
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

</div>