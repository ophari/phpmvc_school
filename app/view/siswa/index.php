<div class="container">
    <h3>Daftar Siswa</h3>
    
<table class="table">
  <thead class=" table-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
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
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
        
</div>