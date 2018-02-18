                                                <?php
                                                
                                                $autori = $conn->query('SELECT autor_id, ime, prezime FROM autor'); 
						$autoriArr = []; 
						while($a = $autori->fetch(PDO::FETCH_OBJ)){
							$autoriArr [$a->autor_id] = $a;
							$a->dela = []; 
						} 
						$dela = $conn->query('select * from delo order by delo_id asc');
						
						while($d = $dela->fetch(PDO::FETCH_OBJ)){ 
							$autoriArr[$d->autor_id]->dela[] = $d;
						} 
                                                foreach ($autoriArr as $row)
                                                {
                                                 ?>
                                                <ul style="list-style: none;">
                                                    <li><a href=''><h4><?php echo $row->ime . " "; echo $row->prezime?></h4></a>
						    	<ul style="list-style: none;">
						    		<?php
								foreach($row->dela as $delo){
									?>
                                                            <li><i><b><?php echo $delo->naziv; ?></i></b></li>
                                                            <li><?php echo $delo->godina; ?></i></b></li>
                                                            <li><?php echo $delo->sastav; ?></i></b></li>
                                                            <li><?php echo $delo->opis; ?></i></b></li>
									<?php
								}
								?>
						    	</ul>
						    </li> 
                                                </ul>
                                                 <?php
                                                 }
                                                ?>