

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data BMI</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <h2>Data BMI #ID : <?=$bmipasien->id?></h2>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tanggal</td> <td>:</td>
                                            <td><?=$bmipasien->tanggal?></td>
                                        </tr>

                                        <tr>
                                            <td>Berat</td> <td>:</td>
                                            <td><?=$bmipasien->berat?></td>
                                        </tr>

                                        <tr>
                                            <td>Tinggi</td> <td>:</td>
                                            <td><?=$bmipasien->berat?></td>
                                        </tr>

                                        <tr>
                                            <td>Skor BMI</td> <td>:</td>
                                            <td><?=$bmipasien->bmi?></td>
                                        </tr>

                                        <tr>
                                            <td>Status</td> <td>:</td>
                                            <td><?=$bmipasien->status_bmi?></td>
                                        </tr>

                                        <tr>
                                            <td>Catatan</td> <td>:</td>
                                            <td><?=$bmipasien->catatan?></td>
                                        </tr>

                                        <tr>
                                            <td>Info Pasien</td> <td>:</td>
                                            <td><a class="btn btn-primary" href="<?=base_url('index.php/pasien/view/'.$bmipasien->pasien_id)?>">View</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

          