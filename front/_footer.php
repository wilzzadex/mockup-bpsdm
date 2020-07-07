<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

<div class="container">

	<!-- Footer Widgets
============================================= -->
	<div class="footer-widgets-wrap clearfix">

		<div class="col_full">
			<div class="row">
				<div class="col-md-3">
					<div class="widget clearfix">
						<h4 class="ftitle">Kontak</h4>
						<div class="clearfix"
							style="padding: 10px 0; background: url('images/world-map.png') no-repeat center center;">

							<i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Medan merdeka Timur No.
							5, Jakarta <br>
							<i class="fa fa-phone" aria-hidden="true"></i> (021) 3847519 <br>
							<i class="fa fa-envelope" aria-hidden="true"></i> humasti-bpsdmp@dephub.go.id




						</div>

						<img src="gambar/bpsdm.png" alt="" class="footer-logo">



					</div>
				</div>
				<div class="col-md-3">
					<!-- <div class="widget widget_links clearfix"> -->
						<div class="widget clearfix">
						<h4 class="ftitle">Kalender Kegiatan</h4>

						<div id="calendar"></div>
					</div>
					<!-- </div> -->
				</div>
				<div class="col-md-3">
					<div class="widget widget_links clearfix">

						<h4 class="ftitle">Menu</h4>

						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="profile_sejarah.php">Profil</a></li>
							<li><a href="publikasi_berita.php">Publikasi</a></li>
							<li><a href="sekolah_kedinasan.php">Sekolah</a></li>
							<li><a href="galeri_foto.php">Galeri</a></li>
							<li><a href="kontak.php">Kontak</a></li>
							<li><a href="#">Penerimaan Taruna</a></li>
						</ul>

					</div>
				</div>
				<div class="col-md-3">
					<div class="widget quick-contact-widget form-widget clearfix">

						<h4 class="ftitle">Sosial Media</h4>

						<a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded topmargin-sm si-instagram">
							<i class="icon-instagram"></i>
							<i class="icon-instagram"></i>
						</a>


					</div>
				</div>
			</div>


		</div>



	</div><!-- .footer-widgets-wrap end -->

</div>

<!-- Copyrights
============================================= -->
<div id="copyrights">

	<div class="container clearfix">

		<div class="col_full nobottommargin center">
			<!-- <div class="copyrights-menu copyright-links clearfix">
		<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a
			href="#">FAQs</a>/<a href="#">Contact</a>
	</div> -->
			Copyrights &copy; 2020 
		</div>

	</div>

</div><!-- #copyrights end -->

</footer>

</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
	============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>


<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>



<!-- Footer Scripts
	============================================= -->
<script src="js/functions.js"></script>
<script>
	jQuery(document).ready(function ($) {
		var $faqItems = $('#faqs .faq');
		if (window.location.hash != '') {
			var getFaqFilterHash = window.location.hash;
			var hashFaqFilter = getFaqFilterHash.split('#');
			if ($faqItems.hasClass(hashFaqFilter[1])) {
				$('#portfolio-filter li').removeClass('activeFilter');
				$('[data-filter=".' + hashFaqFilter[1] + '"]').parent('li').addClass('activeFilter');
				var hashFaqSelector = '.' + hashFaqFilter[1];
				$faqItems.css('display', 'none');
				if (hashFaqSelector != 'all') {
					$(hashFaqSelector).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
			}
		}

		$('#portfolio-filter a').on('click', function () {
			$('#portfolio-filter li').removeClass('activeFilter');
			$(this).parent('li').addClass('activeFilter');
			var faqSelector = $(this).attr('data-filter');
			$faqItems.css('display', 'none');
			if (faqSelector != 'all') {
				$(faqSelector).fadeIn(500);
			} else {
				$faqItems.fadeIn(500);
			}
			return false;
		});
	});
</script>
<script>
	var data = [
		['id-3700', 0],
		['id-ac', 1],
		['id-jt', 2],
		['id-be', 3],
		['id-bt', 4],
		['id-kb', 5],
		['id-bb', 6],
		['id-ba', 7],
		['id-ji', 8],
		['id-ks', 9],
		['id-nt', 10],
		['id-se', 11],
		['id-kr', 12],
		['id-ib', 13],
		['id-su', 14],
		['id-ri', 15],
		['id-sw', 16],
		['id-ku', 17],
		['id-la', 18],
		['id-sb', 19],
		['id-ma', 20],
		['id-nb', 21],
		['id-sg', 22],
		['id-st', 23],
		['id-pa', 24],
		['id-jr', 25],
		['id-ki', 26],
		['id-1024', 27],
		['id-jk', 28],
		['id-go', 29],
		['id-yo', 30],
		['id-sl', 31],
		['id-sr', 32],
		['id-ja', 33],
		['id-kt', 34]
	];

	// Create the chart
	Highcharts.mapChart('indonesia_maps', {
		chart: {
			map: 'countries/id/id-all'
		},

		title: {
			text: 'Data Diklat Berdasarkan Wilayah'
		},

		subtitle: {
			text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/id/id-all.js">Indonesia</a>'
		},

		mapNavigation: {
			enabled: true,
			buttonOptions: {
				verticalAlign: 'bottom'
			}
		},

		colorAxis: {
			min: 0
		},

		series: [{
			data: data,
			name: 'Random data',
			states: {
				hover: {
					color: '#BADA55'
				}
			},
			dataLabels: {
				enabled: true,
				format: '{point.name}'
			}
		}]
	});

</script>
<script>
	// Make monochrome colors
	var pieColors = (function () {
		var colors = [],
			base = Highcharts.getOptions().colors[0],
			i;

		for (i = 0; i < 10; i += 1) {
			// Start out with a darkened base color (negative brighten), and end
			// up with a much brighter color
			colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
		}
		return colors;
	}());

	// Build the chart
	Highcharts.chart('container', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Persentase Realisasi Perserta Berdasarkan Jenis Kelamin'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				colors: pieColors,
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
					distance: -50,
					filter: {
						property: 'percentage',
						operator: '>',
						value: 4
					}
				}
			}
		},
		series: [{
			name: 'Share',
			data: [
				{ name: 'Laki - Laki', y: 61.41 },
				{ name: 'Perempuan', y: 11.84 },

			]
		}]
	});
</script>
<script>


	var options = {
		series: [61],
		chart: {
			height: 400,
			type: 'radialBar',
		},
		plotOptions: {
			radialBar: {
				hollow: {
					size: '61%',
				}
			},
		},
		labels: ['Persentase Realisasi Peserta'],
	};

	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();
</script>

</body>

</html>