<?php require("./layout/header.php"); ?>
<div class="card bg-light p-3">
<form action="" method="post">
<div class="row">
<div class="col-1"></div>
<div class="col-2">
<select class="form-control bg-light" name="server">
<option value="tr1">TR</option>
<option value="">NA</option>
<option value="euw1">EUW</option>
<option value="">EUNE</option>
<option value="">BR</option>
<option value="">RU</option>
<option value="">LAN</option>
<option value="">LAS</option>
<option value="">OCE</option>
<option value="">KR</option>
<option value="">JR</option>
</select></div>
<div class="col-3">
<input class="form-control bg-light" type="text" name="kadi" value="TheJelyTiger"></div>
<div class="col-2"><button class="btn btn-outline-dark mx-1" type="submit">Ara</button></div>
</div>
</form>
</div><br>
<?php 
if($_POST){

?>


<div class="bilgiler card bg-light p-3">
<td>profileIconId	: <?=json_decode($link)->profileIconId?></td><br>
<td>id				: <?=json_decode($link)->id?></td><br>
<td>Kullanıcı Adı   : <?=json_decode($link)->name?></td><br>
<td>Kullanıcı Leveli: <?=json_decode($link)->summonerLevel?></td><br>
<td>Kullanıcı ID    : <?=json_decode($link)->accountId?></td><br>
<td>puuid    : <?=json_decode($link)->puuid?></td><br>
<td>Server          : <?php echo $server; ?></td>
<hr>
<td>Playerİd					: <?=json_decode($link2)->playerId?></td><br>
<td>championId					: <?=json_decode($link2)->championId?></td><br>
<td>championLevel				: <?=json_decode($link2)->championLevel?></td><br>
<td>championPoints				: <?=json_decode($link2)->championPoints?></td><br>
<td>lastPlayTime				: <?=json_decode($link2)->lastPlayTime?></td><br>
<td>championPointsSinceLastLevel: <?=json_decode($link2)->championPointsSinceLastLevel?></td><br>
<td>championPointsUntilNextLevel: <?=json_decode($link2)->championPointsUntilNextLevel?></td><br>
<td>chestGranted				: <?=json_decode($link2)->chestGranted?>(True/False Dönyor)</td><br>
<td>tokensEarned				: <?=json_decode($link2)->tokensEarned?></td><br>

</div>




<?php }?>

<div class="row mb-3 p-3">
<div class="col-12 free-champions">
<div class="card bg-dark" style="box-shadow:rgba(0,0,0,0.09) 0px 5px 50px 24px;">
<div class="card-header bg-dark text-white text-center"><div class="row"><div class="col">Ücretsiz Şampiyon Rotasyonu</div></div></div>
<div class="card-body p-0"><div class="row no-gutters"><div class="col"><div class="card bg-secondary text-white border-0 p-0"><div class="text-dark">
<td><? $rotasyon=json_decode($link3)->freeChampionIds ?><?php echo"<font color='red'>Haftalık Rotasyon :</font>"; print_r($rotasyon);?></td><br>
<td><? $newrotasyon=json_decode($link3)->freeChampionIdsForNewPlayers?><?php echo "<font color='blue'>Yeni Oyuncu Rotasyonu : </font>"; print_r($newrotasyon);?></td><br>
<td></td>
</div></div></div></div>
</div>
</div>
</div>
</div>

<?php require("layout/footer.php"); ?>
