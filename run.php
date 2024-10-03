<?php

	# エラー表示
	ini_set( 'display_errors', 1 );

	# 呟く内容の設定 #
	$date_newyear = date('Y', strtotime('+1 year'));
	$week = array("日","月","火","水","木","金","土");
	$today = ' (' . $week[date("w")] . ')';

	if(date("H") == 0 || date("H") == 12) {
		$date_now = date('Y年n月j日') . $today . ' 🕛 ' . date('G時');
	} else if(date("H") == 1 || date("H") == 13) {
		$date_now = date('Y年n月j日') . $today . ' 🕐 ' . date('G時');
	} else if(date("H") == 2 || date("H") == 14) {
		$date_now = date('Y年n月j日') . $today . ' 🕑 ' . date('G時');
	} else if(date("H") == 3 || date("H") == 15) {
		$date_now = date('Y年n月j日') . $today . ' 🕒 ' . date('G時');
	} else if(date("H") == 4 || date("H") == 16) {
		$date_now = date('Y年n月j日') . $today . ' 🕓 ' . date('G時');
	} else if(date("H") == 5 || date("H") == 17) {
		$date_now = date('Y年n月j日') . $today . ' 🕔 ' . date('G時');
	} else if(date("H") == 6 || date("H") == 18) {
		$date_now = date('Y年n月j日') . $today . ' 🕕 ' . date('G時');
	} else if(date("H") == 7 || date("H") == 19) {
		$date_now = date('Y年n月j日') . $today . ' 🕖 ' . date('G時');
	} else if(date("H") == 8 || date("H") == 20) {
		$date_now = date('Y年n月j日') . $today . ' 🕗 ' . date('G時');
	} else if(date("H") == 9 || date("H") == 21) {
		$date_now = date('Y年n月j日') . $today . ' 🕘 ' . date('G時');
	} else if(date("H") == 10 || date("H") == 22) {
		$date_now = date('Y年n月j日') . $today . ' 🕙 ' . date('G時');
	} else {
		$date_now = date('Y年n月j日') . $today . ' 🕚 ' . date('G時');
	}

	if(date("m") == 12 && date("d") == 31) {
		if(date("H") == 0 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 24 時間♪
EOM;
		} else if(date("H") == 6 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 18 時間♪
EOM;
		} else if(date("H") == 12 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 12 時間♪
EOM;
		} else if(date("H") == 18 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 6 時間♪
EOM;
		} else if(date("H") == 19 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 5 時間♪
EOM;
		} else if(date("H") == 20 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 4 時間♪
EOM;
		} else if(date("H") == 21 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 3 時間♪
EOM;
		} else if(date("H") == 22 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 2 時間♪
EOM;
		} else if(date("H") == 23 && date("i") == 0) {
			$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 1 時間♪
EOM;
		} else if(date("H") == 23 && date("i") == 10) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 50 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 20) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 40 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 30) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 30 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 40) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 20 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 45) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 15 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 50) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 10 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 51) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 9 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 52) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 8 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 53) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 7 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 54) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 6 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 55) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 5 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 56) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 4 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 57) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 3 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 58) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 2 分♪
EOM;
		} else if(date("H") == 23 && date("i") == 59) {
			$post_data = <<< EOM
✨ {$date_newyear} 年まであと 1 分♪
EOM;
		}
	} else if(date("m") == 4 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 9 ヶ月♪
EOM;
	} else if(date("m") == 7 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 半年♪
EOM;
	} else if(date("m") == 10 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 3 ヶ月♪
EOM;
	} else if(date("m") == 11 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 2 ヶ月♪
EOM;
	} else if(date("m") == 12 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 1 ヶ月♪
EOM;
	} else if(date("m") == 12 && date("d") == 11 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 3 週間♪
EOM;
	} else if(date("m") == 12 && date("d") == 18 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 2 週間♪
EOM;
	} else if(date("m") == 12 && date("d") == 25 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 1 週間♪
EOM;
	} else if(date("m") == 12 && date("d") == 26 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 6 日♪
EOM;
	} else if(date("m") == 12 && date("d") == 27 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 5 日♪
EOM;
	} else if(date("m") == 12 && date("d") == 28 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 4 日♪
EOM;
	} else if(date("m") == 12 && date("d") == 29 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 3 日♪
EOM;
	} else if(date("m") == 12 && date("d") == 30 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
✨ {$date_newyear} 年まであと 2 日♪
EOM;
	} else if(date("m") == 1 && date("d") == 1 && date("H") == 0 && date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
🎉 {$date_now} をお知らせします。㊗
EOM;

	} else if(date("i") == 0) {
		$post_data = <<< EOM
【 #時報 】
{$date_now} をお知らせします。
EOM;
	}

	if(isset($post_data)){

		$data = [
			'note' => $post_data
		];

		$json_data = json_encode($data);

		# https://github.com/mattn/algia を使う前提のサンプル
		$put_url = 'http://127.0.0.1:10000/post';

		$ch = curl_init($put_url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		curl_exec($ch);
		curl_close($ch);

	}

?>
