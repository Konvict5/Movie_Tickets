<?php



// var_dump($movie_info);

foreach ($movie_info as $key => $movies) {
	echo "<div><center><font size='7' color='#CFF5F1'><b>".$movies['movie_name']."</b></font></center>";


$warcraft='Warcraft';
$deadpool='Deadpool';

// echo $movies['movie_name'];

if ($movies['movie_id'] == 3) {
echo '<center><iframe width="560" height="315" src="https://www.youtube.com/embed/Aj7ty6sViiU?autoplay=1" frameborder="0" allowfullscreen autoplay=1></iframe></center>';	
	}else{
	if ($movies['movie_name'] == $warcraft) {
echo '<center><iframe width="560" height="315" src="https://www.youtube.com/embed/RhFMIRuHAL4?autoplay=1" frameborder="0" allowfullscreen></iframe></center>';
	}elseif($movies['movie_name'] == $deadpool){
		echo '<center><iframe width="560" height="315" src="https://www.youtube.com/embed/ZIM1HydF9UA?autoplay=1" frameborder="0" allowfullscreen></iframe></center>';
	}
}
	// echo '<br><center><img  height="200" width="250" src="data:image/jpeg;base64,'.base64_encode( $movies['movie_photo'] ).'"/>'."</center> ";
	echo "<br><center><p><font color='green'><i>".$movies['movie_info']."</i></font></p></center>";
	echo "<p><center><font color='#00e6e6'>Free seats for this movie : ".$movies['free_seats']."</font></p>";
	echo "<p><font color='#00e6e6'>SOLD seats for this movie : ".$movies['taken_seats']."</font></p></div></center>";
	
}
