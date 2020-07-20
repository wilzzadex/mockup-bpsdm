<div class="container">
    <!-- start: PAGE HEADER -->
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
                <li>
                    <i class="clip-home-3"></i>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li class="active">
                    Master Data
                </li>
                <li class="active">
                    Master Album
                </li>
                <li>
                    Tambah Album
                </li>

            </ol>
            <div class="page-header">
                <h1>Tambah Album</h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    <div class="panel-tools">

                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable">
                                <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
                                    <li class="active">
                                        <a href="#panel_tab3_example1" data-toggle="tab" aria-expanded="true">
                                            Bahasa Indonesia (Default)
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#panel_tab3_example2" data-toggle="tab" aria-expanded="false">
                                            English
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="panel_tab3_example1">
                                        <p>
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="">Judul Album</label>
                                                    <input type="text" placeholder="Judul ALbum" id="form-field-1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="panel_tab3_example2">
                                        <p>
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="">Album Title</label>
                                                    <input type="text" placeholder="Album Title" id="form-field-1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <label for="">Gambar</label>
                            <!-- <div class="gambar">
                                <div class="row" id="img_0">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-danger btn-sm" onclick="removeGambar(0)">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th >Judul (ID)</th>
                                        <th >Judul (EN)</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="gambar">
                                    <tr id="img_0">
                                       
                                        <td><input type="text" placeholder="Judul ..." class="form-control"></td>
                                        <td><input type="text" placeholder="Judul ..." class="form-control"></td>
                                        <td>
                                            <label class="btn btn-raised btn-default btn-sm" style="color: white; width: 180px; background:grey; height: 30px;"> <i class="fa fa-picture-o"></i> Pilih Gambar<input type="file" name="file[]" accept="image/*" style="opacity: 0;" onchange="hasilgmbr(this)" required></label>  
                                            <span class="label-gmbr" style="margin-left: 2%;"> Belum Ada Gambar</span>  
                                           
                                        </td>
                                        <td><button class="btn btn-danger btn-sm" onclick="removeGambar(0)"><i
                                                    class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary btn-sm" id="tambah-gambar" onclick="addGambar()">Tambah Gambar</button><br>
                            <label class="recommendation" style="margin-top: 20px;">
                                Keterangan:<br>
                                <ul>
                                    <li>Rekomendasi Ukuran Gambar: 200x350 pixel</li>
                                    <li>Ukuran File Image Maksimal: 5 Mb</li>
                                    <li>Format Gambar : jpg,jpeg,png</li>
                                </ul>
                            </label> <br>
                            <br>
                            <br>

                        </div>
                    </div>
                    <br>
                    <div class="row pull-right">
                        <div class="col-md-12 space20">
                            <!-- <a href="?menu=tambah_berita" class="btn btn-primary add-row">
                                Simpan Ke Draft <i class="fa fa-paper-plane"></i>
                            </a> -->
                            <a href="?menu=sekolah" class="btn btn-default add-row">
                                Batal <i class="fa fa-remove "></i>
                            </a>
                            <a href="?menu=sekolah" class="btn btn-success add-row">
                                Simpan <i class="fa fa-save" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end: PAGE CONTENT-->
</div>
<div class="modal fade" id="detil" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="gambar_modal" width="100%" />
            </div>
        </div>
    </div>
</div>