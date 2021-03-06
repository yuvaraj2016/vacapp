<?php
include('includes/header.php');
include('includes/config.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


if (isset($_POST['submit'])) {
	try {

		require './vendor/autoload.php';
		$appointment = $_FILES["excel"]["name"];


		move_uploaded_file($_FILES["excel"]["tmp_name"], "files/" . $_FILES["excel"]["name"]);

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load('files/' . $_FILES["excel"]["name"]);

		$lastrow = $spreadsheet->setActiveSheetIndex(0)->getHighestRow();
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
            //    var_dump($sheetData);
		//   $highestRow = this->spreadsheet->getActiveSheet()->getHighestRow();
		$i = 0;
		$a = count($sheetData);
		foreach ($sheetData as $row) {

			// get columns
		   if ($i != 0 && $row[0] !='') {

				$name = isset($row[0]) ? $row[0] : "";

				$age = isset($row[1]) ? $row[1] : "";
				$phone_no = isset($row[2]) ? $row[2] : "";
				$email_id =isset($row[3]) ? $row[3] : "";
				$address =isset($row[4]) ? $row[4] : "";
				// $date =isset($row[5]) ? $row[5] : "";

				// $appdate = date("Y-m-d", strtotime($date));

				$doctor_name =isset($row[5]) ? $row[5] : "";

				$status =isset($row[6]) ? $row[6] : "";

				// insert item
			



					$sql = "insert into  va_users(name,age,phone_no,email_id,"
                        . "address,doctor_name,status)"
                        . "values(:name,:age,:phone,:email,:addr,:doctor,:status)";
                $query7 = $dbh->prepare($sql);
                $query7->bindValue(':name', $name, PDO::PARAM_STR);
                $query7->bindValue(':age', $age, PDO::PARAM_INT);
                $query7->bindValue(':phone', $phone_no, PDO::PARAM_INT);
                $query7->bindParam(':email', $email_id, PDO::PARAM_STR);
                $query7->bindParam(':addr', $address, PDO::PARAM_STR);
                // $query7->bindParam(':appdate', $appdate, PDO::PARAM_STR);
				$query7->bindParam(':doctor', $doctor_name, PDO::PARAM_STR);
				$query7->bindParam(':status', $status, PDO::PARAM_STR);
                $query7->execute();
                $id = $dbh->lastInsertId();

				if (filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
						
				$to = $email_id;
				$subject = 'New Appointment Confirmation';
				$from = 'vacappointment@gmail.com';
				
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				
				// Create email headers
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				
				// Compose a simple HTML email message
				$message = '<html><body>';
				$message .= '<h1 style="color:#000;">Hi '. $name.'</h1>';
				$message .= '<p style="color:#000;font-size:18px;">Thank you for choosing us. We are proud to be part of your healthcare team.
				Once VACCINE APPOINTMENT accepts the appointment you will get an email notification.
				</p>';

				$message .= '<a style="color:#fff;height:30px!important;margin-left:200px;margin-top:54px;font-size:15px;vertical-align:middle!important;font-weight:bold;background-color:#17D4FC;padding-top:10px;text-align:center;text-decoration:none!important;  display:block;
				width:250px;" href="http://vacapp.hridhamtech.com/calendar.html">
				Click here to book your app</a>';
				$message .= '</body></html>';
				
				// Sending email
				if(mail($to, $subject, $message, $headers)){
					echo 'Your mail has been sent successfully.';
				} else{
					echo 'Unable to send email. Please try again.';
				}

				   
		
					$msg = "Appointments Successfully Added";
					
				  } else {
					$error = "Row number $i"." has $email_id is a invalid email address";

					// return $error;
				  }
					
				  
	
			}
			$i++;
			$rowd = $i;
				}
		
	} catch (Exception $ex) {
		$error = $ex->getMessage()."<br><h3 style='color:red;'>*Row number ".($rowd+1)." has duplicate records</h3>";;
	}
}

?>			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
					<div class="card">		
					
						<div class="card-body">

						<?php if (isset($error)) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
						<?php } else if (isset($msg)) {
						?>
						<div class="succWrap"><?php echo htmlentities($msg); ?> </div>
						<?php } ?>
							<form method="post" id="appointment" enctype="multipart/form-data" action="#" onSubmit="return valid();" enctype="multipart/form-data"> 
								<div class="form-group">
									<label for="exampleInputFile">File Upload</label>
									<input type="file" name="excel" class="form-control" id="exampleInputFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" 	required="required">
								</div>
								<button type="submit" name="submit" class="btn btn-primary" önsubmit="checkfile(this);">Submit</button>
							</form>
						</div>
					</div>

					<?php

						$sql = " SELECT * from  va_users";
						$query = $dbh->prepare($sql);

					    $query->execute();
						$results = $query->fetchAll(PDO::FETCH_OBJ);
						$cnt = 1;
					
					?>	
                                                               
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>S.No</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                                    
													<th>User Name</th>
													<th>Age</th>
													<th>Phone No</th>
													<th>Email Id</th>
													<th>Address</th>
													<th>Doctor Name</th>
													<th>Status</th>
													<th>Created At</th>
													<th>Updated At</th>
												</tr>
											</thead>
											<tbody>
											<?php
													if ($query->rowCount() > 0) {
														foreach ($results as $result) {

											?>
												<tr>
														<td><?php echo htmlentities($cnt); ?></td>
														<td> <?php $editurl = "appointment-list-edit.php?id=" . $result->id; ?>  <a href="#"  onclick="icon1('<?php echo $editurl; ?>')"> <i class="fa fa-edit"></i></a> </td>
                                                        <td> <?php $deleteurl = "appointment-list.php?del=" . $result->id; ?>  <a href="#"  onclick="icon('<?php echo $deleteurl; ?>')"> <i class="fa fa-close"></i></a> </td>

														<td><?php echo htmlentities($result->name); ?></td>
														<td><?php echo htmlentities($result->age); ?></td>
														<td><?php echo htmlentities($result->phone_no); ?></td>
														<td><?php echo htmlentities($result->email_id); ?></td>
														<td><?php echo htmlentities($result->address); ?></td>
														<td><?php echo htmlentities($result->doctor_name); ?></td>
														<td><?php echo htmlentities($result->status); ?></td>
														<td><?php echo $result->created_at; ?></td>
														<td><?php echo $result->updated_at; ?></td>
												</tr>

												<?php
                                                        $cnt = $cnt + 1;
                                                        }
                                                    }
                                                ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>
<!-- <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script> -->

<script>
function checkfile(sender) {

	alert("asadf");
    var validExts = new Array(".xlsx", ".xls",".csv");
    var fileExt = sender.value;
    fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
    if (validExts.indexOf(fileExt) < 0) {
      alert("Invalid file selected, valid files are of " +
               validExts.toString() + " types.");
      return false;
    }
    else return true;
}



	
</script>