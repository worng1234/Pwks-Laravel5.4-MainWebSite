<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<style>
		/* Ensure that the demo table scrolls */
		th,
		td {
			white-space: nowrap;
		}

		div.dataTables_wrapper {
			margin: 0 auto;
		}

		div.container {
			width: 80%;
		}

		.bgimgheader {

			background-repeat: repeat;
			background-position: center;
			position: relative;
		}
		.saraban {
			font-family: 'Sarabun', sans-serif;
		}
		
	</style>



	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">


		<div align="center" style="margin-top:10px;">
			<img src="../assets/img/logo3.png" width="20%" height="20%">
		</div>
		<div align="center" style="margin-top:20px;">
			<h2 class="saraban">ประวัติความประพฤติรายบุคคล</h2>
		</div>
		<div class="wrapper" style="margin-top:10px;">
			<div class="row">
				<div class="table-responsive">
					<div class="form-group">
						<table style="border-spacing: 5px; border-collapse: separate; width: 100%">
							<tr>
								<td>
									<table style="border-spacing: 5px; border-collapse: separate; width: 100%">
										<tr>
											<td style="text-align: left; vertical-align: top; width: 80px;" class="saraban">เลขประจำตัวนักเรียน
											</td>
											<td>
											{{$data_student->student_id}}
											</td>
										</tr>
										<tr>
											<td style="text-align: left; vertical-align: top;" class="saraban">ชื่อ-นามสกุล
											</td>
											<td class="saraban">
											{{$data_student->prename}}{{$data_student->fname}} {{$data_student->surname}}
											</td>
										</tr>
										<tr>
											<td style="text-align: left; vertical-align: top;" class="saraban">ชั้นเรียน/ห้อง
											</td>
											<td class="saraban">
											{{$data_student->student_class}}/{{$data_student->student_room}}
											</td>
										</tr>
										<tr>
											<td style="text-align: left; vertical-align: top;" class="saraban">เลขที่
											<td class="saraban">
											{{$data_student->student_number}}
											</td>
										</tr>
										<tr>
											<td style="text-align: left; vertical-align: top;" class="saraban">คะแนนล่าสุด
											</td>
											<td class="saraban">
											{{$data_student->score}}
											</td>
										</tr>
									</table>
								</td>
								<td style=" vertical-align: top; width: 125px">
									<table style="border-spacing: 5px; border-collapse: separate; width: 100%">
										<tr>
											<td>
												<img id="mainContentPlaceHolder_signinImage" src="../ImgAll/profile_img/{{$photo->profile_img}}" style="height:165px; width:125px;" />
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div style="margin-top:30px;">
				<h4 style="text-align: center;" class="saraban">ประวัติความประพฤติด้านบวก</h4>
			</div>
			<div class="table-responsive">
				<table style="width:100%; border:1px solid black;">
					<thead style="border:1px solid black;">
						<tr>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>วัน/เดือน/ปี</center>
							</th>
							<th scope="col" width="10%" style="border:1px solid black;" class="saraban">
								<center>ชื่อ-นามสกุล</center>
							</th>
							<th scope="col" width="20%" style="border:1px solid black;" class="saraban">
								<center>ประวัติความประพฤติ</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>เพิ่มคะแนน</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>ภาคเรียน</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>ปีการศึกษา</center>
							</th>
						</tr>
					</thead>
					<tbody style="border:1px solid black;">
						@foreach ($student_Plus as $key => $value)
						<tr>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_day}}/{{$value->behavior_mount}}/20{{$value->behavior_year}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->fullname}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_history}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->plus_score}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_term}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_study_year}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div style="margin-top:30px;">
				<h4 style="text-align: center;" class="saraban">ประวัติความประพฤติด้านลบ</h4>
			</div>

			<div class="table-responsive" >
				<table style="width:100%; border:1px solid black;">
					<thead style="border:1px solid black;">
						<tr>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>วัน/เดือน/ปี</center>
							</th>
							<th scope="col" width="10%" style="border:1px solid black;" class="saraban">
								<center>ชื่อ-นามสกุล</center>
							</th>
							<th scope="col" width="20%" style="border:1px solid black;" class="saraban">
								<center>ประวัติความประพฤติ</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>หักคะแนน</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>ภาคเรียน</center>
							</th>
							<th scope="col" width="5%" style="border:1px solid black;" class="saraban">
								<center>ปีการศึกษา</center>
							</th>
						</tr>
					</thead>
					<tbody style="border:1px solid black;">
					@foreach ($student_Minus as $key => $value)
						<tr>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_day}}/{{$value->behavior_mount}}/20{{$value->behavior_year}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->fullname}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_history}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->minus_score}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_term}}</td>
							<td align="center" style="border:1px solid black;" class="saraban">{{$value->behavior_study_year}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!--   Core JS Files   -->
		<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="../assets/js/core/popper.min.js"></script>
		<script src="../assets/js/core/bootstrap.min.js"></script>

		<!-- jQuery UI -->
		<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

		<!-- jQuery Scrollbar -->
		<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

		<!-- Chart JS -->
		<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

		<!-- jQuery Sparkline -->
		<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

		<!-- Chart Circle -->
		<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

		<!-- Moment JS -->
		<script src="../assets/js/plugin/moment/moment.min.js"></script>

		<!-- Datatables -->
		<!-- <script src="../assets/js/plugin/datatables/datatables.min.js"></script> -->

		<!-- DateTimePicker -->
		<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

		<!-- jQuery Scrollbar -->
		<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

		<!-- Select2 -->
		<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

		<!-- jQuery Vector Maps -->
		<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
		<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

		<!-- Sweet Alert -->
		<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

		<!-- Atlantis JS -->
		<script src="../assets/js/atlantis.min.js"></script>

		<!-- Bootstrap Toggle -->
		<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

		<!-- Bootstrap Tagsinput -->
		<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="../assets/js/setting-demo2.js"></script>

		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>


		<!-- Date time picker -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#basic-datatables').DataTable({
					dom: 'Bfrtip',
					buttons: [
						'excelHtml5',
					],
					"pageLength": 10,
					"language": {
						"search": "ค้นหาข้อมูล :"
					},
					"ordering": false,
					"searching": false
				});
			});
		</script>

		<script>
			Circles.create({
				id: 'circles-1',
				radius: 45,
				value: 60,
				maxValue: 100,
				width: 7,
				text: 5,
				colors: ['#f1f1f1', '#FF9E27'],
				duration: 400,
				wrpClass: 'circles-wrp',
				textClass: 'circles-text',
				styleWrapper: true,
				styleText: true
			})

			Circles.create({
				id: 'circles-2',
				radius: 45,
				value: 70,
				maxValue: 100,
				width: 7,
				text: 36,
				colors: ['#f1f1f1', '#2BB930'],
				duration: 400,
				wrpClass: 'circles-wrp',
				textClass: 'circles-text',
				styleWrapper: true,
				styleText: true
			})

			Circles.create({
				id: 'circles-3',
				radius: 45,
				value: 40,
				maxValue: 100,
				width: 7,
				text: 12,
				colors: ['#f1f1f1', '#F25961'],
				duration: 400,
				wrpClass: 'circles-wrp',
				textClass: 'circles-text',
				styleWrapper: true,
				styleText: true
			})

			var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

			var mytotalIncomeChart = new Chart(totalIncomeChart, {
				type: 'bar',
				data: {
					labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
					datasets: [{
						label: "Total Income",
						backgroundColor: '#ff9e27',
						borderColor: 'rgb(23, 125, 255)',
						data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
					}],
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false,
					},
					scales: {
						yAxes: [{
							ticks: {
								display: false //this will remove only the label
							},
							gridLines: {
								drawBorder: false,
								display: false
							}
						}],
						xAxes: [{
							gridLines: {
								drawBorder: false,
								display: false
							}
						}]
					},
				}
			});

			$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#ffa534',
				fillColor: 'rgba(255, 165, 52, .14)'
			});
		</script>

		<script>
			$('#basic').select2({
				theme: "bootstrap"
			});

			$('#basic2').select2({
				theme: "bootstrap"
			});

			$('#multiple').select2({
				theme: "bootstrap"
			});
		</script>
</body>

</html>