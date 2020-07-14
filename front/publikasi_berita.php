<?php include '_header.php' ?>


        <section id="page-title">

            <div class="container clearfix">
                <h1>Berita</h1>
                <!-- <span>Powerful Form Processor</span> -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </div>

        </section>

        <section id="content" style="margin-bottom: 0px;">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="input-group w-100">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-line-search"></i>
                                    </span>
                                </div>
                                <input type="text" id="icons-filter" class="form-control" value="" placeholder="Pencarian">
                                <a href="javascript:void(0);" class="btn btn-primary cari" style="margin-left: 10px;">Cari</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6" id="container-show">
                            <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer float-right">
                                <div class="dataTables_length" id="datatable1_length">
                                    <label style="float: right;">Tampilkan
                                        <select name="datatable1_length" aria-controls="datatable1" id="shows"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="3">3</option>
                                            <option value="6" selected="">6</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="15">15</option>
                                        </select> pada Halaman
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="reload" style="display: none;">
                        <a href="javascript:void(0);" id="reload-page"
                            class="btn btn-secondary btn-md btn-block mx-auto topmargin-lg" style="max-width: 15rem;"><i
                                class="icon-repeat" style="position: relative; top: 1px;"></i> Muat Ulang </a>
                    </div>
                    <div id="berita_render">
                        <script>
                            $('#container-show').show();
                        </script>

                        <div class="row mt-3 clearfix">

            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_06_03_102236_f231b30bf1df7e919721da324892c382.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_06_03_102236_f231b30bf1df7e919721da324892c382.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">TINGKATKAN PERLINDUNGAN LINGKUNGAN MARITIM, KEMENHUB-IMO SELENGGARAKAN TRAINING LEGAL, POLICY AND INTERNAL REFORM
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Jakarta (2/6) – Kementerian Perhubungan RI dan Pengurus Pusat Muhammadiyah, jalin kerja sama Sinergi Penyelenggaraan Pendidikan Dan Pelatihan di...</p>
                                        </div>
                                        <a href="detail_berita.php" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_02_06_105250_f126019974451612e9d328243b164815.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_02_06_105250_f126019974451612e9d328243b164815.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">TINGKATKAN KOMPETENSI PETUGAS, BPSDM PERHUBUNGAN SELENGGARAKAN DIKLAT PENANGANAN DANGEROUS GOOD DAN ISPS CODE
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Jakarta – Kepala Pusat Pengembangan SDM Perhubungan Laut (PPSDMPL), I Nyoman Sukayadnya, menutup Diklat Penanganan Muatan Berbahaya (Dangerous Good)...</p>
                                        </div>
                                        <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_02_06_105017_bd669798434501cdaf5d581525aac891.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_02_06_105017_bd669798434501cdaf5d581525aac891.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">TARUNA BPSDM PERHUBUNGAN TERPILIH MENJADI TOP 5 DALAM PROGRAM PERTUKARAN DAN BEASISWA LITERASI ROTARY KE MALAYSIA
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">SURABAYA (5/2) - Taruna Politeknik Penerbangan (Poltekbang) Surabaya Badan Pengembangan SDM Perhubungan (BPSDMP) Kementerian Perhubungan...</p>
                                        </div>
                                        <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_30_150413_a60f9a7a9f51bbc44c7ba1d960ec9a4b.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_30_150413_a60f9a7a9f51bbc44c7ba1d960ec9a4b.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">BPSDMP SELENGGARAKAN WISUDA DAN TRADISI BON VOYAGE BAGI LULUSAN MASTER KEPELAUTAN BP3IP
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Jakarta (29/1) – Balai Besar Pendidikan Penyegaran dan Peningkatan Ilmu Pelayaran (BP3IP) Jakarta selenggarakan upacara Bon Voyage ke-47 yang diikuti...</p>
                                        </div>
                                        <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_20_101234_c7c53782dfeb374a393e007b707a36d6.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_20_101234_c7c53782dfeb374a393e007b707a36d6.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">TINDAK LANJUTI MOU TENTANG PENGEMBANGAN SDM PERHUBUNGAN UDARA
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">SURABAYA (17/1) – Kepala Pusat Pengembangan Sumber Daya Manusia Perhubungan Udara (PPSDMPU), Badan Pengembangan SDM Perhubungan ...</p>
                                        </div>
                                        <a href="" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_10_154101_349a43430ca39949d1bc968df8ddef48.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="http://bpsdm.dephub.go.id/uploads/gambar_berita/2020_01_10_154101_349a43430ca39949d1bc968df8ddef48.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_berita.php">TINGKATKAN KOMPETENSI SDM MARITIM, KEPALA BPSDM PERHUBUNGAN LANTIK PERWIRA PELAUT

                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_berita.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Jakarta (8/1) - Kepala Badan Pengembangan Sumber Daya Manusia Perhubungan (BPSDMP), Umiyatun Hayati Triastuti memimpin upacara Wisuda ...</p>
                                        </div>
                                        <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>



                        </div>

                        <!-- Pagging 
============================================= -->
                        <ul class="pagination nobottommargin fright topmargin-sm">
                            <li class="page-item  disabled">
                                <a href="#"
                                    class="page-link">«</a>
                            </li>
                            <li class="page-item ">
                                <a href="#" class="page-link">1</a>
                            </li>
                           
                            <li class="page-item ">
                                <a href="#" class="page-link">2</a>
                            </li>
                           
                            <li class="page-item ">
                                <a href="#" class="page-link">3</a>
                            </li>
                           
                            <li class="page-item ">
                                <a href="#" class="page-link">4</a>
                            </li>
                           
                            <li class="page-item ">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item  disabled">
                                <a href="#"
                                    class="page-link"></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <?php include '_footer.php' ?>
