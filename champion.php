 <?php require("./layout/header.php"); ?>
 <div class="p-3"></div>
 <div data-v-methalol="" class="container champions-list-holder">
 <div data-v-methalol="" class="card filters">
 <div data-v-methalol="" class="card-body">
 <div data-v-methalol="" class="row">
 <div data-v-methalol="" class="col-12 col-sm-4 champion-search">
 <div data-v-methalol="" class="input-group input-group-sm">
 <div data-v-methalol="" class="input-group-prepend">
 <span data-v-methalol="" class="input-group-text">
 <i data-v-methalol="" class="fa fa-search"></i></span></div>
 <input data-v-methalol="" type="text" placeholder="Şampiyon Ara" autofocus="autofocus" tabindex="1" class="form-control">
 </div></div>
 <div data-v-methalol="" class="col-12 col-sm-8 text-center text-sm-right mt-2 mt-sm-0 role-search pr-4">
 <label data-v-methalol="">
<input data-v-methalol="" type="radio" name="role" value="">
	                        Tüm Roller
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Assassin">
	                        Suikastçi
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Fighter">
	                        Dövüşçü
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Mage">
	                        Büyücü
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Marksman">
	                        Nişancı
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Support">
	                        Destek
	                    </label> <label data-v-methalol=""><input data-v-methalol="" type="radio" name="role" value="Tank">
	                        Tank
	                    </label></div></div></div></div>

						<div data-v-methalol="" class="card-body champion-list mt-4">
						<div data-v-methalol="" class="card-body p-0">
	<?php $decode = curlFunc("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/tr_TR/champion.json")[0];
	foreach ($decode['data'] as $champion) {
		echo "<div data-v-methalol='' class='champion-box'><a data-v-methalol='' href='./builds/$champion[id]'>
		<img data-v-methalol='' src='http://ddragon.leagueoflegends.com/cdn/8.24.1/img/champion/$champion[id].png'>
		$champion[name][$champion[key]]
		</a></div>";



	}
	echo "</div></div></div> <!----> <!----></div>";
	include("./layout/footer.php");
?>
