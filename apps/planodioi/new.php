<div class="row">
	<div class="col-lg-12">
		<h3 class="page-title">Αίτησης Ανανέωσης</h3>
	</div>
</div>
 <?php
	// For Debug..
	// print_r($_SESSION['gsis_user']);
	// print_r($_SESSION['gsis_user_id']);
	if(isset($_POST['num_leaves'])){ ?>
		<div  class="alert alert-success">
			<p>Η αίτησή σας έχει υποβληθεί επιτυχώς. Λάβατε αριθμό πρωτοκόλλου 1283209232-12121.</p>
			<p>Θα ενημερωθείτε με ηλεκτρονικό μήνυμα για την πορεία της αίτησής σας.</p>
		</div>
<?php
	} else {
	print_messages(); 
?>
<div class="row"><div class="col-sm-12"><div id="errorer" class="alert alert-danger" style="display:none;">Επιβεβαιώστε την ορθότητα των πεδίων</div></div></div>
<div class="row">
	<div class="col-lg-12">
		<div class="">
		<form name="leaveform" id="leaveform" method="post" action="<?php echo URL; ?>/?p=planodioi|new">
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							Προσωπικά Στοιχεία
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Όνομα</label> 
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="<?php echo $_SESSION['gsis_user_id']['firstName']; ?>">
							</div>
							<div class="form-group">
								<label>Επίθετο</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="<?php echo $_SESSION['gsis_user_id']['surname']; ?>">
							</div>
							<div class="form-group">
								<label>ΑΦΜ</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="<?php echo $_SESSION['gsis_user']['afm']; ?>">
							</div>
							<div class="form-group">
								<label>Διεύθυνση</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="<?php echo $_SESSION['gsis_user_id']['postalAddress'].' '.$_SESSION['gsis_user_id']['postalNo']; ?>">
							</div> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Στοιχεία Επικοινωνίας
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Τηλέφωνο</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="">
							</div>
							<div class="form-group">
								<label>Κινητό</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="">
							</div>
							<div class="form-group">
								<label>eMail</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="">
							</div>
							<div class="form-group">
								<label>Fax</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="">
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Στοιχεία Αίτησης
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Αριθμός Μητρώου Παραγωγού</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="">
							</div>
							<div class="form-group">
								<label>Δήμος Υπαγωγής</label>
								<select name="user_tel" class="form-control" id="user_tel">
									<option>Κοζάνης</option>
									<option>Καστοριάς</option>
									<option>Γρεβενών</option>
									<option>Φλώρινας</option>
								</select>
							</div>
							<div  class="alert alert-success">Είστε Φορολογικά Ενήμερος (<?php echo $_SESSION['gsis_user']['afm']; ?>)</div>
							<div  class="alert alert-success">Είστε Ασφαλιστικά Ενήμερος (<?php echo $_SESSION['gsis_user']['afm']; ?>)</div>
						</div>
					</div>
				</div>
				
			</div> 
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-default">Υποβολή Αίτησης</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php } ?>