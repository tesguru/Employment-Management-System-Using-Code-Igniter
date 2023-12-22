
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
							<h4 class="mb-3 f-w-600">Create Account</h4>
						</div>
                        <?php echo form_open('auth/create_user_account', ['class'=>'mb-3', 'id'=>'formAuthentication', 'enctype' => 'multipart/form-data'])?>
						<div class="">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="mail"></i></span>
                                    <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'name'=>'email', 'placeholder'=>'Enter Your email', 'value'=>set_value('email')])?>
								</div>
	  
                  <?php echo form_error('email', ' <code>','</code>')?>
							</div>
                            
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="user"></i></span>
                                    <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'name'=>'first_name', 'placeholder'=>'Enter Your FirstName', 'value'=>set_value('first_name')])?>
								</div>
             
                  <?php echo form_error('first_name', '<code>','</code>')?>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="user"></i></span>
                                    <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'name'=>'last_name', 'placeholder'=>'Enter Your Last Name', 'value'=>set_value('last_name')])?>
								</div>

                  <?php echo form_error('last_name', '<code>','</code>')?>
							</div>
              <div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="user"></i></span>
                                    <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'name'=>'department', 'placeholder'=>'Enter Your Department', 'value'=>set_value('department')])?>
								</div>
          
                  <?php echo form_error('department', '<code>','</code>')?>
							</div>

                             <div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="user"></i></span>
                                    <?= form_input(['type' => 'file', 'class' => 'form-control', 'name' => 'employee_image', 'style' => 'width: 226px;']) ?>

								</div>
             
                  <?php echo form_error('image', '<code>','</code>')?>
							</div>
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i data-feather="lock"></i></span>
                                    <?php echo form_input(['type'=>'password', 'class'=>'form-control', 'name'=>'password', 'placeholder'=>'Enter your password', 'value'=>set_value('password')])?>
								</div>
                  <?php echo form_error('password', '<code>','</code>')?>
							</div>
							<div class="form-group text-left mb-4">
								
							</div>
							<div class="">
								<button class="btn btn-primary btn-block mt-2 ">Create Account</button>
							</div>
						</div>
						<p class="mb-2 text-left">Already have an account? <a href="<?php echo site_url('auth')?>" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?php echo base_url('assets/js/vendor-all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/feather.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/pcoded.min.js')?>"></script>
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




