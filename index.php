<?php
function critical_css($path = '/assets/dist/critical.css') {
	$critical = __DIR__ . $path;

	if ( file_exists($critical) ) {
		$critical_css = file_get_contents($critical);

		echo '<style type="text/css" id="critical-css">' . $critical_css . '</style>';
	}
}

function autoversion($url) {
	echo $url . '?v=' . filemtime(__DIR__ . DIRECTORY_SEPARATOR . $url);
}
?>

<!DOCTYPE html>
<html lang="en" manifest="2048.appcache">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<title>2048 | Join the numbers and get to the 2048 tile!</title>

	<meta name="description" content="2048 - A TypeScript implementation of the popular tile game" />
	<meta name="keywords" content="2048, game, html5 game, TypeScript, JavaScript" />
	<meta name="copyright" content="Atanas Atanasov" />
	<meta name="language" content="EN" />
	<meta name="robots" content="index,follow" />
	<meta name="author" content="Atanas Atanasov, hi@atanas.info" />
	<meta name="designer" content="Atanas Atanasov" />
	<meta name="coverage" content="Worldwide" />
	<meta name="distribution" content="Worldwide" />
	<meta name="rating" content="General" />
	<meta name="revisit-after" content="7 days" />
	<meta http-equiv="Expires" content="0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache" />

	<!--
	For more info about the favicons and meta tags below see
	https://github.com/audreyr/favicon-cheat-sheet
	-->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="assets/images/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="assets/images/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="assets/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="assets/images/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="assets/images/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
	<meta name="application-name" content="2048"/>
	<meta name="msapplication-TileColor" content="#edc22e" />
	<meta name="msapplication-TileImage" content="assets/images/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="assets/images/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="assets/images/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="assets/images/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="assets/images/mstile-310x310.png" />
	<meta name="msapplication-config" content="config.xml" />
	<meta name="theme-color" content="#edc22e" />

	<link rel="manifest" href="/manifest.json" />

	<?php critical_css(); ?>

	<link rel="stylesheet" href="<?php autoversion('assets/dist/app.css'); ?>" />
</head>
<body>
	<div class="container">
		<header class="header">
			<div class="header__top">
				<h1>2048</h1>

				<div class="score">0</div>
			</div><!-- /.header__top -->

			<div class="header__bottom">
				<p>Join the numbers and get to the <strong>2048 tile</strong>!</p>

				<button type="button" class="retry">Try again</button>
			</div><!-- /.header__bottom -->
		</header>

		<div class="game">
			<div class="message">
				<p></p>

				<div class="message__actions">
					<button type="button" class="retry">Try again</button>
				</div>
			</div>

			<div class="grid">
				<div class="grid__row">
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
				</div>

				<div class="grid__row">
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
				</div>

				<div class="grid__row">
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
				</div>

				<div class="grid__row">
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
				</div>
			</div>

			<div class="tiles"></div>
		</div>

		<nav class="socials">
			<ul>
				<li>
					<a
						href="mailto:hi@atanas.info"
						title="Send me an email"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-email">
							<use xlink:href="#svg-email"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://www.linkedin.com/in/scriptex/"
						title="Find me on LinkedIn"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-linkedin">
							<use xlink:href="#svg-linkedin"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://github.com/scriptex"
						title="See my projects on Github"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-github">
							<use xlink:href="#svg-github"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://gitlab.com/scriptex"
						title="See my projects on Gitlab"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-gitlab">
							<use xlink:href="#svg-gitlab"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://twitter.com/scriptexbg"
						title="Follow me on Twitter"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-twitter">
							<use xlink:href="#svg-twitter"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://www.npmjs.com/~scriptex"
						title="See my packages on NPM"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-npm">
							<use xlink:href="#svg-npm"></use>
						</svg>
					</a>
				</li>
				<li>
					<a
						href="https://codepen.io/scriptex/"
						title="See my work on Codepen"
						target="_blank"
						rel="noopener noreferrer nofollow"
					>
						<svg class="svg-codepen">
							<use xlink:href="#svg-codepen"></use>
						</svg>
					</a>
				</li>
			</ul>
		</nav>
	</div>

	<svg
		xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink"
		style="width: 0; height: 0; visibility: hidden; position: absolute;"
		aria-hidden="true"
	>
		<symbol viewbox="0 0 470 470" id="svg-codepen">
			<g fill-rule="evenodd">
				<path
					d="M234.55 430.576c-108.092 0-196.028-87.939-196.028-196.027 0-108.087 87.936-196.027 196.027-196.027 108.087 0 196.023 87.94 196.023 196.027 0 108.088-87.936 196.027-196.023 196.027M234.55 0C105.01 0 0 105.01 0 234.55c0 129.54 105.008 234.545 234.55 234.545 129.536 0 234.544-105.005 234.544-234.546C469.094 105.01 364.086 0 234.55 0"
				></path>
				<path
					d="M354.644 255.407l-31.18-20.858 31.18-20.857v41.715zM247.012 343.82v-58.133l54.034-36.138 43.62 29.172-97.654 65.1zm-12.463-79.784l-44.084-29.486 44.084-29.486 44.08 29.486-44.08 29.486zm-12.466 79.784l-97.653-65.1 43.623-29.172 54.031 36.138v58.133zM114.451 213.692l31.183 20.857-31.183 20.858v-41.715zm107.632-88.413v58.133l-54.031 36.146-43.623-29.18 97.654-65.099zm24.929 0l97.654 65.098-43.62 29.181-54.034-36.146V125.28zm132.45 63.458c-.026-.183-.072-.358-.102-.54a12.2 12.2 0 0 0-.219-1.047c-.054-.206-.13-.404-.194-.602-.1-.306-.199-.61-.32-.908a12.066 12.066 0 0 0-.279-.61 9.27 9.27 0 0 0-.423-.824c-.115-.199-.237-.39-.355-.58a13.896 13.896 0 0 0-.954-1.298 12.287 12.287 0 0 0-.621-.67c-.163-.168-.325-.336-.497-.489a14.234 14.234 0 0 0-.705-.595c-.187-.145-.37-.29-.565-.427-.072-.046-.137-.107-.206-.153L241.461 91.62a12.46 12.46 0 0 0-13.828 0l-132.56 88.374c-.07.046-.134.107-.206.153-.196.137-.379.282-.562.427-.244.19-.48.39-.705.595-.175.153-.335.321-.5.488a10.812 10.812 0 0 0-1.048 1.213c-.184.244-.36.496-.524.756a10.369 10.369 0 0 0-.782 1.404c-.094.198-.194.404-.277.61-.122.297-.221.602-.322.908-.065.198-.137.396-.194.602-.091.343-.153.694-.218 1.046-.03.183-.076.358-.099.541a11.988 11.988 0 0 0-.114 1.625v88.374c0 .55.041 1.091.114 1.633.023.176.07.358.1.533.064.352.126.702.218 1.046.056.206.129.404.194.603.1.304.199.61.32.915.084.207.183.405.278.603.135.281.272.556.425.831.113.192.231.381.357.572.164.26.34.512.523.756.138.191.282.366.431.541.195.23.401.458.618.672.165.167.325.335.5.487.225.208.462.406.706.596.183.146.365.29.56.427.073.046.138.107.207.152l132.56 88.375a12.46 12.46 0 0 0 6.916 2.098c2.407 0 4.817-.702 6.911-2.098l132.562-88.375c.07-.045.134-.106.207-.152.194-.137.377-.28.564-.427.24-.19.476-.388.705-.596.172-.152.334-.32.497-.487.216-.214.423-.443.621-.672.146-.175.29-.35.427-.54.188-.245.36-.497.527-.757.118-.19.24-.38.355-.572.156-.275.292-.55.423-.83.095-.199.193-.397.279-.604.121-.305.22-.61.32-.915.065-.199.14-.397.195-.603.091-.344.156-.694.218-1.046.03-.175.075-.357.101-.533.07-.542.113-1.084.113-1.633v-88.374c0-.549-.043-1.09-.113-1.625z"
				></path>
			</g>
		</symbol>
		<symbol viewbox="0 0 15 17" id="svg-email">
			<path
				fill-rule="evenodd"
				d="M10.38 14.774v1.556c-.984.246-1.881.37-2.69.37-2.32 0-4.182-.736-5.585-2.207C.702 13.023 0 11.074 0 8.648 0 6.2.759 4.146 2.276 2.488 3.794.828 5.675 0 7.92 0c1.969 0 3.554.672 4.755 2.017 1.201 1.345 1.802 3.119 1.802 5.322 0 1.629-.302 2.91-.906 3.845-.603.935-1.432 1.402-2.487 1.402-.557 0-.996-.132-1.318-.396-.323-.263-.604-.726-.844-1.388-.914 1.19-1.849 1.784-2.804 1.784-.85 0-1.517-.3-2.004-.9-.486-.602-.73-1.43-.73-2.484 0-1.57.42-2.845 1.258-3.823C5.479 4.4 6.568 3.91 7.91 3.91c.433 0 1.274.053 2.522.158v4.527l.017.817c0 1.137.322 1.705.967 1.705 1.008 0 1.512-1.198 1.512-3.595 0-1.775-.463-3.215-1.389-4.32-.926-1.104-2.136-1.656-3.63-1.656-1.752 0-3.25.685-4.495 2.057-1.246 1.37-1.868 3.02-1.868 4.948 0 1.957.577 3.548 1.731 4.772 1.155 1.225 2.652 1.837 4.492 1.837.767 0 1.637-.129 2.61-.387zm-1.9-9.237a2.195 2.195 0 0 0-.808-.167c-1.524 0-2.285 1.18-2.285 3.542 0 1.383.413 2.074 1.239 2.074.557 0 1.175-.56 1.854-1.678v-3.77z"
			></path>
		</symbol>
		<symbol viewbox="0 0 137 131" id="svg-github">
			<path
				fill-rule="evenodd"
				d="M9.164 33.44c6.11-10.288 14.399-18.432 24.868-24.435C44.5 3 55.933 0 68.33 0c12.397 0 23.83 3.001 34.298 9.005 10.47 6.003 18.759 14.147 24.868 24.434 6.11 10.287 9.164 21.52 9.164 33.701 0 14.63-4.345 27.786-13.034 39.472-8.69 11.685-19.915 19.772-33.676 24.26-1.601.29-2.773.087-3.514-.613-.742-.699-1.496-1.874-1.496-2.923v-18.322c0-5.653-1.159-9.615-4.243-12.237 3.381-.35 6.42-.875 9.12-1.574 2.698-.7 5.486-1.836 8.363-3.41 2.877-1.573 5.279-3.51 7.207-5.813 1.927-2.302 3.5-5.362 4.715-9.18 1.216-3.817 1.824-8.202 1.824-13.156 0-7.053-2.343-13.056-7.029-18.01 2.195-5.303 1.958-11.248-.712-17.834-1.66-.524-4.063-.204-7.206.962-3.144 1.166-5.872 2.448-8.186 3.847l-3.38 2.098c-5.517-1.516-11.21-2.273-17.083-2.273-5.872 0-11.566.757-17.082 2.273-.95-.641-2.21-1.428-3.782-2.36-1.572-.933-4.048-2.055-7.429-3.366-3.38-1.312-5.931-1.705-7.651-1.18-2.61 6.585-2.818 12.53-.623 17.834-4.686 4.953-7.029 10.956-7.029 18.009 0 4.954.608 9.325 1.824 13.113 1.216 3.788 2.773 6.848 4.671 9.18 1.898 2.33 4.285 4.283 7.162 5.857 2.877 1.573 5.665 2.71 8.363 3.41 2.7.698 5.74 1.223 9.12 1.573-2.373 2.098-3.826 5.1-4.36 9.004a17.862 17.862 0 0 1-4.003 1.312c-1.424.29-3.114.437-5.072.437-1.957 0-3.9-.627-5.827-1.88-1.928-1.253-3.574-3.074-4.938-5.464-1.127-1.865-2.566-3.38-4.315-4.546-1.75-1.165-3.218-1.865-4.404-2.098l-1.78-.262c-1.245 0-2.105.13-2.58.393-.474.262-.623.598-.445 1.006.178.408.445.815.8 1.223.357.408.742.758 1.158 1.05l.622.437c1.305.582 2.595 1.69 3.87 3.322 1.276 1.632 2.21 3.118 2.803 4.458l.89 2.01c.771 2.216 2.076 4.008 3.915 5.377 1.838 1.37 3.825 2.244 5.96 2.623 2.136.379 4.197.583 6.184.612 1.987.03 3.633-.073 4.938-.306l2.77-.975c0 2.215-.03 5.273 0 8.245.03 2.973 0 4.406 0 4.58 0 1.05-1.02 2.225-1.791 2.924-.771.7-1.958.904-3.559.612-13.761-4.487-24.986-12.574-33.676-24.26C4.344 94.927 0 81.77 0 67.142 0 54.96 3.055 43.725 9.164 33.438z"
			></path>
		</symbol>
		<symbol viewbox="0 0 430 397" id="svg-gitlab">
			<path
				d="M429.05 226.61l-24-74L357.36 6a8.19 8.19 0 0 0-15.58 0l-47.66 146.62H135.88L88.22 6a8.19 8.19 0 0 0-15.58 0L25 152.62l-24 74a16.38 16.38 0 0 0 6 18.31l208 151.16 208.1-151.17a16.38 16.38 0 0 0 6-18.31"
			></path>
			<path d="M215 396.09l79.12-243.47H135.88z"></path>
			<path
				fill-opacity=".5"
				d="M215 396.09l-79.12-243.47H25z"
			></path>
			<path
				d="M25 152.62l-24 74a16.37 16.37 0 0 0 6 18.31l208 151.16L25 152.62zm0 0h110.88L88.22 6a8.19 8.19 0 0 0-15.58 0L25 152.62z"
			></path>
			<path
				fill-opacity=".5"
				d="M215 396.09l79.12-243.47H405z"
			></path>
			<path
				d="M405 152.62l24 74a16.37 16.37 0 0 1-6 18.31L215 396.09l190-243.47z"
			></path>
			<path
				d="M405 152.62H294.12L341.78 6a8.19 8.19 0 0 1 15.58 0L405 152.62z"
			></path>
		</symbol>
		<symbol viewbox="0 0 125 118" id="svg-linkedin">
			<path
				fill-rule="evenodd"
				d="M0 13.745C0 9.78 1.397 6.498 4.191 3.9 6.985 1.299 10.634 0 15.137 0s8.11 1.3 10.823 3.899c2.713 2.599 4.096 5.88 4.15 9.846.055 3.912-1.315 7.181-4.109 9.807-2.794 2.626-6.47 3.938-11.027 3.938h-.163c-4.449 0-8.03-1.312-10.742-3.938C1.356 20.926 0 17.657 0 13.745zM1.546 118V38.342h26.856V118H1.546zm41.667 0c.108-21.382.163-38.717.163-52.007s-.027-21.22-.082-23.793l-.081-3.858h26.774v11.575h-.163c1.085-1.715 2.197-3.215 3.337-4.501 1.14-1.287 2.672-2.68 4.598-4.18 1.926-1.5 4.286-2.666 7.08-3.497 2.794-.83 5.9-1.246 9.318-1.246 9.277 0 16.737 3.041 22.38 9.123C122.178 51.7 125 60.608 125 72.343V118H98.226V75.398c0-5.627-1.099-10.034-3.296-13.223-2.197-3.188-5.629-4.783-10.295-4.783-3.418 0-6.28.925-8.585 2.774a17.113 17.113 0 0 0-5.168 6.872c-.597 1.608-.895 3.778-.895 6.511V118H43.213z"
			></path>
		</symbol>
		<symbol viewbox="0 0 18 7" id="svg-npm">
			<path
				d="M0 0h18v6H9v1H5V6H0V0zm1 5h2V2h1v3h1V1H1v4zm5-4v5h2V5h2V1H6zm2 1h1v2H8V2zm3-1v4h2V2h1v3h1V2h1v3h1V1h-6z"
			></path>
			<path
				fill="rgba(255,255,255,0.1)"
				d="M1 5h2V2h1v3h1V1H1zm5-4v5h2V5h2V1H6zm3 3H8V2h1v2zm2-3v4h2V2h1v3h1V2h1v3h1V1z"
			></path>
		</symbol>
		<symbol viewbox="0 0 134 106" id="svg-twitter">
			<path
				fill-rule="evenodd"
				d="M0 93.992c1.973.221 4.172.331 6.596.331 12.686 0 23.99-3.809 33.912-11.428-5.92-.11-11.22-1.89-15.899-5.341-4.68-3.45-7.893-7.853-9.64-13.209 1.86.276 3.58.414 5.158.414 2.424 0 4.82-.303 7.188-.91-6.314-1.27-11.543-4.348-15.687-9.234S5.412 44.056 5.412 37.597v-.331c3.834 2.098 7.95 3.23 12.347 3.395-3.72-2.43-6.68-5.604-8.88-9.523-2.198-3.92-3.298-8.171-3.298-12.754 0-4.858 1.24-9.357 3.721-13.498 6.822 8.226 15.124 14.81 24.906 19.75 9.781 4.942 20.254 7.688 31.417 8.24a29.12 29.12 0 0 1-.677-6.128c0-7.398 2.664-13.705 7.992-18.922C78.268 2.609 84.709 0 92.264 0c7.893 0 14.545 2.816 19.958 8.447a54.256 54.256 0 0 0 17.336-6.46c-2.086 6.35-6.089 11.263-12.009 14.741 5.244-.552 10.487-1.932 15.73-4.14a56.606 56.606 0 0 1-13.7 13.83c.056.772.085 1.931.085 3.477 0 7.177-1.072 14.34-3.214 21.49-2.142 7.15-5.398 14.01-9.768 20.58a81.441 81.441 0 0 1-15.602 17.43c-6.033 5.052-13.306 9.082-21.819 12.09-8.513 3.01-17.618 4.514-27.315 4.514-15.279 0-29.26-4.003-41.946-12.008z"
			></path>
		</symbol>
	</svg>

	<script src="<?php autoversion('assets/dist/app.js'); ?>" async defer></script>
</body>
</html>
