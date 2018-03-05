<!-- footer 
			==================================================
		<footer>
			<div class="container">
				
				
				<p class="copyright">
					&copy; Copyright 2018. "Movies" by Prasad Bobby. All rights reserved.
					<br/>
				<center>
						<?php 		
							$handle = fopen("visitors.txt", "r"); 		
							if(!$handle)
						{ 
							echo "could not open the file" ; 		
						} 		
						else
						{ 			
							$counter = ( int ) fread ($handle,20) ; 
							fclose ($handle) ;
							$counter++ ; 		
							echo " <p class='mb-2'><small> Total Visitors ". $counter . "" ;
							echo "</small></p>";
							$handle = fopen("visitors.txt", "w" ) ;
							fwrite($handle,$counter) ; 		
							fclose ($handle) ;
						} 
					  ?>
					</center>
			</div>
		</footer>
		<!-- End footer -->

-->