<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Report Bulanan </title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
									{{-- <img src="{{asset('images/logo.png')}}" style="width: 100%; max-width: 300px" /> --}}
                                    <p>Ve<span class="text-purple-600">Tours.</span></p>
								</td>

								<td>
									Report #: <br />
									Created: {{$date}}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
									Vetours.<br />
									Jl. Koramil<br />
									Cicurug, Sukabumi 43359.
								</td>
							</tr>
						</table>
					</td>
				</tr>


				<tr class="heading">
					<td>Nama</td>
					<td>Paket Wisata</td>
					<td>Tanggal</td>
					<td>status</td>
					<td>Harga</td>
				</tr>
				@foreach ($checkouts as $checkout)
				<tr class="item">
					<td>{{$checkout->User->name}}</td>
					<td>{{$checkout->Tour->title}}
					</td>
					<td>{{date('d-m-Y', strtotime($checkout->departured));}} 
					</td>
					<td>{{$checkout->payment_status}} 
					</td>
					<td>Rp. {{number_format($checkout->sub_total, 0, '', '.')}}</td>
				</tr>
				@endforeach
				<tr class="total">
					<td ></td>

					<td colspan="3">Total: Rp. {{number_format($total_all, 0, '', '.')}}</td>
				</tr>

			</table>
			
			
		</div>
	</body>
</html>