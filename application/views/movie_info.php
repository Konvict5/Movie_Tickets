<?php



// var_dump($movie_info);

foreach ($movie_info as $key => $movies) {
	echo "<center><font color='#CFF5F1'><b>".$movies['movie_name']."</b></font></center>";
	echo '<img  height="200" width="250" src="data:image/jpeg;base64,'.base64_encode( $movies['movie_photo'] ).'"/>'." ";
	echo "<font color='green'>".$movies['movie_info']."</font>";
	
}
