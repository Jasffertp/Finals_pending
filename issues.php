<head>
	<title>Issues</title>
</head>
<?php
	session_start();
	include 'header.php';
?>

<div class="container-fluid py-4 overflow-hidden">
	<div class="container-fluid">
		<div class="row">
			<div class="col p-2">
				<div class="btn-group">
				  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Floor
				  </button>
				   <div class="dropdown-menu">
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '1st'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=1st%20floor&time=day">1st Floor</a>

					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '2nd'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=2nd%20floor&time=day">2nd Floor</a>

					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '3rd'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=3rd%20floor&time=day">3rd Floor</a>

					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '4th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=4th%20floor&time=day">4th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '5th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=5th%20floor&time=day">5th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '6th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=6th%floor&time=day">6th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '7th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=7th%20floor&time=day">7th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '8th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=8th%20floor&time=day">8th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '9th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=9th%20floor&time=day">9th Floor</a>
					
					<a  class="dropdown-item" 
					<?php
					if(!isset($_GET['floor'])){
						echo 'active';
					}else if($_GET['floor'] == '10th'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&floor=10th%floor&time=day">10th Floor</a>
					
				  </div>
				</div>
			</div>
			<div class="col p-2">
				<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Report Status
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					
					<a class="dropdown-item" 
					<?php
					if(!isset($_GET['status'])){
						echo 'active';
					}else if($_GET['status'] == 'done'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&status=done&time=day">Done</a>
					
					<a class="dropdown-item" 
					<?php
					if(!isset($_GET['status'])){
						echo 'active';
					}else if($_GET['status'] == 'unresolved'){
						echo 'active';
					}
				?> href="issues.php?site=Issues&page=1&status=unresolved&time=day">Unresolved</a>

				  </div>
				</div>
			</div>
			<div class="col p-2">
				<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Equipment
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					
					<a class="dropdown-item" 
					<?php
					if(!isset($_GET['machine'])){
						echo 'active';
					}else if($_GET['machine'] == 'HVAC'){
						echo 'active';
					}
					?> href="issues.php?site=Issues&page=1&equipment=HVAC&time=day">HVAC</a>
					
					<a class="dropdown-item" 
					<?php
					if(!isset($_GET['machine'])){
						echo 'active';
					}else if($_GET['machine'] == 'Genset'){
						echo 'active';
					}
				?> href="issues.php?site=Issues&page=1&equipment=Genset&time=day">Generator Set</a>

				  </div>
				</div>
			</div>
			<div class="col p-2">
				<form action="backend/date.p.php?site=issue" method="post">
					<label>Start date</label>
					<input class="form-control mr-sm-2 w-100" type="date" placeholder="Search" aria-label="Search" name = 'start' value="<?php
						if(isset($_GET['s'])){
							$d = date('Y-m-d', strtotime($_GET['s']));
							echo $d;
						}
					?>">

			</div>
			<div class="col p-2">
					<label>End date</label>
					<input class="form-control mr-sm-2 w-100" type="date" placeholder="Search" aria-label="Search" name = 'end' value ="<?php
						if(isset($_GET['e'])){
							$d = date('Y-m-d', strtotime($_GET['e']));
							echo $d;
						}
					?>">
			</div>
			<div class="col p-2">

					<button class="btn btn-primary mb-2" type="submit" name="submit">Go</button>
				</form>
			</div>
			<div class="col p-2">
				<div class="btn-group btn-group" role="group">
			  <a type="button" class="btn btn-info 
				<?php
					if(!isset($_GET['time'])){
						echo 'active';
					}else if($_GET['time'] == 'day'){
						echo 'active';
					}
				?>
			  " href="issues.php?site=Issues&page=1&time=day">Daily</a>
			  <a type="button" class="btn btn-info <?php
					if(isset($_GET['time'])){
						if($_GET['time'] == 'week'){
							echo 'active';
						}
					}
				?>" href="issues.php?site=Issues&page=1&time=week">This Week</a>
			  <a type="button" class="btn btn-info <?php
					if(isset($_GET['time'])){
						if($_GET['time'] == 'month'){
							echo 'active';
						}
					}
				?>" href="issues.php?site=Issues&page=1&time=month">This Month</a>
				
				<a type="button" class="btn btn-info <?php
					if(isset($_GET['time'])){
						if($_GET['time'] == 'year'){
							echo 'active';
						}
					}
				?>" href="issues.php?site=Issues&page=1&time=year">This Year</a>
			</div>
			</div>
			
			
			<div class="col p-2">
				<form class="form-inline" method="POST">
					<input class="form-control mr-sm-2 w-100" type="text" placeholder="Search" name="search">
					<input type="submit" name="submit">
				</form>
			</div>
			
			
			
			
			
		</div>
	</div>
	
	<table class="table rounded-3 shadow-lg table-hover mb-5">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Issue</th>
		  <th scope="col">Equipment</th>
		  <th scope="col">Status</th>
		  <th scope="col">Date Created</th>
		  <th scope="col">Date Due</th>
		  <th scope="col">Date Submitted</th>
		  <th scope="col">Assigned to</th>
		</tr>
	  </thead>
	  <tbody>
	  
	
		
		<?php 
			include 'backend/dropdown_filters.p.php'
		?>
		<?php
			include 'backend/search.php'; 
		?>

		<?php 
			include 'backend/get_reports.p.php'
		?>
	  </tbody>
	</table>
	
	<?php
		include 'backend/table_pagination_reports.p.php';
	?>
	
</div>