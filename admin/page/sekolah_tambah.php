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
                    Sekolah
                </li>
                <li class="active">
                    Tambah
                </li>


            </ol>
            <div class="page-header">
                <h1>Tambah Sekolah</h1>
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
                            <form action="">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" placeholder="Nama ..." id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Singkatan</label>
                                    <input type="text" placeholder="Singkatan ..." id="form-field-1"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Matra</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">-- Pilih Matra --</option>
                                        <option value="">Darat</option>
                                        <option value="">Laut</option>
                                        <option value="">Udara</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="" placeholder="Alamat ..." id="" cols="30" class="form-control"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email ..." id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="text" placeholder="No Telp ..." id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">

                                    <label for="">Website</label>
                                    <input type="text" placeholder="Website ..." id="form-field-1" class="form-control">
                                </div>
                                <div class="form-group">

                                    <label for="">Deskripsi</label>
                                    <textarea name="" placeholder="Alamat ..." class="ckeditor" id="" cols="30"
                                        class="form-control" rows="3"></textarea>

                                </div>
                                <div class="form-group">
                                    <!-- <div class="col-sm-3"> -->
                                        <label for="">Logo</label>
                                        <div id="kv-avatar-errors" class="center-block" style="display:none"></div>
                                        <div class="kv-avatar ">
                                            <input id="mediaInfo" name="avatar" type="file" class="file-loading">
                                        </div>

                                    <!-- </div> -->
                                        <!-- <div class="col-sm-4"> -->
                                            <label class="recommendation" style="margin-top: 20px;">
                                                Keterangan:<br>
                                                <ul>
                                                    <li>Rekomendasi Ukuran Image: 200x350 pixel</li>
                                                    <li>Ukuran File Image Maksimal: 5 Mb</li>
                                                </ul>
                                            </label>
                                            
                                        <!-- </div> -->
                                   
                                </div>
                            </form>
                            <!-- <div style="margin-top: 20px;"> <label for="">Galeri</label></div> -->
                            <div class="form-group">
                                   
                                <!-- <label for="">Gambar</label> -->
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
                                <table class="table table-bordered mt-5">
                                   
                                    <thead>
                                        <tr>
                                            <th colspan="3"><b> <center> Galeri </center></b></th>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gambar">
                                        <tr id="img_0">
                                            <td><input type="text" placeholder="Judul ..." class="form-control"></td>
                                            <td><input type="file" accept=".jpg,.png" class="form-control"></td>
                                            <td><button class="btn btn-danger btn-sm" onclick="removeGambar(0)"><i
                                                        class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary btn-sm" onclick="addGambar()">Tambah Gambar</button>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="row pull-right">
                        <div class="col-md-12 space20">
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