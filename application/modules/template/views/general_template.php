


<?php $this->load->view('header')?>

	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
		<a href="">
			<img src="<?php echo base_url("/assets/images/PVLogo.svg") ?>" alt="" class="logo logo-lg">
		</a>
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="<?php echo base_url("/assets/images/PVLogo.svg") ?>" alt="" width="80%"  class="logo logo-lg">
					<img src="<?php echo base_url("/assets/images/PVLogo.svg") ?>" alt="" class="logo logo-sm">

				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">

          <li class="pc-item">
            <a href="<?php echo site_url('employee/index') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Dashboard
              </span>
            </a>
					</li>


          <li class="pc-item">
            <a href="<?php echo site_url('employee/allowance') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Allowance
              </span>
            </a>
					</li>

          <li class="pc-item">
            <a href="<?php echo site_url('employee/updates') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Company news
              </span>
            </a>
					</li>

          <li class="pc-item">
            <a href="<?php echo site_url('employee/profile') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Profile
              </span>
            </a>
					</li>

					<li class="pc-item">
            <a href="<?php echo site_url('employee/messages') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Messages
              </span>
            </a>
					</li>


					<li class="pc-item">
    <a href="#" class="pc-link ">
        <span class="pc-micon"><i data-feather="check-circle"></i></span>
        <span class="pc-mtext">Leave</span>
        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
    </a>
    <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link" href="<?php echo site_url('employee/apply_for_leave') ?>">Apply for leave</a></li>
        <li class="pc-item"><a class="pc-link" href="<?php echo site_url('employee/leave_history') ?>">Leave history</a></li>
    </ul>
</li>
<li class="pc-item">
            <a href="<?php echo site_url('employee/forget_password') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="check-circle"></i>
              </span>
              <span class="pc-mtext">
                Change password
              </span>
            </a>
					</li>




          <li class="pc-item">
            <a href="<?php echo site_url('auth/sign_out') ?>" class="pc-link">
              <span class="pc-micon">
                <i data-feather="log-out"></i>
              </span>
              <span class="pc-mtext">
                Log Out
              </span>
            </a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="mr-auto pc-mob-drp">

			</div>

				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i data-feather="search"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
							<form class="px-3">
								<div class="form-group mb-0 d-flex align-items-center">
									<i data-feather="search"></i>
									<input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
								</div>
							</form>
						</div>
					</li>
					<li class="dropdown pc-h-item pc-cart-menu">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-cart">
							<div class="cart-head">
								<h4 class="mb-0">3 Items</h4>
								<a href="#!" class="text-danger float-right"><u>Remove All</u></a>
								<p class="mb-0">in your cart</p>
							</div>
							<div class="cart-item">
								<img src="assets/images/product/prod-1.jpg" alt="Product-img" title="Product-img" class="rounded mr-3 border">
								<div class="cart-desc">
									<a href="#!" class="text-body">
										<h6 class="d-inline-block mb-0">Villus Snow Ankle b...</h6>
									</a>
									<p class="mb-0">Army green,7</p>
									<span><span class="text-primary">$ 148.66</span> for <span class="text-primary">9</span> </span>
									<a href="#!" class="text-danger float-right"><i data-feather="trash-2"></i></a>
								</div>
							</div>
							<div class="cart-item">
								<img src="assets/images/product/prod-2.jpg" alt="Product-img" title="Product-img" class="rounded mr-3 border">
								<div class="cart-desc">
									<a href="#!" class="text-body">
										<h6 class="d-inline-block mb-0">Bullets Wireless Black</h6>
									</a>
									<p class="mb-0">Dark Black</p>
									<span><span class="text-primary">$ 299</span> for <span class="text-primary">5</span> </span>
									<a href="#!" class="text-danger float-right"><i data-feather="trash-2"></i></a>
								</div>
							</div>
							<div class="cart-item">
								<img src="assets/images/product/prod-3.jpg" alt="Product-img" title="Product-img" class="rounded mr-3 border">
								<div class="cart-desc">
									<a href="#!" class="text-body">
										<h6 class="d-inline-block mb-0">Parkas Thick Jackets</h6>
									</a>
									<p class="mb-0">Am Wine Red</p>
									<span><span class="text-primary">$ 599</span> for <span class="text-primary">3</span> </span>
									<a href="#!" class="text-danger float-right"><i data-feather="trash-2"></i></a>
								</div>
							</div>
							<div class="table-responsive cart-item">
								<table class="table table-borderless mb-0 table-sm">
									<tbody>
										<tr>
											<td>
												<h6 class="m-0">Sub Total:</h6>
											</td>
											<td class="text-right">
												$1070
											</td>
										</tr>
										<tr>
											<td>
												<h6 class="m-0">Shipping:</h6>
											</td>
											<td class="text-right">
												FREE
											</td>
										</tr>
										<tr>
											<td>
												<h5 class="m-0">Total:</h5>
											</td>
											<td class="text-right">
												<h5 class="m-0 text-primary font-weight-bold">$1070</h5>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<button class="btn btn-primary btn-sm btn-block mt-3">Check out</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</li>
					<li class="pc-h-item">
						<a class="pc-head-link mr-0" href="#" data-toggle="modal" data-target="#notification-modal">
							<i data-feather="bell"></i>
							<span class="badge badge-danger pc-h-badge dots"><span class="sr-only"></span></span>
						</a>
					</li>
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<?php
$img_src = 'uploads/' . $this->session->userdata['passport'];
$alt_text = 'user-image';
$class_name = 'user-avtar';
$img_y = $this->session->userdata['passport'];

if (file_exists($img_src)) {
    ?>
    <img src="<?php echo base_url($img_src); ?>" alt="<?php echo $alt_text; ?>" class="<?php echo $class_name; ?>">
<?php
} else {
    ?>
    <img src="<?php echo ($img_y); ?>" alt="<?php echo $alt_text; ?>" class="<?php echo $class_name; ?>">
<?php
}

?>


							<span>
<h5><?php echo $personal_details['personal_record'][0]['firstname'] ?></h5>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">

							<a href="<?php echo site_url('employee/profile') ?>" class="dropdown-item">
								<i data-feather="user"></i>
								<span>Profile</span>
							</a>
							<a href="<?php echo site_url('auth/sign_out') ?>" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>

	<!-- Modal -->
	<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<ul class="nav nav-pill tabs-light mb-3" id="pc-noti-tab" role="tablist">

						<li class="nav-item">
							<a class="nav-link" id="pc-noti-news-tab" data-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span class="badge badge-danger ml-2 d-none d-sm-inline-block"></span></a>
						</li>

					</ul>

					<div class="tab-content pt-4" id="pc-noti-tabContent">
						<div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
						<?php foreach ($news['result'] as $newss) {?>
							<a href="<?php echo site_url('employee/read_news/' . base64_encode($newss['id'])); ?>" class="email-name waves-effect text-success">
						<div class="pb-3 border-bottom mb-3 media">
								<a href="<?php echo site_url('employee/read_news/' . base64_encode($newss['id'])); ?>"><img src="<?php echo $newss['image'] ?>" class="wid-90 rounded" alt="..."></a>

								<div class="media-body ml-3">
									<p class="float-right mb-0 text-success"><small><?php echo $newss['inserted_dt'] ?></small></p>

									<a href="<?php echo site_url('employee/read_news/' . base64_encode($newss['id'])); ?>"><h6><?php echo $newss['title'] ?></h6></a>

									<?php

    $news_content = $newss['news_content'];
    $max_length = 100;
    if (strlen($news_content) > $max_length) {

        $short_content = substr($news_content, 0, $max_length) . '...';
        $view_more_link = '<a href="' . site_url('employee/read_news/' . base64_encode($newss['id'])) . '" class="email-name waves-effect">View More</a>'; // Update the URL with the desired page and URL parameters
    } else {

        $short_content = $news_content;
        $view_more_link = '';
    }
    ?>

<a href="<?php echo site_url('employee/read_news/' . base64_encode($newss['id'])); ?>"><p class="mb-2"><?php echo $short_content ?></p></a>



								</div>
							</div></a>

							<?php }?>
						</div>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>

				</div>
			</div>
		</div>
	</div>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">

<div class="pcoded-content">
  


		<?php $this->load->view($content_view)?>





<div class="pct-customizer">
    <div href="#!" class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>

    </div>

<?php $this->load->view('footer')?>