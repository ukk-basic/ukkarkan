<a href="<?= base_url('petugas/tambah_petugas') ?>" class="btn btn-lg btn-dark mb-4"> Tambah Petugas </a>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telepon</th>
            </tr>
        </thead>
       <tbody>
            <?php
            $no=1;
            foreach($petugas as $ad){
                
                echo '<tr>
                <td>'.$no.'</td>
                <td>'.$ad['nama_petugas'].'</td>
                <td>'.$ad['username'].'</td>
                <td>'.$ad['telp'].'</td>

            </tr>';
            $no++;
            }
            ?>          
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telepon</th>
            </tr>
        </tfoot>
    </table>