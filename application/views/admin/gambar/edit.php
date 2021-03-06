<?php
  echo validation_errors('<div class="alert alert-warning">','</div>');

  echo form_open_multipart(base_url('admin/gambar/edit/'.$gambar->id_gambar));
?>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Pilih Daerah</label>
        <select class="form-control" name="id_daerah">
          <?php foreach ($daerah as $daerah) { ?>
            <option value="<?php echo $daerah->id_daerah ?>"
              <?php if ($gambar->id_daerah == $daerah->id_daerah) {
                echo "selected";
              } ?>>
              <?php echo $daerah->nama_daerah ?>
            </option>
          <?php  } ?>
        </select>
      </div>
      <div class="form-group form-group-md">
      </div>
    </div>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Pilih Judul Artikel</label>
        <select class="form-control" name="id_artikel">
          <?php foreach ($artikel as $artikel) { ?>
            <option value="<?php echo $artikel->id_artikel ?>"
              <?php if ($gambar->id_artikel == $artikel->id_artikel) {
                echo "selected";
              } ?>>
              <?php echo $artikel->judul ?>
            </option>
          <?php  } ?>
        </select>
      </div>
    </div>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?php echo $gambar->keterangan ?>" placeholder="Masukkan Keterangan" required>
      </div>
    </div>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
      </div>
    </div>

  <div class="col-md-8">
    <div class="form-group">
      <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Save">
      <input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
    </div>
  </div>

    <?php
    echo form_close();
    ?>
