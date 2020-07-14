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
                    Profil
                </li>
                <li class="active">
                    Visi Misi
                </li>
                
            </ol>
            <div class="page-header">
                <h1>Visi Misi</h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
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
                        <div class="form-group">
                            <label for="">Visi</label>
                            <textarea name="" class="ckeditor form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Misi</label>
                           <table class="table table-bordered" style="width: 100%;">
                                <tbody  id="misi">
                                    <tr id="misi_0">
                                        <td><input placeholder="Misi ..." type="text" class="form-control" name="" id=""></td>
                                        <td> &nbsp<button class="btn btn-danger btn-sm remove-misi" onclick="removeMisi(0)"> <i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                              
                           </table>
                           <br>
                           <button class="btn btn-primary btn-sm" onclick="addMisi()">Tambah Misi</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="panel_tab3_example2">
                        <div class="form-group">
                            <label for="">Visi</label>
                            <textarea name="" class="ckeditor form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Misi</label>
                           <table class="table table-bordered" style="width: 100%;">
                                <tbody  id="misi">
                                    <tr id="misi_0">
                                        <td><input placeholder="Misi ..." type="text" class="form-control" name="" id=""></td>
                                        <td> &nbsp<button class="btn btn-danger btn-sm remove-misi" onclick="removeMisi(0)"> <i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                              
                           </table>
                           <br>
                           <button class="btn btn-primary btn-sm" onclick="addMisi()">Tambah Misi</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="?menu=m_slider" class="btn btn-success add-row pull-right">
                Simpan Perubahan <i class="fa fa-save" aria-hidden="true"></i>
            </a>

        </div>
    </div>
    <!-- end: PAGE CONTENT-->
</div>