<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<header>

		<h2>Blog MalasNgoding</h2>
		<nav>
			<a href="/blok/home">HOME</a>
			|
			<a href="/blok/tentang">TENTANG</a>
			|
			<a href="/blok/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
        @yield('footer')
	</footer>

</body>
</html>
