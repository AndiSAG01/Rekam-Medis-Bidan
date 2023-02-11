<<<<<<< HEAD
<div class="card">
=======
<div class="row">
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
    <div class="col-lg-12 ">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="panel-heading-title pull-left">
                    <h6></h6>
                </div>
                <!--panel-heading-title-->
                <div class="panel-heading-buttons pull-right">
                    <div class="bs-example">
                        <ul class="clearfix">
                            <a href="">
                                <li class="btn btn-defult remove"><i class="fa fa-times"></i></li>
                            </a>

                        </ul>
                    </div>
                </div>
                <!--panel-heading-buttons-->
            </div>
            <!--panel-->
            <style>
                .line-title {
                    border: 2;
                    border-style: inset;
                    border-top: 1px solid #000;
                }
            </style>
            <div class="card-body">
                <div class="dataTableWrapper">

<<<<<<< HEAD
                    <h3> Cetak Laporan Pasien </h3>
                    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?> NiceAdmin/assets/css/style.css">
                    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?> NiceAdmin/assets/css/style.css">
=======
                    <h3> Cetak Laporan </h3>
                    <link rel="stylesheet" type="text/css" href="<?= base_url('NiceAdmin/') ?> assets/css/style.css">
                    <link rel="stylesheet" type="text/css" href="<?= base_url('NiceAdmin/') ?> assets/css/style.css">
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
                    <hr class="line-title">
                    <form name="formcari" id="formcari" action="cetak" method="get" target="_blank">
                        <fieldset class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>CETAK KESELURUHAN</b></td>

                                        <td></td>
                                    </tr>


                                    <tr>
                                        <td style="width:40%"></td>

                                        <td>
<<<<<<< HEAD
                                            <a href="<?= base_url('pasien/cetak_laporan')?>" class="btn btn-primary">Print View</a>
                                            <a href="<?= base_url('pasien/print_laporan')?>" class="btn btn-warning">Print</a>
                                            
=======
                                            <button class="btn btn-info"><i class="fa fa-info" href = <?= base_url('pasien/cetak_laporan')?> ></i> Print Preview</button>
                                            <button class="btn btn-warning" name="cetak" fdprocessedid="iff7bd"><i class="fa fa-print"></i> Print</button>
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                    <hr class="line-title">
<<<<<<< HEAD
=======
                    <br>
                    <form name="formcari" id="formcari" action="cetak" method="get" target="_blank">
                        <fieldset class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>CETAK DENGAN FILTER</b></td>

                                        <td>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width:40%">Berdasarkan :</td>

                                        <td>
                                            <select class="form-control selectpicker" data-live-search="true" name="Berdasarkan" id="Berdasarkan" fdprocessedid="uw4jf9">
                                                <option name="berdasarkan" value="id_pasien">id_pasien</option>
                                                <option name="berdasarkan" value="id_lahiran">id_lahiran</option>
                                                <option name="berdasarkan" value="id_periksa_kehamilan">id_periksa_kehamilan</option>
                                                <option name="berdasarkan" value="id_imunisasi">id_imunisasi</option>
                                                <option name="berdasarkan" value="id_kb">id_Keluarga Berencana</option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width:40%">Pencarian :</td>

                                        <td>
                                            <input class="form-control" type="text" name="isi" value="" fdprocessedid="7tu0eci">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>

                                        <td>
                                            <button class="btn btn-info" name="preview" fdprocessedid="h2tt8c"><i class="fa fa-info"></i> Print Preview</button>
                                            <button class="btn btn-warning" name="cetak" fdprocessedid="qvgtl6"><i class="fa fa-print"></i> Print</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                    <br>
                    <hr class="line-title">
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
                    <form name="formcari" id="formcari" action="cetak" method="get" target="_blank">
                        <fieldset class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>CETAK PERPERIODE</b></td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%">Berdasarkan :</td>

                                        <td>
                                            <select class="form-control selectpicker" data-live-search="true" name="Berdasarkan" id="Berdasarkan" fdprocessedid="83532b">
                                                <option name="berdasarkan" value="">tanggal</option>
                                            </select>
                                        </td>
                                    </tr>

<<<<<<< HEAD
                                    
                                    <tr>
                                        <td style="width:40%">Dari Tanggal :</td>
                                        <td><input type="date" name="tanggal1"></td>
                                    </tr>
                                    <br>
=======

                                    <tr>
                                        <td style="width:40%">Dari Tanggal :</td>

                                        <td><input type="date" name="tanggal1"></td>
                                    </tr>

>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
                                    <tr>
                                        <td style="width:40%">Sampai Tanggal :</td>

                                        <td><input type="date" name="tanggal2"></td>
                                    </tr>


                                    <tr>
                                        <td></td>

                                        <td>
                                            <button class="btn btn-info" name="preview" fdprocessedid="4evdsa"><i class="fa fa-info"></i> Print Preview</button>
                                            <button class="btn btn-warning" name="cetak" fdprocessedid="rp4y6p"><i class="fa fa-print"></i> Print</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>



                </div>
            </div>
        </div>
        <!--panel-body-->
    </div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
