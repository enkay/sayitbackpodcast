{{-- $title --}}
{{-- $preview --}}

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>{{ $title ?? 'Say It Back' }}</title>
</head>

<body>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width">
		<!--[if gte mso 15]>
    <style type="text/css">
      table {
        font-size: 1px;
        line-height: 0;
        mso-margin-top-alt: 1px;
        mso-line-height-rule: exactly;
      }
      * {
        mso-line-height-rule: exactly;
      }
    </style>
  <![endif]-->
		<title dir="auto">{{ $title ?? 'Say It Back' }}</title>
	</head>

	<body
		style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; box-sizing: border-box; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important">
		<style type="text/css">
			@media only screen and (max-width: 572px) {
				.global-gutter {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				.small-float-center {
					margin: 0 auto !important;
					float: none !important;
					text-align: center !important;
				}

				.small-text-center {
					text-align: center !important;
				}

				.small-text-left {
					text-align: left !important;
				}

				.small-text-right {
					text-align: right !important;
				}

				.hide-for-large {
					display: block !important;
					width: auto !important;
					overflow: visible !important;
					max-height: none !important;
					font-size: inherit !important;
					line-height: inherit !important;
				}

				table.body table.container .hide-for-large {
					display: table !important;
					width: 100% !important;
				}

				table.body table.container .row.hide-for-large {
					display: table !important;
					width: 100% !important;
				}

				table.body table.container .callout-inner.hide-for-large {
					display: table-cell !important;
					width: 100% !important;
				}

				table.body table.container .show-for-large {
					display: none !important;
					width: 0;
					mso-hide: all;
					overflow: hidden;
				}

				table.body img {
					width: auto;
					height: auto;
				}

				table.body center {
					min-width: 0 !important;
				}

				table.body .container {
					width: 100% !important;
				}

				table.body .columns {
					height: auto !important;
					box-sizing: border-box;
					padding-left: 12px !important;
					padding-right: 12px !important;
				}

				table.body .column {
					height: auto !important;
					box-sizing: border-box;
					padding-left: 12px !important;
					padding-right: 12px !important;
				}

				table.body .columns .column {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.body .columns .columns {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.body .column .column {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.body .column .columns {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.body .collapse .columns {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.body .collapse .column {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				td.small-1 {
					display: inline-block !important;
					width: 8.33333% !important;
				}

				th.small-1 {
					display: inline-block !important;
					width: 8.33333% !important;
				}

				td.small-2 {
					display: inline-block !important;
					width: 16.66667% !important;
				}

				th.small-2 {
					display: inline-block !important;
					width: 16.66667% !important;
				}

				td.small-3 {
					display: inline-block !important;
					width: 25% !important;
				}

				th.small-3 {
					display: inline-block !important;
					width: 25% !important;
				}

				td.small-4 {
					display: inline-block !important;
					width: 33.33333% !important;
				}

				th.small-4 {
					display: inline-block !important;
					width: 33.33333% !important;
				}

				td.small-5 {
					display: inline-block !important;
					width: 41.66667% !important;
				}

				th.small-5 {
					display: inline-block !important;
					width: 41.66667% !important;
				}

				td.small-6 {
					display: inline-block !important;
					width: 50% !important;
				}

				th.small-6 {
					display: inline-block !important;
					width: 50% !important;
				}

				td.small-7 {
					display: inline-block !important;
					width: 58.33333% !important;
				}

				th.small-7 {
					display: inline-block !important;
					width: 58.33333% !important;
				}

				td.small-8 {
					display: inline-block !important;
					width: 66.66667% !important;
				}

				th.small-8 {
					display: inline-block !important;
					width: 66.66667% !important;
				}

				td.small-9 {
					display: inline-block !important;
					width: 75% !important;
				}

				th.small-9 {
					display: inline-block !important;
					width: 75% !important;
				}

				td.small-10 {
					display: inline-block !important;
					width: 83.33333% !important;
				}

				th.small-10 {
					display: inline-block !important;
					width: 83.33333% !important;
				}

				td.small-11 {
					display: inline-block !important;
					width: 91.66667% !important;
				}

				th.small-11 {
					display: inline-block !important;
					width: 91.66667% !important;
				}

				td.small-12 {
					display: inline-block !important;
					width: 100% !important;
				}

				th.small-12 {
					display: inline-block !important;
					width: 100% !important;
				}

				.columns td.small-12 {
					display: block !important;
					width: 100% !important;
				}

				.column td.small-12 {
					display: block !important;
					width: 100% !important;
				}

				.columns th.small-12 {
					display: block !important;
					width: 100% !important;
				}

				.column th.small-12 {
					display: block !important;
					width: 100% !important;
				}

				table.body td.small-offset-1 {
					margin-left: 8.33333% !important;
				}

				table.body th.small-offset-1 {
					margin-left: 8.33333% !important;
				}

				table.body td.small-offset-2 {
					margin-left: 16.66667% !important;
				}

				table.body th.small-offset-2 {
					margin-left: 16.66667% !important;
				}

				table.body td.small-offset-3 {
					margin-left: 25% !important;
				}

				table.body th.small-offset-3 {
					margin-left: 25% !important;
				}

				table.body td.small-offset-4 {
					margin-left: 33.33333% !important;
				}

				table.body th.small-offset-4 {
					margin-left: 33.33333% !important;
				}

				table.body td.small-offset-5 {
					margin-left: 41.66667% !important;
				}

				table.body th.small-offset-5 {
					margin-left: 41.66667% !important;
				}

				table.body td.small-offset-6 {
					margin-left: 50% !important;
				}

				table.body th.small-offset-6 {
					margin-left: 50% !important;
				}

				table.body td.small-offset-7 {
					margin-left: 58.33333% !important;
				}

				table.body th.small-offset-7 {
					margin-left: 58.33333% !important;
				}

				table.body td.small-offset-8 {
					margin-left: 66.66667% !important;
				}

				table.body th.small-offset-8 {
					margin-left: 66.66667% !important;
				}

				table.body td.small-offset-9 {
					margin-left: 75% !important;
				}

				table.body th.small-offset-9 {
					margin-left: 75% !important;
				}

				table.body td.small-offset-10 {
					margin-left: 83.33333% !important;
				}

				table.body th.small-offset-10 {
					margin-left: 83.33333% !important;
				}

				table.body td.small-offset-11 {
					margin-left: 91.66667% !important;
				}

				table.body th.small-offset-11 {
					margin-left: 91.66667% !important;
				}

				table.body table.columns td.expander {
					display: none !important;
				}

				table.body table.columns th.expander {
					display: none !important;
				}

				table.body .right-text-pad {
					padding-left: 10px !important;
				}

				table.body .text-pad-right {
					padding-left: 10px !important;
				}

				table.body .left-text-pad {
					padding-right: 10px !important;
				}

				table.body .text-pad-left {
					padding-right: 10px !important;
				}

				table.menu {
					width: 100% !important;
				}

				table.menu td {
					width: auto !important;
					display: inline-block !important;
				}

				table.menu th {
					width: auto !important;
					display: inline-block !important;
				}

				table.menu.vertical td {
					display: block !important;
				}

				table.menu.vertical th {
					display: block !important;
				}

				table.menu.small-vertical td {
					display: block !important;
				}

				table.menu.small-vertical th {
					display: block !important;
				}

				table.menu[align="center"] {
					width: auto !important;
				}

				table.button.small-expand {
					width: 100% !important;
				}

				table.button.small-expanded {
					width: 100% !important;
				}

				table.button.small-expand table {
					width: 100%;
				}

				table.button.small-expanded table {
					width: 100%;
				}

				table.button.small-expand table a {
					text-align: center !important;
					width: 100% !important;
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.button.small-expanded table a {
					text-align: center !important;
					width: 100% !important;
					padding-left: 0 !important;
					padding-right: 0 !important;
				}

				table.button.small-expand center {
					min-width: 0;
				}

				table.button.small-expanded center {
					min-width: 0;
				}

				.meta {
					display: none !important;
					padding: 14px 12px 6px !important;
				}

				.photo__photographer-name {
					font-size: 13px !important;
				}

				.social__icon {
					width: 30px !important;
					height: 30px !important;
				}

				.unsubscribe {
					padding: 30px 12px 18px !important;
				}
			}

			body {
				width: 100% !important;
				min-width: 100%;
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			.ExternalClass {
				width: 100%;
			}

			.ExternalClass {
				line-height: 100%;
			}

			#backgroundTable {
				margin: 0;
				padding: 0;
				width: 100% !important;
				line-height: 100% !important;
			}

			img {
				outline: none;
				text-decoration: none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
			}

			body {
				color: #111111;
				font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Helvetica Neue", Helvetica, Ubuntu, Roboto, Noto, "Segoe UI", Arial, sans-serif;
				font-weight: inherit;
				padding: 0;
				margin: 0;
				text-align: left;
				line-height: 1.6;
			}

			body {
				font-size: 15px;
				line-height: 1.6;
			}

			a:hover {
				color: #111111;
			}

			a:active {
				color: #111111;
			}

			a:visited {
				color: #999;
			}

			h1 a:visited {
				color: #999;
			}

			h2 a:visited {
				color: #999;
			}

			h3 a:visited {
				color: #999;
			}

			h4 a:visited {
				color: #999;
			}

			h5 a:visited {
				color: #999;
			}

			h6 a:visited {
				color: #999;
			}

			table.button:hover table tr td a {
				color: #111111;
				border: 0;
			}

			table.button:active table tr td a {
				color: #111111;
				border: 0;
			}

			table.button table tr td a:visited {
				color: #111111;
				border: 0;
			}

			table.button.large:hover table tr td a {
				color: #111111;
				border: 0;
			}

			table.button.large:active table tr td a {
				color: #111111;
				border: 0;
			}

			table.button.large table tr td a:visited {
				color: #111111;
				border: 0;
			}

			table.button.default table a:hover {
				color: #ffffff !important;
			}

			table.button:hover table td a {
				background: transparent;
				color: #111111;
				border: 1px solid #999;
			}

			table.button:visited table td a {
				background: transparent;
				color: #111111;
				border: 1px solid #999;
			}

			table.button:active table td a {
				background: transparent;
				color: #111111;
				border: 1px solid #999;
			}

			table.button.secondary:hover table td {
				background: #919191;
				color: #ffffff;
			}

			table.button.secondary:hover table a {
				border: 0 solid #919191;
			}

			table.button.secondary:hover table td a {
				color: #ffffff;
			}

			table.button.secondary:active table td a {
				color: #ffffff;
			}

			table.button.secondary table td a:visited {
				color: #ffffff;
			}

			table.button.success:hover table td {
				background: #5a9440;
			}

			table.button.success:hover table a {
				border: 0 solid #5a9440;
			}

			table.button.alert:hover table td {
				background: #cd3f1f;
			}

			table.button.alert:hover table a {
				border: 0 solid #cd3f1f;
			}

			table.button.warning:hover table td {
				background: #d89b28;
			}

			table.button.warning:hover table a {
				border: 0 solid #d89b28;
			}

			.thumbnail:hover {
				box-shadow: 0 0 6px 1px rgba(17, 17, 17, 0.5);
			}

			.thumbnail:focus {
				box-shadow: 0 0 6px 1px rgba(17, 17, 17, 0.5);
			}

			body.outlook p {
				display: inline !important;
			}

			.photo__photographer-link:hover {
				text-decoration: none;
			}

			.promo a:hover {
				color: inherit !important;
			}

			.promo a:focus {
				color: inherit !important;
			}
		</style>
		<table class="body"
			style="background: #f7f7f7; border-collapse: collapse; border-spacing: 0; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; height: 100%; line-height: 1.6; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%"
			bgcolor="#f7f7f7">
			<tbody>
				<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
					<td class="center" valign="top"
						style="border-collapse: collapse !important; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word"
						align="left">
						<center style="min-width: 560px; width: 100%">
							<table class="container"
								style="background: #ffffff; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 560px"
								bgcolor="#ffffff">
								<tbody>
									<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
										<td
											style="border-collapse: collapse !important; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word"
											align="left" valign="top">
											<div class="meta" style="background: #f7f7f7; display: block; padding: 14px 0 6px">
												<table class="row collapse"
													style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
													<tbody>
														<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
															<th class="small-7 large-7 columns first"
																style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0 auto; padding: 0 0 12px; text-align: left; width: 332.66667px"
																align="left">
																<table
																	style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
																	<tbody>
																		<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
																			<th
																				style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left"
																				align="left">
																				<p class="font-size-small "
																					style="color: #999; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 11px; font-weight: inherit; letter-spacing: 0.02em; line-height: 20px !important; margin: 0; padding: 0; text-align: left"
																					align="left">{{ $preview ?? '' }}</p>
																			</th>
																		</tr>
																	</tbody>
																</table>
															</th>
															<th class="small-5 large-5 columns last"
																style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0 auto; padding: 0 0 12px; text-align: left; width: 239.33333px"
																align="left">
																<table
																	style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
																	<tbody>
																		<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
																			<th
																				style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left"
																				align="left">
																				<p class="font-size-small text-right"
																					style="color: #999; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 11px; font-weight: inherit; letter-spacing: 0.02em; line-height: 20px !important; margin: 0; padding: 0; text-align: right"
																					align="right"> </p>
																			</th>
																		</tr>
																	</tbody>
																</table>
															</th>
														</tr>
													</tbody>
												</table>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="between"></div>
							<table class="container"
								style="background: #ffffff; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 560px"
								bgcolor="#ffffff">
								<tbody>
									<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
										<td
											style="border-collapse: collapse !important; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word"
											align="left" valign="top">
											<div class="global-gutter" style="padding-left: 48px; padding-right: 48px">
												<table class="row"
													style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
													<tbody>
														<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
															<th class="small-12 large-12 columns first last"
																style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0 auto; padding: 0 12px 12px; text-align: left; width: 548px"
																align="left">
																<table
																	style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
																	<tbody>
																		<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
																			<th
																				style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left"
																				align="left">
																				<div class="intro-header" style="padding-bottom: 24px; padding-top: 50px">
																					<a
																						class="intro-header__logo "
																						href="{{ config('app.url') }}"
																						target="_blank" title="Say It Back"
																						style="color: #999; display: block; font-weight:bold; line-height: inherit; max-width: 40px; text-decoration: underline">
																						SAY IT BACK
																					</a>
																					<div class="">
																						@yield('content')
																					</div>
																				</div>
																			</th>
																		</tr>
																	</tbody>
																</table>
															</th>
														</tr>
													</tbody>
												</table>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							@yield('button')
							<div class="between"></div>
							<table class="container"
								style="background: #ffffff; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 560px"
								bgcolor="#ffffff">
								<tbody>
									<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
										<td
											style="border-collapse: collapse !important; color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word"
											align="left" valign="top">
											<div class="unsubscribe" style="background: #f7f7f7; padding: 24px 0 32px">
												<table class="row collapse"
													style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
													<tbody>
														<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
															<th class="small-12 large-6 columns first"
																style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0 auto; padding: 0 0 12px; text-align: left; width: 286px"
																align="left">
																<table
																	style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
																	<tbody>
																		<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
																			<th
																				style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left"
																				align="left">
																				<p class="font-size-small small-text-center"
																					style="color: #999; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 11px; font-weight: inherit; letter-spacing: 0.02em; line-height: 20px !important; margin: 0; padding: 0; text-align: left"
																					align="left">Sent by <a
																						href="{{ config('app.url') }}"
																						target="_blank"
																						style="color: #999; line-height: inherit; text-decoration: underline">Say It Back</a><br>
																				</p>
																			</th>
																		</tr>
																	</tbody>
																</table>
															</th>
															<th class="small-12 large-6 columns last"
																style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0 auto; padding: 0 0 12px; text-align: left; width: 286px"
																align="left">
																<table
																	style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
																	<tbody>
																		<tr style="padding: 0; text-align: left; vertical-align: top" align="left">
																			<th
																				style="color: #111111; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 15px; font-weight: inherit; line-height: 1.6; margin: 0; padding: 0; text-align: left"
																				align="left">
																				{{-- <p class="font-size-small small-text-center text-right"
																					style="color: #999; font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial, sans-serif; font-size: 11px; font-weight: inherit; letter-spacing: 0.02em; line-height: 20px !important; margin: 0; padding: 0; text-align: right"
																					align="right"> Too many emails? <a class=""
																						href="{{ config('app.url') }}"
																						style="color: #999; line-height: inherit; text-decoration: underline"
																						target="_blank">Unsubscribe</a> </p> --}}
																			</th>
																		</tr>
																	</tbody>
																</table>
															</th>
														</tr>
													</tbody>
												</table>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</center>
					</td>
				</tr>
			</tbody>
		</table>

	</body>


</body>

</html>
