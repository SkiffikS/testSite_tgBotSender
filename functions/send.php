<?php


$content = "date: " . date("Y-m-d") . "\n";

foreach ($_POST as $key => $value) {
  if ($value) {
    $content .= "<b>$key</b>: <i>$value</i>\n";
  }
}

if (trim($content)) {
  $content .= "<b>Message from Site: </b>\n$content";

  $apiToken = "6098860072:AAFp9MoK5m_nA1nj8yIsWUO2O5U84--Q3Uc";
  $data = [
    "chat_id" => "@SkiffikS_testWebMessages",
    "text" => $content,
    "parse_mode" => "HTML"
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}