<?php if (!isset($id) || $id == "") :?>


<div class="container myform">
<h3>Add New Record</h3>
<form method="POST" action="process.php?add" class="form-horizontal" role="form">
	
	<div class="form-group">
		<label for="input class="" class="col-sm-2 control-label">Id</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='id'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='name'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Job</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='job'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Personality</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='personality'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Salary</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='salary'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
			<input class="form-control" type='email' name='email'/>
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">User Notes</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='user_notes'/>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10" >
			<input type="submit" class="btn btn-default" value="Save"/>
		</div>
	</div>
</form>
</div>

<?php else:?>

<div class="container myform">
<h3>Update record</h3>

<form method="POST" action="process.php?update" class="form-horizontal" role="form">
	<input type='hidden' name='id' value='<?php echo $user->attributes()->id;?>'/>
	
	<div class="form-group">
		<label for="input class="" class="col-sm-2 control-label">Id</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='id' value='<?php echo $user->attributes()->id;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='name' value='<?php echo $user->name;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Job</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='job' value='<?php echo $user->job;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Personality</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='personality' value='<?php echo $user->personality;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Salary</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='salary' value='<?php echo $user->salary;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
			<input class="form-control" type='email' name='email' value='<?php echo $user->email;?>' />
		</div>
	</div>
	<div class="form-group">	
		<label for="input class="" class="col-sm-2 control-label">User Notes</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' name='user_notes' value='<?php echo $user->user_notes;?>' />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10" >
			<input type="submit" class="btn btn-default" value="Save"/>
		</div>
	</div>
</form>
</div>	

<?php endif;?>