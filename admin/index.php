<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>ADMIN BPSDMP</title>
    <link rel="shortcut icon" href="../front/gambar/upt/Logo BPSDM.jpg" />
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
    <meta content="ClipTheme" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link type="text/css" rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/fonts/clip-font.min.css" />
    <link type="text/css" rel="stylesheet" href="bower_components/iCheck/skins/all.css" />
    <link type="text/css" rel="stylesheet" href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link type="text/css" rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/main.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/main-responsive.min.css" />
    <link type="text/css" rel="stylesheet" media="print" href="assets/css/print.min.css" />
    <link type="text/css" rel="stylesheet" id="skin_color" href="assets/css/theme/light.min.css" />
    <link href="bower_components/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />

    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link href="assets/plugin/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="bower_components/jquery.tagsinput/dist/jquery.tagsinput.min.css" rel="stylesheet" />
    <link href="bower_components/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" />


    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>

<body>

    <!-- start: HEADER -->
    <?php include 'include/_navbar.php' ?>
    <!-- end: HEADER -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
            <!-- start: SIDEBAR -->
            <?php include 'include/_sidebar.php' ?>
            <!-- end: SIDEBAR -->
        </div>

        <!-- start: PAGE -->
        <div class="main-content">
            <!-- start: PANEL CONFIGURATION MODAL FORM -->
            <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title">Panel Configuration</h4>
                        </div>
                        <div class="modal-body">
                            Here will be a configuration form
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- end: SPANEL CONFIGURATION MODAL FORM -->
            <!-- CONTENT -->
            <?php
                if(isset($_GET['menu'])){
                    $menu = $_GET['menu'];
                    if($menu == 'Dashboard'){
                        include 'dashboard.php';
                    }elseif($menu == 'p_berita'){
                        include 'p_berita_index.php';
                    }elseif($menu == 'tambah_berita'){
                        include 'p_berita_tambah.php';
                    }elseif($menu == 'sejarah'){
                        include 'profil_sejarah.php';
                    }elseif($menu == 'visimisi'){
                        include 'profil_visimisi.php';
                    }elseif($menu == 'tugas'){
                        include 'profil_tugas.php';
                    }elseif($menu == 'struktur'){
                        include 'profil_struktur.php';
                    }elseif($menu == 'p_infografis'){
                        include 'p_infografis.php';
                    }elseif($menu == 'tambah_infografis'){
                        include 'p_infografis_tambah.php';
                    }elseif($menu == 'p_siaran_pers'){
                        include 'p_siaran_pers.php';
                    }elseif($menu == 'tambah_siaran_pers'){
                        include 'p_siaran_pers_tambah.php';
                    }elseif($menu == 'm_slider'){
                        include 'm_slider.php';
                    }elseif($menu == 'tambah_slider'){
                        include 'm_slider_tambah.php';
                    }elseif($menu == 'm_faq'){
                        include 'm_faq.php';
                    }elseif($menu == 'tambah_faq'){
                        include 'm_faq_tambah.php';
                    }elseif($menu == 'm_album'){
                        include 'm_album.php';
                    }elseif($menu == 'tambah_album'){
                        include 'm_album_tambah.php';
                    }
                }else{
                    include 'dashboard.php';
                }
            ?>

            <!-- END CONTENT -->
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <div class="footer clearfix">
        <div class="footer-inner">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; clip-one by cliptheme.
        </div>
        <div class="footer-items">
            <span class="go-top"><i class="clip-chevron-up"></i></span>
        </div>
    </div>
    <!-- end: FOOTER -->
    <!-- start: RIGHT SIDEBAR -->

    <!-- end: RIGHT SIDEBAR -->
    <div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Event Management</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                        Close
                    </button>
                    <button type="button" class="btn btn-danger remove-event no-display">
                        <i class='fa fa-trash-o'></i> Delete Event
                    </button>
                    <button type='submit' class='btn btn-success save-event'>
                        <i class='fa fa-check'></i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
        <script src="../../bower_components/respond/dest/respond.min.js"></script>
        <script src="../../bower_components/Flot/excanvas.min.js"></script>
        <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
        <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<![endif]-->

    <script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="bower_components/iCheck/icheck.min.js"></script>
    <script type="text/javascript"
        src="bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="assets/js/min/main.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
  
    <script src="assets/plugin/jquery.sparkline.min.js"></script>
    <script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="bower_components/jqueryui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="assets/js/min/index.min.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="assets/js/min/table-data.min.js"></script>

    

    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>
    <script src="bower_components/autosize/dist/autosize.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.min.js"></script>
    <script src="bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
    <script src="bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js"></script>
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="bower_components/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="bower_components/summernote/dist/summernote.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/ckeditor/adapters/jquery.js"></script>
    <script src="bower_components/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js"></script>
    <script src="bower_components/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="assets/js/min/form-elements.min.js"></script>

    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        var img_id = 1;
        function addGambar(){
            $('.gambar').append(`
            <div class="row" id=img_`+img_id+`>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="file" accept=".jpg,.png" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-danger btn-sm" onclick="removeGambar(`+img_id+`)">Hapus</button>
                    </div>
                </div>
            </div>
            `)
            img_id++;
        }

        function removeGambar(id){
            // alert(id)
            var items = $('.btn-danger')
            // console.log(items.length) 
            if(items.length == 2){
                alert('Minimal harus ada 1 gambar !')
            }else{
                $('#img_'+id).remove()
            }
        }
        
        $(document).ready(function(){
            $('input:radio[name="videosource"]').change(
                function(){
                   var type = $(this).val()
                   if(type == 'yt'){
                        $('#elemen').empty()
                        $('#elemen').append(` <input type="url" placeholder="Url Youtube" class="form-control">`)
                   }else{
                    // console.log(type)
                        $('#elemen').empty()
                        $('#elemen').append(` <input type="file"  id="form-field-1" class="form-control">`)
                   }
                   
                });
            $('#sample_1').dataTable();
            
            $('#date-picker').datepicker({
                format:"dd MM yyyy"
            });
            
            $("#input-simple").fileinput(), $("#input-preview").fileinput();
            $("#mediaIn").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showCaption: !1,
                browseLabel: "",
                removeLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                defaultPreviewContent: '<img src="http://www.placehold.it/160x160/EFEFEF/AAAAAA?text=no+image" alt="Your Avatar" >',
                layoutTemplates: {
                    main2: "{preview} {remove} {browse}"
                },
                allowedFileExtensions: ["jpg", "png", "gif"]
            })
            $("#mediaEn").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showCaption: !1,
                browseLabel: "",
                removeLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                defaultPreviewContent: '<img src="http://www.placehold.it/160x160/EFEFEF/AAAAAA?text=no+image" alt="Your Avatar" >',
                layoutTemplates: {
                    main2: "{preview} {remove} {browse}"
                },
                allowedFileExtensions: ["jpg", "png", "gif"]
            })
            $("#struktur").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showCaption: !1,
                browseLabel: "",
                removeLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                defaultPreviewContent: '<img class="text-center" src="http://bpsdm.dephub.go.id/uploads/sturktur_organisasi/2019_08_26_112933_9d9f04747470d6c117f335119424ee5d.jpg" alt="Your Avatar" >',
                layoutTemplates: {
                    main2: "{preview} {remove} {browse}"
                },
                allowedFileExtensions: ["jpg", "png", "gif"]
            })
            $("#mediaInfo").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showCaption: !1,
                browseLabel: "",
                removeLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                defaultPreviewContent: '<img src="http://www.placehold.it/160x160/EFEFEF/AAAAAA?text=no+image" alt="Your Avatar" >',
                layoutTemplates: {
                    main2: "{preview} {remove} {browse}"
                },
                allowedFileExtensions: ["jpg", "png", "gif"]
            })

            CKEDITOR.disableAutoInline = !0, $("textarea.ckeditor").ckeditor()

            282


            
            
        })
        jQuery(document).ready(function () {
            
            Main.init();
            Index.init();
        });


        // CKEDITOR.replace( 'editor1' );
            // CKEDITOR.replace( 'editor2' );
    </script>

</body>

</html>