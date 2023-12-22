<div  class="row">
			<!-- [ basic-alert ] start -->
			<div class="col-md-12">
				<!-- [ Invoice ] start -->
				<div class="container"  id="printable-section">
					<div>
						<div class="card" >
							<div class="card-body">
								<div class="row ">
									<div class="col-md-8 invoice-contact">
										<div class="invoice-box row">
											<div class="col-sm-12">
												<table class="table table-responsive invoice-table table-borderless ">
													<tbody>
														<tr>
															<td><a href="index.html"><img class="img-fluid" src="<?php echo base_url('assets/images/logo.png') ?>" width="30%" alt="Nextro Logo"></a>
															</td>
														</tr>
													
														<tr>
															<td>Omole,Phase 1 MO,<br> Dele, Omoddara</td>
														</tr>
														<tr>
															<td><a class="text-secondary" href="mailto:demo@gmail.com" target="_top">demo@gmail.com</a></td>
														</tr>
														<tr>
															<td>+91 919-91-91-919</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>
                <?php foreach($allowance['result'] as $allowancee) { ?>
								<div class="row invoive-info d-print-inline-flex">
									<div class="col-sm-4 invoice-client-info">
                 
										<h6>Client Information :</h6>
										<h6 class="m-0"> Name:  <?php echo $personal_details['personal_record'][0]['firstname'] ?> </h6>
										<p class="m-0 m-t-10"> Staff ID:  <?php echo $personal_details['personal_record'][0]['staff_id'] ?></p>
										<p class="m-0"> Email:  <?php echo $personal_details['personal_record'][0]['email'] ?></p>
										
									</div>
                  <div
                       class="col-md-4">
											</tbody>
										</table>
									</div>
									<div
                       class="col-md-4">
                  
                      </style>
										<h6>Order Information :</h6>
										<table class="table table-responsive invoice-table invoice-order table-borderless">
											<tbody>
												<tr>
													<th>Date :</th>
													<td><?php echo date('F', strtotime($allowancee['inserted_dt'])); ?></td>
												</tr>
												<tr>
													<th>Status :</th>
													<td>
														<span class="label label-warning">Pending</span>
													</td>
												</tr>
												<tr>
													<th>Id :</th>
													<td>
														#146859
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="table-responsive">
                    <table class="table invoice-detail-table">
									 
            <thead>
            <tr>
              <th>#</th>
              <th>Description</th>
              <th>Amount</th>
              
            </tr>
            </thead>
            <tbody>
              <tr>
            <td>#</td>
            <td>Basic Allowance</td>
            <td>N<?php echo $allowancee['basic_salary']; ?></td>
              </tr>
              <tr>
            <td>#</td>
            <td>Data Allowance</td>
            <td>N<?php echo $allowancee['data_allowance']; ?></td>
            
              </tr>
              <tr>
            <td>#</td>
            <td>Leave Allowance</td>
            <td>N<?php echo $allowancee['leave_allowance']; ?></td>
            
              </tr>
            
              <tr>
            <td>#</td>
            <td>Other Allowance</td>
            <td>N<?php echo $allowancee['other_allowance']; ?></td>
            
              </tr>
             
            </tbody>
          </table>
          <?php } ?>           
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-responsive invoice-table invoice-total">
											<tbody>
												<tr>
													<th>Sub Total :</th>
													<td>N<?php echo $total = intval($allowancee['leave_allowance']) + intval($allowancee['data_allowance']) + intval($allowancee['basic_salary']) + intval($allowancee['other_allowance']); ?></td>
												</tr>
										
												<tr class="text-info">
													<td>
														<hr />
														<h5 class="text-primary m-r-10">Total :</h5>
													</td>
													<td>
														<hr />
														<h5 class="text-primary">N<?php echo $total = intval($allowancee['leave_allowance']) + intval($allowancee['data_allowance']) + intval($allowancee['basic_salary']) + intval($allowancee['other_allowance']); ?></h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<h6>Terms and Condition :</h6>
										<p>No double payment
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row text-center d-print-none">
							<div class="col-sm-12 invoice-btn-group text-center">
								<button id="cmd" type="button" class="btn btn-print-invoice waves-effect waves-light btn-primary m-b-10">Print</button>
								<button type="button" class="btn waves-effect waves-light btn-secondary m-b-10 ">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<!-- [ Invoice ] end -->
			</div>
			<!-- [ basic-alert ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>

<!-- HTML content here -->
<!-- HTML content here -->
<!-- HTML content here -->

<script>
  function printData() {
    var divToPrint = document.getElementById("printable-section");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
  }

  // Add click event listener to the "cmd" button
  document.getElementById("cmd").addEventListener("click", function() {
    printData();
  });

  // Add keydown event listener to the document to detect "Ctrl + P" key combination
  document.addEventListener("keydown", function(event) {
    if (event.ctrlKey && event.key === "p") { // Check if Ctrl key and "P" key are pressed
      event.preventDefault(); // Prevent default behavior of Ctrl + P
      printData(); // Call printData() function to print the content
    }
  });
</script>



<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <f]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

<script>
	$('.btn-print-invoice').on('click', function() {
		var link2 = document.createElement('link');
		link2.innerHTML =
			'<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}</style>';

		document.getElementById('printTable')[0].appendChild(link2);
		window.print();
	})
</script>