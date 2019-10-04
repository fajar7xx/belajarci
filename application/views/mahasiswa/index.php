<div class="container mt-4">
    <h1>Daftar Mahasiswa</h1>
    <!-- <pre>
        <?= var_dump($mahasiswa) ;?>
    </pre>  -->
    <a href="#" class="btn btn-outline-primary my-2">Tambah Mahasiswa</a>
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
                            <a href="#" class="btn btn-danger btn-sm" onclick="confirm('Apakah Anda Yakin Ingin menghapus!')">Delete</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>     
        </table>
    </div>      
</div>