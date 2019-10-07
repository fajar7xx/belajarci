<div class="container mt-4">
    <div class="card m-4 p-2">
        <div class="card-header">
            <h4>Tambah Mahasiswa</h4>
        </div>
        <div class="card-body">
            <!-- buat pegnecekan biar gak tampil lagi -->
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> <?=validation_errors();?>
                    <button type= "button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="nim">nim</label>
                    <input type="text" class="form-control" name="nim" id="nim">
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="hp">hp</label>
                    <input type="text" class="form-control" name="hp" id="hp">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value="">Pilih Jurusan</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="FE">Fakultas Ekonomi</option>
                        <option value="AK">Akuntansi</option>
                        <option value="FB">Fakultas Bahasa</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right mx-1">Simpan</button>
                <a href="<?=base_url('mahasiswa');?>" class="btn btn-warning float-right">batal</a>
            </form>
        </div>
    </div>
</div>