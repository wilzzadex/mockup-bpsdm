<?php include '_header.php' ?>


<section id="page-title">

    <div class="container clearfix">
        <h1>Infografis</h1>
        <!-- <span>Powerful Form Processor</span> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Infografis</li>
        </ol>
    </div>

</section>

<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
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
                    <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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


            
                <!-- Portfolio Items
            ============================================= -->
                <div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix"
                    style="position: relative; height: 1084.84px;">

                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis1.png" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis1.png" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis1.png" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Sebaran Pendidikan Pegawai</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>

                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis2.jpg" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis2.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis2.jpg" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Infografis Peta Sebaran Pelatihan</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>
                    
                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis3.jpg" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis3.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis3.jpg" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Infografis Peta Penyebaran Jafung</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>
                    
                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis4.png" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis4.png" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis4.png" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Infografis Peta Penyebaran Jafung</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>
                    
                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis5.jpg" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis5.jpg" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Infografis Peta Penyebaran Jafung</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>

                    <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-image custom-img">
                            <a href="#">
                                <img src="gambar/infografis6.jpg" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="gambar/infografis6.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-eye"></i></a>
                                <a target="_blank" href="gambar/infografis6.jpg" class="right-icon" download><i
                                        class="icon-download"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Infografis Peta Penyebaran Jafung</a></h3>
                            <!-- <span><a href="#">Media</a>, <a href="#">Icons</a></span> -->
                        </div>
                    </article>



                </div><!-- #portfolio end -->



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

                </ul>

            </div>
        </div>
    </div>
</section>

<?php include '_footer.php' ?>