<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>MyPortofolio</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>

	<body class="login-layout">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My Portofolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div class="card" style="width: 30rem;float:left">
  <div class="card-body">
    <h5 class="card-title">Tentang Saya</h5>
    <h3 class="card-subtitle mb-2 text-muted">Nama : Arif Yulianto</h6>
	<h3 class="card-subtitle mb-2 text-muted">TTL  : 11 Juli 1995</h6>
	<h3 class="card-subtitle mb-2 text-muted">Alamat : Pandansari RT 03 RW 01 Kec. Ajibarang Kab. Banyumas</h6>
	<h3 class="card-subtitle mb-2 text-muted">NO Tlp : 082136810210</h6>
	<h3 class="card-subtitle mb-2 text-muted">Email : Arifyulianto007@gmail.com </h6>
	<h3 class="card-subtitle mb-2 text-muted">GitHub : https://github.com/arifyulianto007</h6>
    <p class="card-text">Hobi saya memancing, saya anak kembar dari 3 bersaudara.</p>
    <a href="#" class="card-link">Pendidikan</a>
	<h4 class="card-subtitle mb-2 text-muted">Lulusan S1 STMIK AMIKOM PURWOKERTO 2019</h6>
    <a href="#" class="card-link">SKILL</a>
	<h4 class="card-subtitle mb-2 text-muted">1.Microsoft</h6>
	<h4 class="card-subtitle mb-2 text-muted">2.Programmer (PHP, HTML, MySQL, CSS)</h6>
	
	<h4 class="card-subtitle mb-2 text-muted">Mohon maaf, untuk kesempatan tes praktek kali ini saya banyak kendala, jadi hasil apa adanya.</h6>
	
	
  </div>
</div>
<center><img src="images/foto.jpeg" width="20%"></center>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="hallo-container">
						
							<div class="center">
								
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="hallo-box" class="hallo-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
										
											<center></center>
											<h3><center><p></p><p></p></center></h3>
											
											<div class="space-6"></div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										
										</div>

									</div>
								</div>

							</div>

						</div>
						<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">:: Arif Yulianto &copy; 2019 ::</span>
					</div>
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>

		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
