<?php include '_header.php' ?>


<section id="page-title">

    <div class="container clearfix">
        <h1>Siaran Pers</h1>
        <!-- <span>Powerful Form Processor</span> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Siaran Pers</li>
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
                                <div class="entry-image" class="custom-img">
                                    <a href="detail_pers.php"><img class="image_fade custom-img" src="gambar/pers1.jpg"
                                            alt="Image" style="opacity: 1;"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="detail_pers.php">BPSDM COLLABORATES WITH THE EUROPEAN
                                            COMMISSION IN ORGANISING VIRTUAL GENERAL LECTURE TO GIVE
                                            INTERNATIONAL INSIGHT TO CADETS</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                    <!-- <li><a href="detail_pers.phpdetail_pers.phpcomments"><i class="icon-comments"></i>
														53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p>Jakarta (4/7) - In order to give insight on the organisation of
                                        transportation in the European Union to cadets of colleges managed
                                        by the Ministry ...</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry entry-custom">
                            <div class="ipost clearfix">
                                <div class="entry-image" class="custom-img">
                                    <a href="detail_pers.php"><img class="image_fade custom-img"
                                            src="https://www.koran-jakarta.com/images/article/php7hjl_0_resized.jpg"
                                            alt="Image" style="opacity: 1;"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="detail_pers.php">BPSDM Perhubungan Optimalkan Pembelajaran Jarak
                                            Jauh</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                    <!-- <li><a href="detail_pers.phpdetail_pers.phpcomments"><i class="icon-comments"></i>
														53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p>JAKARTA - Pada masa Pandemi Covid-19, Badan Pengembangan Sumber Daya Manusia
                                        (BPSDM) Perhubungan terus melakukan berbagai terobosan agar...</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry entry-custom">
                            <div class="ipost clearfix">
                                <div class="entry-image" class="custom-img">
                                    <a href="#"><img class="image_fade custom-img"
                                            src="https://pict-a.sindonews.net/dyn/620/pena/news/2020/05/07/34/20583/bpsdmp-perhubungan-jaga-kualitas-pengajaran-di-tengah-covid19-vkt.jpg"
                                            alt="Image" style="opacity: 1;"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="detail_pers.php">BPSDMP Perhubungan Jaga Kualitas Pengajaran di Tengah
                                            Covid-19</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                    <!-- <li><a href="detail_pers.php#comments"><i class="icon-comments"></i>
														53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p>JAKARTA - Di tengah pandemi Covid-19, pendidikan taruna di bawah Badan
                                        Pengembangan Sumber Daya Manusia Perhubungan (BPSDMP) terus berupaya menjaga ...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry entry-custom">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                            src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0"
                                            allowfullscreen="" id="fitvid1"></iframe></div>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                    <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                                </div>
                                <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry entry-custom">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                            src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0"
                                            allowfullscreen="" id="fitvid1"></iframe></div>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                    <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                                </div>
                                <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry entry-custom">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe
                                            src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0"
                                            allowfullscreen="" id="fitvid1"></iframe></div>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                    <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                                </ul>
                                <div class="entry-content">
                                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
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
                        <a href="#" class="page-link">«</a>
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
                        <a href="#" class="page-link"></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

<?php include '_footer.php' ?>