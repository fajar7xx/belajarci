<div class="container">
    <div class="row mt-4">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa 
                </div>
                <div class="card-body">
                    <h5 class="card-title text-capitalize"><?= $mahasiswa['nm_mhs'] ;?></h5>    
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nim'] ;?></h6>

                    <p class="card-text"><?= $mahasiswa['email'] ;?></p>
                    <p class="card-text"><?= $mahasiswa['no_hp'] ;?></p>
                    <p class="card-text"><?= $mahasiswa['alamat'] ;?></p>
                    <p class="card-text text-capitalize">
                        <?php
                        if($mahasiswa['jurusan'] == 'TI'){
                            echo "teknik informatika";
                        }
                        elseif($mahasiswa['jurusan'] == 'SI'){
                            echo "sistem informasi";
                        }
                        elseif($mahasiswa['jurusan'] == 'FE'){
                            echo "Fakultas Ekonomi";
                        }
                        elseif($mahasiswa['jurusan'] == 'FB'){
                            echo "Fakultas Bahasa";
                        }
                        else{
                            echo "Akuntansi";
                        }
                        ?>
                    </p>

                    <a href="<?=base_url('mahasiswa');?>" class="text-danger">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>   
</div>