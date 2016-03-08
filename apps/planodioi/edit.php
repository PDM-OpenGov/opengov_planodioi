<div class="row">
	<div class="col-lg-12">
		<h3 class="page-title">Επεξεργασία Αίτησης Ανανέωσης</h3>
	</div>
</div>
<?php
	print_messages(); 
?>
<div class="row"><div class="col-sm-12"><div id="errorer" class="alert alert-danger" style="display:none;">Επιβεβαιώστε την ορθότητα των πεδίων</div></div></div>
<div class="row">
	<div class="col-lg-12">
		<div class="">
		<form name="leaveform" id="leaveform" method="post" action="<?php echo URL; ?>/?p=planodioi|new">
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Στοιχεία Αιτούντα
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Όνομα</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="Όνομα">
							</div>
							<div class="form-group">
								<label>Επίθετο</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="Επίθετο">
							</div>
							<div class="form-group">
								<label>ΑΦΜ</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="123456788">
							</div>
							<div class="form-group">
								<label>Διεύθυνση</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="123456788">
							</div>
							<div class="form-group">
								<label>Τηλέφωνο</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="213456876">
							</div>
							<div class="form-group">
								<label>Κινητό</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="69777445566">
							</div>
							<div class="form-group">
								<label>eMail</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="name@domain.gr">
							</div>
							<div class="form-group">
								<label>Fax</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="213456876">
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
								<label>Ημερομηνία Υποβολής</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="02/01/2016 18:31">
							</div>
							<div class="form-group">
								<label>Αριθμός Μητρώου Παραγωγού</label>
								<input class="form-control required" name="num_leaves" id="num_leaves" type="text" value="213456876">
							</div>
							<div class="form-group">
								<label>Δήμος Υπαγωγής</label>
								<select name="user_tel" class="form-control" id="user_tel">
									<option>..</option>
									<option>Κοζάνης</option>
									<option selected="selected">Καστοριάς</option>
								</select>
							</div>
							<div  class="alert alert-success">Ο Αριθμός Μητρώου είναι Έγκυρος</div>
							<div  class="alert alert-success">Είναι Φορολογικά Ενήμερος (1283209232)</div>
							<div  class="alert alert-success">Είναι Ασφαλιστικά Ενήμερος (1283209232)</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="panel panel-green">
						<div class="panel-heading">
							Επεξεργασία Αίτησης
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>Σχόλια</label><p class="form-control-static">
								<textarea name="comments" id="comments" rows="6" cols="50" placeholder="Συμπληρώστε το σε περίπτωση απόρριψης της αίτησης"></textarea></p>
							</div>
							<div class="form-group">
								<div id="errorer" class="alert alert-danger" style="display:none;">Συμπληρώστε Σχόλιο σε περίπτωση απόρριψης της αίτησης</div>
								<div class="radio">
									<label>
										<input type="radio" name="approve_type" class="approve_type" id="approve_type_accept" value="1" checked="checked">Έγκριση
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="approve_type" class="approve_type"  id="approve_type_deny" value="0">Απόρριψη
									</label>
								</div>
							</div>
							<div class="form-group">
								<p class="form-control-static">
									<button type="submit" class="btn btn-outline btn-success">Αποθήκευση</button>
								</p>
							</div>
							
						</div>
					</div>
				</div>
				
			</div> 

		</form>
	</div>
</div>
