<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>ADMIN BPSDMP</title>
    <link rel="shortcut icon" href="gambar/13.png" />
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
    <style>
        td.details-control {
            background: url('icon/Plus.ico') no-repeat center center;
            cursor: pointer;
        }
        tr.shown td.details-control {
            background: url('icon/Minus.ico') no-repeat center center;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 2px 16px;
            }

        .card-title{
            font-size : 20px;
            font-weight : bold;
        }

        .recommendation, .recommendation ul {
            color: #999999;
            text-align: left;
            float: left;
            font-style: italic;
        }


        #tes {
            display: none;
        }
        .btn-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

       
    </style>
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
                    }elseif($menu == 'h_sosial'){
                        include 'm_sosial_media.php';
                    }elseif($menu == 'h_alamat'){
                        include 'h_alamat.php';
                    }elseif($menu == 'p_event'){
                        include 'p_event.php';
                    }elseif($menu == 'tambah_event'){
                        include 'p_event_tambah.php';
                    }elseif($menu == 'sekolah'){
                        include 'sekolah.php';
                    }elseif($menu == 'sekolah_tambah'){
                        include 'sekolah_tambah.php';
                    }elseif($menu == 'kontak'){
                        include 'kontak.php';
                    }elseif($menu == 'video'){
                        include 'g_video.php';
                    }elseif($menu == 'tambah_video'){
                        include 'tambah_video.php';
                    }elseif($menu == 'satuan_kerja'){
                        include 'satuan_kerja.php';
                    }elseif($menu == 'u_muser'){
                        include 'u_muser.php';
                    }elseif($menu == 'tambah_user'){
                        include 'u_muser_tambah.php';
                    }elseif($menu == 'u_mrole'){
                        include 'u_mrole.php';
                    }elseif($menu == 'struktur_edit'){
                        include 'struktur_edit.php';
                    }elseif($menu == 'edit_satuan'){
                        include 'edit_satuan.php';
                    }else{
                        // include 'login.php';
                    }
                }else{
                    include 'dashboard.php';
                }
            ?>

            <!-- END CONTENT -->
        </div>
        <!-- end: PAGE -->
    </div>
    <div class="modal fade" id="modalGambar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <center><img class="text-center" width="300px" style="width: 500px;border-radius: 10px;" src="http://bpsdm.dephub.go.id/uploads/sturktur_organisasi/2019_08_26_112933_9d9f04747470d6c117f335119424ee5d.jpg" alt="Your Avatar" ></center>
        </div>
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        var img_id = 1;
        function addGambar(){
            $('#gambar').append(`
                        
                        <tr id="img_`+img_id+`">
                        <td><input type="text" placeholder="Judul ..." class="form-control"></td>
                                        <td><input type="text" placeholder="Judul ..." class="form-control"></td>
                                        <td>
                                            <label class="btn btn-raised btn-default btn-sm" style="color: white; width: 180px; background:grey; height: 30px;"> <i class="fa fa-picture-o"></i> Pilih Gambar<input type="file" name="file[]" accept="image/*" style="opacity: 0;" onchange="hasilgmbr(this)" required></label>  
                                            <span class="label-gmbr" style="margin-left: 2%;"> Belum Ada Gambar</span>  
                                           
                                        </td>
                        <td><button class="btn btn-danger btn-sm" onclick="removeGambar(`+img_id+`)"><i class="fa fa-trash"></i></button></td>
                    </tr>
                `)
                img_id++;
        }

        misi_id = 1;
        function addMisi(){
            $('#misi').append(`
                <tr id="misi_`+misi_id+`">
                    <td><input placeholder="Misi ..." type="text" class="form-control" name="" id=""></td>
                    <td> &nbsp<button class="btn btn-danger btn-sm remove-misi" onclick="removeMisi(`+misi_id+`)"> <i class="fa fa-trash"></i></button></td>
                </tr>
            `)
            misi_id++
        }

        function removeMisi(id){
            // var items = $('.btn-danger.remove-misi')
        //    console.log(items.length) 
            // if(items.length == 2){
            //     alert('Minimal harus ada 1 gambar !')
            // }else{
                $('#misi_'+id).remove()
            // }

        }

        function removeGambar(id){
            // alert(id)
            var items = $('.btn-danger')
            // console.log(items.length) 
            if(items.length == 2){
                swal({
                    text: "Minimal Terdapat 1 Foto !",
                    icon: "warning",
                });
                // alert('Minimal harus ada 1 gambar !')
            }else{
                $('#img_'+id).remove()
            }
        }
        function formatDarat ( d ) {
            return `<table cellpadding="5" class="table table-bordered" cellspacing="0" border="0" style="padding-left:50px;">
                    <tr>
                        <td width="28px">1.</td>
                        <td width="493px">PDTI STTD - BEKASI</td>
                        <td width="400px">02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>POLTERKTRANS SDP - PALEMBANG</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                    <td>3.</td>
                        <td>PKTJ - TEGAL</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                    <td>4.</td>
                        <td>POLTRADA - BALI</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                    <td>5.</td>
                        <td>PPI - MADIUN</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                    <td>6.</td>
                        <td>BPPTD - MEMPAWAH</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                   </table>`;
        }
        function formatLaut ( d ) {
            return `<table cellpadding="5" class="table table-bordered" cellspacing="0" border="0" style="padding-left:50px;">
                    <tr>
                        <td width="28px">1.</td>
                        <td width="493px">STIP - JAKARTA</td>
                        <td width="400px">02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">2.</td>
                        <td>PIP - SEMARANG</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">3.</td>
                        <td>PIP - MAKASSAR</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">4.</td>
                        <td>POLTEKPEL - BANTEN</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">5.</td>
                        
                        <td>POLTEKPEL - SURABAYA</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">6.</td>
                        <td>POLTEKPEL - BAROMBONG</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">7.</td>
                        <td>POLTEKPEL - SORONG</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">8.</td>
                        <td>POLTEKPEL - MALAHAYATI</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">9.</td>
                        <td>POLTEKPEL - SULAWESI UTARA</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">10.</td>
                        <td>POLTEKPEL - SUMATERA BARAT</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">11.</td>
                        <td>BP3IP - JAKARTA</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                   
                   </table>`;
        }
        function formatUdara ( d ) {
            return `<table cellpadding="5" class="table table-bordered" cellspacing="0" border="0" style="padding-left:50px;">
                    
                    <tr>
                        <td width="28px">1.</td>
                        <td width="493px">PPI - CURUG</td>
                        <td width="400px">02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">2.</td>
                        <td>POLTEKBANG - MEDAN</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">3.</td>
                        <td>POLTEKBANG - SURABAYA</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">4.</td>
                        <td>POLTEKBANG - MAKASSAR</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                    <tr>
                        <td width="28px">5.</td>
                        <td>API - BANYUWANGI</td>
                        <td>02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                   </table>`;
        }
        function formatAparatur ( d ) {
            return `<table cellpadding="5" class="table table-bordered" cellspacing="0" border="0" style="padding-left:50px;">
                    
                    <tr>
                        <td width="28px">1.</td>
                        <td width="493px">BP3KSDMT - BANDUNG</td>
                        <td width="400px">02 Juli 2020</td>
                        <td><a href="?menu=struktur_edit" class="btn btn-info btn-xs">Edit</a></td>
                    </tr>
                   
                   </table>`;
        }

        // function addDarat(){
        //     var tes = $(this).attr('class')
        //     console.log(tes)
        // }

        $(document).ready(function(){

            
            
            var table = $('#example').removeAttr('width').DataTable({
               
            })

            $('#example tbody').on('click', 'td.details-control.darat', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );
        
                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( formatDarat(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );
            $('#example tbody').on('click', 'td.details-control.laut', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );
        
                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( formatLaut(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );
            $('#example tbody').on('click', 'td.details-control.udara', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );
        
                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( formatUdara(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );
            $('#example tbody').on('click', 'td.details-control.aparatur', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );
        
                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( formatAparatur(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );

          

            $('input:radio[name="videosource"]').change(
                function(){
                   var type = $(this).val()
                   if(type == 'yt'){
                        $('#elemen').empty()
                        $('#elemen').append(` <input type="url" placeholder="Url Youtube" class="form-control">`)
                        $('#recomend').empty()
                       
                   }else{
                    // console.log(type)
                        $('#elemen').empty()
                        $('#elemen').append(`
                          <label class="btn btn-raised btn-default btn-sm" style="color: white; width: 180px; background:grey; height: 30px;"> <i class="fa fa-picture-o"></i> Pilih Gambar<input type="file" name="file[]" accept="image/*" style="opacity: 0;" onchange="hasilgmbr(this)" required></label>  
                            <span class="label-gmbr" style="margin-left: 2%;"> Belum Ada Gambar</span>
                                              `)
                        $('#recomend').append(`
                            
                                <label class="recommendation">
                                    Keterangan:<br>
                                    <ul>
                                        <li>Rekomendasi Ukuran Image: 350x200 pixel</li>
                                        <li>Ukuran File Image Maksimal: 5 Mb</li>
                                    </ul>
                                </label>
                            
                        `)
                   }
                   
                });
            $('#sample_1').dataTable({
                "language": {
                            "sSearch": "Cari",
                            "lengthMenu": "Menampilkan _MENU_ baris",
                            "zeroRecords": "Nothing found - sorry",
                            "info": "Manampilkan Halaman _PAGE_ dari _PAGES_ Halaman",
                            "infoEmpty": "Tidak Ditemukan Data",
                            "infoFiltered": "(Terfilter dari _MAX_ total Baris)",
                            "oPaginate": {
                                "sFirst" : "Pertama"
                            }
                            }
            });
            
            $('#date-picker').datepicker({
                format:"dd MM yyyy"
            });

            $('.time-picker').timepicker();
            
            // $("#input-simple").fileinput(), $("#input-preview").fileinput();
          
            $("#struktur").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showCaption: !1,
                browseLabel: "",
                removeLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-picture"></i> Pilih Gambar',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                defaultPreviewContent: '<a href="#" data-toggle="modal" data-target="#modalGambar"><img class="text-center" width="300px" src="http://bpsdm.dephub.go.id/uploads/sturktur_organisasi/2019_08_26_112933_9d9f04747470d6c117f335119424ee5d.jpg" alt="Your Avatar" ></a>',
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
                browseIcon: '<i class="glyphicon glyphicon-picture"></i> Pilih Gambar',
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
            $("#input-simple").fileinput({
                overwriteInitial: !0,
                maxFileSize: 2e3,
                showClose: !1,
                showUpload : !1,
                browseLabel: "",
                removeLabel: "",
                uploadLabel: "",
                browseIcon: '<i class="glyphicon glyphicon-picture"></i> Pilih Gambar',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: "Cancel or reset changes",
                elErrorContainer: "#kv-avatar-errors",
                msgErrorClass: "alert alert-block alert-danger",
                allowedFileExtensions: ["jpg", "png", "gif"]
           
            });

            $(".date-range").daterangepicker(), $(".date-time-range").daterangepicker({
                timePicker: !0,
                timePickerIncrement: 30,
                locale: {
                    format: "MM/DD/YYYY h:mm A"
                }
            })
            CKEDITOR.disableAutoInline = !0, $("textarea.ckeditor").ckeditor()

        })
        jQuery(document).ready(function () {
            
            Main.init();
            Index.init();
        });

        function hasilgmbr(obj) {
            var url = $(obj).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            var text = url.substring(12);
            
            if (obj.files && obj.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
                if(obj.files[0].size > 5242880){
                    var mb = (5242880/1024/1024);
                    swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'File gambar harus lebih kecil dari '+mb+' MB',
                    },function(){
                        $(obj).closest('td').find('.label-gmbr').html('Tidak ada gambar');
                        $("#inputFile").val('');
                    });
                }else{
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var image = new Image();
                        image.src = e.target.result;
                        image.onload = function () {
                          var height = this.height;
                          var width = this.width;
                          console.log(width+'x'+height);
                        };
                        $(obj).closest('td').find('.label-gmbr').html('<a href="javascript:void(0);" onclick="lihat_gmbr(this)" data-toggle="modal" data-target="#detil" data-gmbr="'+e.target.result+'">'+text+'</a>');
                    }
                    reader.readAsDataURL(obj.files[0]);  
                }
                              
            }
            else{
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Anda salah memasukan gambar. Gambar harus dalam format png/jpeg/jpg!',
                },function(){
                    $(obj).val('');
                    $(obj).closest('td').find('.label-gmbr').text('Belum ada gambar.');
                });
            }
        }


        function lihat_gmbr(obj) {
            var img = $(obj).attr('data-gmbr');
            $('#gambar_modal').attr('src', img);
        }

        

       


        // CKEDITOR.replace( 'editor1' );
            // CKEDITOR.replace( 'editor2' );
    </script>

</body>

</html>