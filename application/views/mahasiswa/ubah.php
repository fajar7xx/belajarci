<div class="container mt-4">
    <div class="card m-4 p-2">
        <div class="card-header">
            <h4>Tambah Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$mahasiswa['id_mhs'];?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?=$mahasiswa['nm_mhs'];?>">
                    <!-- error ditampilkan di bawah -->
                    <small class="form-text text-danger"><?=form_error('nama');?></small>
                </div>
                <div class="form-group">
                    <label for="nim">nim</label>
                    <input type="text" class="form-control" name="nim" id="nim" value="<?=$mahasiswa['nim'];?>" readonly>
                    <small class="form-text text-danger"><?=form_error('nim');?></small>
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="5">
                        <?= htmlspecialchars($mahasiswa['alamat']);?>
                    </textarea>
                    <small class="form-text text-danger"><?=form_error('alamat');?></small>
                </div>
                <div class="form-group">
                    <label for="hp">hp</label>
                    <input type="text" class="form-control" name="hp" id="hp" value="<?=$mahasiswa['no_hp'];?>">
                    <small class="form-text text-danger"><?=form_error('hp');?></small>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?=$mahasiswa['email'];?>">
                    <small class="form-text text-danger"><?=form_error('email');?></small>
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option value="">Pilih Jurusan</option>
                        <?php foreach($jurusan as $j): ?>
                            <?php if($j == $mahasiswa['jurusan']): ?>
                                <option value="<?=$j;?>" selected><?=$j;?></option>
                            <?php else: ?>
                            <option value="<?=$j;?>"><?=$j;?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right mx-1">Simpan</button>
                <a href="<?=base_url('mahasiswa');?>" class="btn btn-warning float-right">batal</a>
            </form>
        </div>
    </div>
</div>