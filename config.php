<?php
// Tanımlamalar
$baseUrl = "http://localhost/4"; // Projenin Bulunduğu Dizin Örn : http://localhost/lolApi/
$apikey = "RGAPI-db0d72d2-5c7b-48aa-8dd0-9d4f5d1733c3"; // developer.riotgames.com adresinden aldığınız api

$SummonerAdı = $_POST["kadi"];
$server = $_POST["server"];

//Eskisi
$link11 = baglan("https://$server.api.riotgames.com/lol/champion-mastery/v3/champion-masteries/by-summoner/11179094/by-champion/63?api_key=$apikey");//rakam olan yer playerId

//Spectator V4
$link5 = baglan("https://tr1.api.riotgames.com/lol/spectator/v4/featured-games?api_key=$apikey");// Featured Games
$link4 = baglan("https://$server.api.riotgames.com/lol/spectator/v4/active-games/by-summoner/$S_id?api_key=$apikey"); // Active Games
// Champion V3 - Champion Rotations
$link3 = baglan("https://tr1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=$apikey");
// Summoner V4 - SummonerName
$link = baglan("https://$server.api.riotgames.com/lol/summoner/v4/summoners/by-name/$SummonerAdı?api_key=$apikey");
//ChampMastery V4
$link6 = baglan("https://tr1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/$S_id?api_key=$apikey");

$link8 = baglan("https://tr1.api.riotgames.com/lol/champion-mastery/v4/scores/by-summoner/$S_id?api_key=$apikey");
//******************************************************************************************************************************************************

$decode = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion.json")[0];// Şampiyonlar List
$decodeChamp = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion/Ahri.json")[0]; //Şampiyon Özellikleri



function curlFunc($url)
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => 0,
    ));

    $result = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    $decode = json_decode($result, true);

    return  array($decode , $httpcode); // json_decode ve Http Status Code fonksiyon dışına aktarmak için array oluşturduk

}
function baglan($a){
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $a);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
$isle = curl_exec($ch);
curl_close($ch);
return $isle;
}
