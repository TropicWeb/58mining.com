<?php 
	namespace App\Controllers;

	class IndexController extends BaseController {

		public function getIndex(){

			return $this->render('../views/main.php');
		}

		public function getCalculator(){

			$jsonBTC = file_get_contents("https://api.coinmarketcap.com/v2/ticker/1/");
			$jsonLTC = file_get_contents("https://api.coinmarketcap.com/v2/ticker/2/");
			$jsonETH = file_get_contents("https://api.coinmarketcap.com/v2/ticker/1027/");
			$jsonBCH = file_get_contents("https://api.coinmarketcap.com/v2/ticker/1831/");
			$jsonETC = file_get_contents("https://api.coinmarketcap.com/v2/ticker/1321/");
			$jsonXVG = file_get_contents("https://api.coinmarketcap.com/v2/ticker/693/");
			$jsonSC = file_get_contents("https://api.coinmarketcap.com/v2/ticker/1042/");


			$BTC = json_decode($jsonBTC);
			$LTC = json_decode($jsonLTC);
			$ETH = json_decode($jsonETH);
			$BCH = json_decode($jsonBCH);
			$ETC = json_decode($jsonETC);
			$XVG = json_decode($jsonXVG);
			$SC = json_decode($jsonSC);

			$valuesCrypto = [
				"BTC" => [$BTC->data->quotes->USD->price,$BTC->data->quotes->USD->percent_change_24h],
				"LTC" => [$LTC->data->quotes->USD->price,$LTC->data->quotes->USD->percent_change_24h],
				"ETH" => [$ETH->data->quotes->USD->price,$ETH->data->quotes->USD->percent_change_24h],
				"BCH" => [$BCH->data->quotes->USD->price,$BCH->data->quotes->USD->percent_change_24h],
				"ETC" => [$ETC->data->quotes->USD->price,$ETC->data->quotes->USD->percent_change_24h],
				"XVG" => [$XVG->data->quotes->USD->price,$XVG->data->quotes->USD->percent_change_24h],
				"SC" => [$SC->data->quotes->USD->price,$SC->data->quotes->USD->percent_change_24h]
			];

			return $this->render('../views/calculator.php', [
				"valuesCrypto"=>$valuesCrypto
			]);
		}

		public function getUs(){
			return $this->render('../views/us.php');
		}
	}

?>