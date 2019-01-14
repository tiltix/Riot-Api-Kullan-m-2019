<?php require("./layout/header.php"); ?>
<div class="p-3" align="center"><font id="logoo" face="Waterlily" color="#424242">MethaLoL<!-- --></font></div>
<div class="card-body  row p-3">
<div class="col-1"></div><div class="col-10">
  <form action="dene.php" method="post">
<div class="input-group input-group-lg">
  <select class="form-control" name="server">
    <option value="tr1">TR</option>
    <option value="na1">NA</option>
    <option value="euw1">EUW</option>
    <option value="eun1">EUNE</option>
    <option value="br1">BR</option>
    <option value="ru">RU</option>
    <option value="la1">LAN</option>
    <option value="la2">LAS</option>
    <option value="oc1">OCE</option>
    <option value="kr">KR</option>
    <option value="jp1">JP</option>
  </select>
  <input style="font-size:18px;" name="kadi" type="text" class="form-control bg-white mx-1" value="TheJelyTiger" placeholder="Sihirdar Adı"/>
    <div class="input-group-prepend">
	<button type="submit" style="font-size:18px;" class="btn btn-outline-dark mx-1">Ara</button>
</form></div>
</div>
</div><div class="col-1"></div></div>
<br>
<?php
if($_GET){

?>
<div class="bilgiler card bg-light p-3">
<td>profileIconId	: <img class="rounded-circle" height="70" width="70" src="http://ddragon.leagueoflegends.com/cdn/8.24.1/img/profileicon/<?=json_decode($link)->profileIconId?>.png"/></td><br>
<td>id				: <?=json_decode($link)->id?></td><br>
<td>Kullanıcı Adı   : <?=json_decode($link)->name?></td><br>
<td>Kullanıcı Leveli: <?=json_decode($link)->summonerLevel?></td><br>
<td>Kullanıcı ID    : <?=json_decode($link)->accountId?></td><br>
<td>puuid    : <?=json_decode($link)->puuid?></td><br>
<td>Server          : <?php echo $server; ?></td>
<hr>
<td>Playerİd					: <?=json_decode($link2)->playerId?></td><br>
<td>championId					: <?  ?></td><br>
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
<div class="card-body p-0"><div class="row no-gutters"><div class="col"><div class="card bg-secondary text-white border-0 p-0">
<div class="text-center">
<?php
$newrotasyon=json_decode($link3)->freeChampionIdsForNewPlayers;
$rotasyon=json_decode($link3)->freeChampionIds;
$decode = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion.json")[0];
$c=0;
foreach($decode['data'] as $champion)
{
	$championkey = "$champion[key]"; //144 diyelim
	$rotasyonn = "$rotasyon[$c]";
	foreach($rotasyon as $isim){
		if ($isim == $championkey)
		{
			$c++;
			echo "<img alt='$champion[id]' width='70px' class='p-1' src='http://ddragon.leagueoflegends.com/cdn/img/champion/loading/$champion[id]_0.jpg'/>";
			break;
		}
	}
}
?>
<?
echo "<br><label class='mx-5'>Yeni Oyuncu Rotasyonu</label>";
$newrotasyon=json_decode($link3)->freeChampionIdsForNewPlayers;
$rotasyon=json_decode($link3)->freeChampionIds;
$decode = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion.json")[0];
$c=0;
foreach($decode['data'] as $champion)
{
	$championkey1 = "$champion[key]"; //144 diyelim
	array($rotasyonnn = "$newrotasyon[$c]");
	foreach($newrotasyon as $isim){
		if ($isim == $championkey1)
		{
			$c++;
			echo "<img alt='$champion[id]' width='70px' class='p-1' src='http://ddragon.leagueoflegends.com/cdn/img/champion/loading/$champion[id]_0.jpg'/>";
			break;
		}
	}
} ?>
<td></td><br>
<td></td><br>

</div></div></div></div>
</div>
</div>
</div>
</div>

<?php require("layout/footer.php"); ?>
