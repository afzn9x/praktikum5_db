

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button class="btn btn-primary"><a href="<?=base_url('index.php/bmi_pasien/index/')?>"> Data BMI</a></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        foreach($pasien->result() as $pasien){
                                        ?>
                                        <tr>
                                            <td><?=$pasien->id?></td>
                                            <td><?=$pasien->kode?></td>
                                            <td><?=$pasien->nama?></td>
                                            <td><?=$pasien->gender?></td>
                                            <td><?=$pasien->tmp_lahir?></td>
                                            <td><?=$pasien->tgl_lahir?></td>
                                            <td><?=$pasien->email?></td>
                                            <td><a href="<?=base_url('index.php/pasien/view/'.$pasien->id)?>">View</a></td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
