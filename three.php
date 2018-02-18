<!-- Three -->
<?php
$conn=Database::getInstance();
?>
<div class="row">
<?php	
$q = $conn->query('SELECT autor_id, ime, prezime, autor.opis, slika.slika_id, naziv FROM elektroakustika.autor INNER JOIN slika ON autor.slika_id = slika.slika_id;');
 $r = array();
while($res = $q->fetch(PDO::FETCH_OBJ)){
$r [$res->naziv] = $res;
$res->preview = [];
 }
foreach ($r as $result){
?>
 <div class="4u 6u(2) 12u$(3)">
<article class="box post">
<a href="#" class="image fit"><img src="images/<?php echo $result->naziv;?>" alt="" /></a>
<h3><?php echo $result->ime . " "; echo $result->prezime?></h3>
<p><?php echo $result->opis?></p>
<ul class="actions">
 <li><a href="kompozitori2.php" class="button">Learn More</a></li>
</ul>
</article>
</div>
 <?php
                                            }
                                            ?>
				</div>
			</section>