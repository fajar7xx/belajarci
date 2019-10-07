<div class="container mt-4">
    <h1>Daftar Mahasiswa</h1>
    <!-- <pre>
        <?= var_dump($mahasiswa) ;?>
    </pre>  -->

    <!-- tampilkan data ketika data berhasil
    flashdata('nama; flash data yg di set) untuk menampilkan flash -->
    <?php if($this->session->flashdata()): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <a href="<?=base_url('mahasiswa/tambah');?>" class="btn btn-outline-primary my-2">Tambah Mahasiswa</a>
    <div class="table-responsive">
        <table class="table table-sm table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs):    
                ?> 
                    <tr> 
                        <td class="text-center"><?=$no++;?></td>
                        <td><?=$mhs['nim'];?></td>
                        <td><?=$mhs['nm_mhs'];?></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">View</a>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?=base_url('mahasiswa/hapus/').$mhs['id_mhs'];?>" class="btn btn-danger btn-sm" onclick=" return  confirm('Apakah Anda Yakin Ingin menghapus!')">Delete</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>     
        </table>
    </div>      
</div>