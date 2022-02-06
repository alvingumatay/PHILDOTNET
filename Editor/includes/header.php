<div class="brand clearfix">
<div class = "navbar navbar-default navbar-fixed-top" style="background-color: #0c7299;">
          <span class="menu-btn"><i class="fa fa-bars"></i></span>
		
        <label class = "navbar-brand" style="font-size: 26px;">PHIL 
		<span style="color: #ffce14;">STAR </span>EDITOR MANAGER
		
		</label>
           
           
		
			
		<ul class="ts-profile-nav">
		<li class="ts-account">
           <a href="#">
            <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href = "">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		 <?php
				$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
				$fq = $conn->query("SELECT COUNT(*) as total FROM `ckeditor` WHERE `id`") or die(mysqli_error());
				$ff = $fq->fetch_array();
				?>
		<div class="content">		
		  <label class = "navbar-brand" style="font-size: 15px;">
          <a href = "edit_section.php"><span class = "glyphicon glyphicon-th-list"></span> <span class = "badge" > <?php echo $ff['total']?>
          </span></a>
           </label> 
       </div>
	</div>
    </div>