

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
                                        <h2>Data Pasien #ID : <?=$pasien->id?></h2>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kode Pasien</td> <td>:</td>
                                            <td><?=$pasien->id?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama</td> <td>:</td>
                                            <td><?=$pasien->nama?></td>
                                        </tr>

                                        <tr>
                                            <td>Gender</td> <td>:</td>
                                            <td><?=$pasien->gender?></td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Tgl Lahir</td> <td>:</td>
                                            <td><?=$pasien->tmp_lahir?>, <?=$pasien->tgl_lahir?></td>
                                        </tr>

                                        <tr>
                                            <td>Email</td> <td>:</td>
                                            <td><?=$pasien->email?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

          