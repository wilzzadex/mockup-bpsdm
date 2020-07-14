<?php include '_header.php' ?>
<section id="page-title">

<div class="container clearfix">
    <h1>Galeri Video</h1>
    <!-- <span>Powerful Form Processor</span> -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
        <li class="breadcrumb-item active" aria-current="page">Video</li>
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
                <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-foote float-right">
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
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/p3RlL_9j5YI" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Pengalaman Berkuliah di Sekolah Transportasi

                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
                        </div>
                    </article>
                </div>
                
                <div class="col-md-4">
                    <article class="entry entry-custom">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/71fdtQDs728" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">VIDEO PROFIL STTD BEKASI (SEKOLAH TINGGI TRANSPORTASI DARAT)

                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
                        </div>
                    </article>
                </div>
                
                <div class="col-md-4">
                    <article class="entry entry-custom">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/QltOhMyiB5k" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">WISUDA TERPADU BPSDMP 2016 (PERWIRA TRANSPORTASI DARAT, LAUT, DAN UDARA)

                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
                        </div>
                    </article>
                </div>
                
                <div class="col-md-4">
                    <article class="entry entry-custom">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/TvAz5yZopqw" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">SELAMAT HARI PERHUBUNGAN NASIONAL 2019
                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
                        </div>
                    </article>
                </div>
                
                <div class="col-md-4">
                    <article class="entry entry-custom">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/6H7_Z-DsjFs" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">SIPENCATAR 2020
                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
                        </div>
                    </article>
                </div>
                
                <div class="col-md-4">
                    <article class="entry entry-custom">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://www.youtube.com/embed/8U5-qSZbAQ" frameborder="0" allowfullscreen="" id="fitvid1"></iframe></div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">VIDEO PROFIL STIP JAKARTA (SEKOLAH TINGGI ILMU PELAYARAN)
                                </a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                <!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li> -->
                            </ul>
                            <!-- <div class="entry-content">
                                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, debitis sit magnam accusamus reiciendis fugiat unde? Autem ipsam ...</p>
                            </div>
                            <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a> -->
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