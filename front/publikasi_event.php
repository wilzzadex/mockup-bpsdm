<?php include '_header.php' ?>


        <section id="page-title">

            <div class="container clearfix">
                <h1>Event</h1>
                <!-- <span>Powerful Form Processor</span> -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event</li>
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
                                            <option value="3" selected>3</option>
                                            <option value="6">6</option>
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
                                            <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQsi2O_8L3O13EVF_l0TBPdUHnIXUJjCcFthw&usqp=CAU"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQsi2O_8L3O13EVF_l0TBPdUHnIXUJjCcFthw&usqp=CAU"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_event.php">Kegiatan Kunjungan Orang Tua Catar, INaugurasi dan Libur Natal Serta Tahun Baru
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_event.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam odit quia ut tempora laudant...</p>
                                        </div>
                                        <a href="detail_event.php" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="https://poltekpel-banten.ac.id/wp-content/uploads/2020/02/IMG20200204075631-375x300.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="https://poltekpel-banten.ac.id/wp-content/uploads/2020/02/IMG20200204075631-375x300.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_event.php">Pengumuman Hasil Sidang PUKP-02 Periode 27-30 April 2020
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_event.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dicta, repreh...</p>
                                        </div>
                                        <a href="#" class="more-link mt-3" style="color: #007dc2;">Read More</a>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="col-md-4">
                                <article class="entry entry-custom">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="https://poltekpel-banten.ac.id/wp-content/uploads/2020/01/IMG-20200110-WA0045-375x300.jpg"
                                            data-lightbox="image"><img class="image_fade custom-img"
                                                src="https://poltekpel-banten.ac.id/wp-content/uploads/2020/01/IMG-20200110-WA0045-375x300.jpg"
                                                alt="1589950402-web6.jpg"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="detail_event.php">UKP Pra Prala taruna Diklat Pembentukan III
                                            </a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 13th Jun 2020</li>
                                            <!-- <li><a href="detail_event.php#comments"><i class="icon-comments"></i> 53</a></li> -->
                                        </ul>
                                        <div class="entry-content">
                                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laboriosam culpa magni, expedita debitis voluptatum architecto optio alias...</p>
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
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <?php include '_footer.php' ?>
