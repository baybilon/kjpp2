<div>
  <h2>Form Siswa</h2>
</div>
<form method="POST" enctype='multipart/form-data' action="<?php echo base_url('add_mhs')?>">
<table style="margin: 30px 0px 30px;">
<thead>
  <tr>
    <td><label for="html">Nama</label></td>
    <td>:</td>
    <td><input type="text" name ="nama_siswa" class="form-control" style="width: 100%;" require></td>
  </tr>
  <tr>
    <td><label for="html">No. Telepon</label></td>
    <td>:</td>
    <td><input type="text" name ="telpon_siswa" class="form-control" style="width: 100%;" require></td>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
      <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki - laki"><label for="html">Laki - laki</label>
      <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan"><label for="html">Perempuan</label>
    </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea id="alamat" name="alamat" rows="4" cols="50" require></Textarea></td>
  </tr>
</tbody>
</table>
  </form>
