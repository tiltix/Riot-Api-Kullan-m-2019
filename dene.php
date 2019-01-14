<? require"./layout/header.php";
$S_id =json_decode($link)->id;
$link2 = baglan("https://$server.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/$S_id/by-champion/63?api_key=$apikey");
$H_id =json_decode($link2)->championId;
$H_Level =json_decode($link2)->championLevel;
$H_Points =json_decode($link2)->championPoints;
$H_LstPlayTime =json_decode($link2)->lastPlayTime;
$H_LstLevel =json_decode($link2)->championPointsSinceLastLevel;
$H_NxtLevel =json_decode($link2)->championPointsUntilNextLevel;
$H_Chest =json_decode($link2)->chestGranted;



// Hero İsmi Bulma Fonksiyonu
function Heroismi($id) {
  $decode = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion.json")[0];
  foreach ($decode['data'] as $champion) {
    $championkey = "$champion[key]";
    if ($championkey == $id)
    {
      echo " $champion[name]"; // Namesini Yazdırdık.
    }
  }
}
// Hero Mastery Derecesini Bulma <3
function championLevel1($H_Level){
  if ($H_Level <= 7 && $H_Level >= 1 )
  {
    echo " <img height='70' width='70' src='https://cdn.lols.gg/assets/images/champ-mastery/$H_Level.png'>";
  }
}
// Sihirdar Adını girdiğinde onun id sini alacak ve ['Summonerid'] olarak kayıt edecek
 ?>
 <img src="https://cdn.lols.gg/assets/images/champ-mastery/1.png" height="70" width="70">
<div class="bilgiler card bg-light p-3">
<td>profileIconId	: <img class="rounded-circle" height="70" width="70" src="http://ddragon.leagueoflegends.com/cdn/8.24.1/img/profileicon/<?=json_decode($link)->profileIconId?>.png"/></td><br>
<td>Summoner id				: <? echo $S_id; ?></td><br>
<td>Kullanıcı Adı     : <?=json_decode($link)->name?></td><br>
<td>Kullanıcı Leveli  : <?=json_decode($link)->summonerLevel?></td><br>
<td>Kullanıcı ID      : <?=json_decode($link)->accountId?></td><br>
<td>puuid             : <?=json_decode($link)->puuid?></td><br>
<td>Server            : <?php echo $server; ?></td>
<hr><!-- -->
<td>Playerİd				          	 : <?=json_decode($link2)->summonerId?></td><br>
<td>championId					         : <? Heroismi($H_id); ?></td><br>
<td>championLevel				         : <? championLevel1($H_Level); ?></td><br>
<td>championPoints				       : <?=json_decode($link2)->championPoints?></td><br>
<td>lastPlayTime				         : <?=json_decode($link2)->lastPlayTime?></td><br>
<td>championPointsSinceLastLevel : <?=json_decode($link2)->championPointsSinceLastLevel?></td><br>
<td>championPointsUntilNextLevel : <?=json_decode($link2)->championPointsUntilNextLevel?></td><br>
<td>chestGranted				         : <?=json_decode($link2)->chestGranted?>(True/False Dönyor)</td><br>
<td>tokensEarned				         : <?=json_decode($link2)->tokensEarned?></td><br>
<hr>
<td>gameId          : <?=json_decode($link4)->gameId?></td><br>
<td>mapId          : <?=json_decode($link4)->mapId?></td><br>
<td>gameMode          : <?=json_decode($link4)->gameMode?></td><br>
<td>gameType          : <?=json_decode($link4)->gameType?></td><br>
<td>gameQueueConfigId          : <?=json_decode($link4)->gameQueueConfigId?></td><br>
<td>participants          : <?=json_decode($link4)->participants?></td><br>
<td>gameId          : <?=json_decode($link4)->gameId?></td><br>
<?php

foreach ($link4 as $participants) {
  echo " $participants[summonerName]";
}

 ?>
<td></td>
<td></td>

</div>
<div class="">

</div>


<div class="row"><div class="col-1">
<div style="position:relative;width:100px;height:100px;background:https://cdn.lols.gg/assets/images/level-sprite.png;background-position:95% 0; background-size:cover;" class="profile-holder level-1">
<div style="background-color: #fff;border-color: black;text-align: center;position:absolute;bottom:-19%;left:0;right:0;margin:0 auto;color:black;/* font-weight:700; *//* z-index:2; *//* width:48px; *//* text-align:center; *//* display:block; *//* font-size:10px; */" class="">155</div>
<img style="height:100%;width:100%;border-radius:100%" class="rounded-circle"  src="http://ddragon.leagueoflegends.com/cdn/8.24.1/img/profileicon/3872.png"/>
</div></div>
<div class="col-11">TheJelyTiger<br>TR</div>

</div></div><br>
<div class="" style="border-top-width: 4px;">
<?php
if (isset($_POST['server']) && isset($_POST['kadi']))
{
  echo "Sihirdar Adı : ".$_POST['kadi'];
  echo "Server : ".$_POST['server'];
}
else {
  echo "Kullanıcı adı veya server seçmediniz.";
}

?>

<? require"./layout/footer.php";?>
