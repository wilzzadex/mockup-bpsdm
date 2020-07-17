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
                    Berita
                </li>
                <li>
                    Tambah Berita
                </li>
               
            </ol>
            <div class="page-header">
                <h1>Tambah Berita</h1>
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
                    <i class="fa fa-external-link-square"></i>Formulir Berita
                    <div class="panel-tools">
                        <!-- <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                        </a>
                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-refresh" href="#">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-expand" href="#">
                            <i class="fa fa-resize-full"></i>
                        </a>
                        <a class="btn btn-xs btn-link panel-close" href="#">
                            <i class="fa fa-times"></i>
                        </a> -->
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
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    Judul
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Judul" id="form-field-1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    Berita
                                                </label>
                                                <div class="col-sm-9">
                                                    <textarea class="ckeditor form-control" cols="10" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    Tanggal
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group" id="picker-container">
                                                        <input type="text" id="date-picker" data-date-format="dd-mm-yyyy"
                                                            data-date-viewmode="years" class="form-control date-picker">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
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
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    Title
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Title" id="form-field-1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    News
                                                </label>
                                                <div class="col-sm-9">
                                                    <textarea class="ckeditor form-control" cols="10" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-1">
                                                    Date
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group" id="picker-container">
                                                        <input type="text" id="date-picker" data-date-format="dd-mm-yyyy"
                                                            data-date-viewmode="years" class="form-control date-picker">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label" for="form-field-1">
                                    Media
                                </label>
                                <div class="col-sm-9">
                                    <div id="kv-avatar-errors" class="center-block" style="display:none"></div>
                                    <div class="kv-avatar ">
                                        <input id="mediaInfo" name="avatar" type="file" class="file-loading">
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group">
                               
                               <p>
                                  Thumbnail
                               </p>
                               <label class="radio-inline">
                                   <input type="radio"  name="videosource" checked value="yt">
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
                    <div class="row pull-right">
                        <div class="col-md-12 space20 ">
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