<nav class="navbar navbar-default" role="navigation">
	<div class="collapse navbar-collapse navbarCollapse">
	    <ul class="nav navbar-nav navbar-right">
	        <!-- <li class="active">
	            <a href="#">Movies</a>
	        </li>
	        <li>
	            <a href="category.php"> Categories</a>
	        </li>   -->
	        <li class="<?php if($currentPage =='movie'){echo 'active';}?>" ><a href="movie.php">Movies</a></li>
            <li class="<?php if($currentPage =='category'){echo 'active';}?>" ><a href="category.php">Categories</a></li>                    
	    </ul>
	</div>
</nav>

