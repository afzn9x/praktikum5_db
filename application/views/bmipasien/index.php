

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data BMI</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Berat</th>
                                            <th>Tinggi</th>
                                            <th>BMI</th>
                                            <th>Status</th>
                                            <th>Catatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        foreach($bmipasien->result() as $bmipasien){
                                        ?>
                                        <tr>
                                            <td><?=$bmipasien->id?></td>
                                            <td><?=$bmipasien->tanggal?></td>
                                            <td><?=$bmipasien->berat?></td>
                                            <td><?=$bmipasien->tinggi?></td>
                                            <td><?=$bmipasien->bmi?></td>
                                            <td><?=$bmipasien->status_bmi?></td>
                                            <td><?=$bmipasien->catatan?></td>
                                            <td><a class="btn btn-primary" href="<?=base_url('index.php/bmi_pasien/view/'.$bmipasien->id)?>">View</a></td>
                                            
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

            