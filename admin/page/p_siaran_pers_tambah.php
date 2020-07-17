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
                    Publikasi
                </li>
                <li class="active">
                    Infografis
                </li>
                <li>
                    Tambah Siaran Pers
                </li>

            </ol>
            <div class="page-header">
                <h1>Tambah Siaran Pers</h1>
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
                                                    <label for="">Judul</label>
                                                    <input type="text" placeholder="Judul" id="form-field-1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="">Deskripsi</label>
                                                    <textarea name="" class="ckeditor form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-sm-12">

                                                    <div class="input-group" id="picker-container">
                                                        <label class="control-label" for="form-field-1">
                                                            Tanggal
                                                        </label>
                                                        <input type="text" id="date-picker"
                                                            data-date-format="dd-mm-yyyy" data-date-viewmode="years"
                                                            class="form-control date-picker">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
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
                                                    <label for="">Title</label>
                                                    <input type="text" placeholder=" Title" id="form-field-1"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="">Description</label>
                                                    <textarea name="" class="ckeditor form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-sm-12">

                                                    <div class="input-group" id="picker-container">
                                                        <label class="control-label" for="form-field-1">
                                                            Date
                                                        </label>
                                                        <input type="text" id="date-picker"
                                                            data-date-format="dd-mm-yyyy" data-date-viewmode="years"
                                                            class="form-control date-picker">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <p>
                                    Thumbnail
                                </p>
                                <label class="radio-inline">
                                    <input type="radio" name="videosource" checked value="yt">
                                    Youtube
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="videosource" value="local">
                                    Gambar
                                </label>


                            </div>
                            <div class="form-group" id="elemen">
                                <input type="text" placeholder="Url Youtube" id="form-field-1" class="form-control">
                            </div>

                        </div>
                        <div class="col-sm-4" id="recomend">

                        </div>
                    </div>
                    <br>
                    <div class="row pull-right">
                        <div class="col-md-12 space20">
                            <a href="?menu=tambah_berita" class="btn btn-default add-row my-2">
                                Batal <i class="fa fa-remove "></i>
                            </a>
                            <a href="?menu=tambah_berita" class="btn btn-primary add-row my-2">
                                Simpan Ke Draft <i class="fa fa-paper-plane "></i>
                            </a>
                            <a href="?menu=tambah_berita" class="btn btn-success add-row my-2">
                                Publikasi <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end: PAGE CONTENT-->
</div>