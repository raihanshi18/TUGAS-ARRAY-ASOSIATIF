
<?php include('tameplate/header.php')?>

<?php $students = [
    [
        'nama' => "Rafi",
        'kelas' =>"XI",
        'jurusan' =>"PPLG",
        'umur' =>17,
        'status' =>"HADIR"
    ],
    [
        'nama' => "iman",
        'kelas' =>"XI",
        'jurusan' =>"PPLG",
        'umur' =>17,
        'status' =>"ALFA"
    ],

]?>


<!-- main content start -->
<div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Absensi Sekolah</h2>
            <div class="input-group dashboard-filter">
                <button class="btn btn-primary">Tambah<i class="fa-solid fa-plus"></i></button>
            </div>
        </div>
        
            <div class="col-xxl-15">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Absensi Terkini</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA SISWA</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>UMUR</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($s=0; $s<count($students); $s++){?>
                                <tr>
                                    <td><?= $s + 1?></td>
                                    <td><?= $students[$s]['nama'] ?></td>
                                    <td><?= $students[$s]['kelas'] ?></td>
                                    <td><?= $students[$s]['jurusan'] ?></td>
                                    <td><?= $students[$s]['umur'] ?></td>
                                    <td><span class="badge <?php 
                                    if($students[$s]['status'] == 'HADIR') {
                                       echo ' bg-success' ;

                                    } else if($students[$s]['status'] == 'ALFA') {
                                        echo ' bg-danger' ; 
                                    } else {
                                        echo ' bg-warning';
                                    }
                                      ?>"><?= $students[$s][status] ;
                                     ?></span></span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

<?php include('tameplate/footer.php')?>
