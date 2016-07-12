<?php


//var_dump($all_movies);
	
// echo $movies['movie_name'];
// $counter=count($all_movies);
// echo "<ol start='1'>";
echo "<div class='row'>";
foreach ($all_movies as $key => $movies) {

$id=$movies['movie_id'];

echo "<a href='get_movie_info/$id'>";
	echo '<div class="col-md-3" style="margin:15px 0px 0px 57px"><img  height="200" width="250" src="data:image/jpeg;base64,'.base64_encode( $movies['movie_photo'] ).'"/>'." ";
	echo "<center><font color='#CFF5F1'><b>".$movies['movie_name']."</b></font></center></div></a>";

}
echo "</div>";
// echo "<li>".$movies['movie_name']."</li>";


// echo "</ol>"; 
