<div class="auth-wrapper auth-v3">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-stretch text-center">
				<div class="col-md-6 img-card-side">
				<img src="<?php echo base_url('assets/images/auth/auth-side1.jpg')?>" alt="" class="img-fluid">	
					<div class="img-card-side-content">
                    <img src="<?php echo base_url('assets/images/logo.png"')?>" alt="" class="img-fluid" height="40%" width="40%">	
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<div class="text-left">
							<h4 class="mb-3 f-w-600">Welcome to <span class="text-primary">PAYVANTAGE</span></h4>
							<p class="text-muted mb-4">Welcome back, Please login <br>into a account</p>
						</div>
                        
						<div class="">
                        <?php echo form_open('auth/login')?>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="mail"></i></span>
								</div>
                                <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'id'=>'email', 'name'=>'email', 'placeholder'=>'Enter Your email', 'value'=>set_value('email')])?>
                  <?php echo form_error('email', ' <code>','</code>')?>
							</div>
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="lock"></i></span>
								</div>
								<?php echo form_input(['type'=>'password', 'class'=>'form-control', 'id'=>'email', 'name'=>'password', 'placeholder'=>'*********************', 'value'=>set_value('password')])?>
							</div>
                            <div class="form-group text-left my-2">
							<button class="btn btn-primary btn-block mt-2" style="background-color{}">Sign in</button>
                           
							</div>
						</div>
							<div class="">
                            <p class="mb-2 text-left">Dont have an account? <a href="<?php echo site_url('auth/create_account')?>" class="f-w-400">Signup</a></p>	
							</div>
						</div>
						
					</div>
                            
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<div class="pct-customizer">
    <div href="#!" class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>
        <button class="btn btn-light-primary" data-toggle="tooltip" title="Document" data-placement="left">
            <i data-feather="book"></i>
        </button>
        <button class="btn btn-light-success" data-toggle="tooltip" title="Buy Now" data-placement="left">
            <i data-feather="shopping-bag"></i>
        </button>
        <button class="btn btn-light-info" data-toggle="tooltip" title="Support" data-placement="left">
            <i data-feather="headphones"></i>
        </button>
    </div>
    <div class="pct-c-content ">
        <div class="pct-header bg-primary">
            <h5 class="mb-0 text-white f-w-500">Nextro Customizer</h5>
        </div>
        <div class="pct-body">
            <h6 class="mt-2"><i data-feather="credit-card" class="mr-2"></i>Header settings</h6>
            <hr class="my-2">
            <div class="theme-color header-color">
                <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="layout" class="mr-2"></i>Sidebar settings</h6>
            <hr class="my-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="cust-sidebar">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
            </div>
            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="cust-sidebrand">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
            </div>
            <div class="theme-color brand-color d-none">
                <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('success')) { ?>
  <script>
    Swal.fire({
      title: 'SUCCESS !!!',
      text: '<?php echo $this->session->flashdata('success');?>',
      icon: 'success'
    })
  </script>
<?php } else if ($this->session->flashdata('error')) { ?>
  <script>
    Swal.fire({
      title: 'ERROR !!!',
      text: '<?php echo $this->session->flashdata('error');?>',
      icon: 'error',
    })
  </script>
<?php } ?>

