<?php

namespace ShortURL\ShortURL;

class Shorten
{
  public $key;

  public function __construct($key = 'FKuVTOWAyyXY')
  {
    $this->key = $key;
  }

  public function json($url, $custom = "")
  {
    return $this->handle($url, $custom, 'json');
  }

  public function text($url, $custom = "")
  {
    return $this->handle($url, $custom, 'text');
  }

  public function handle($url, $custom = "", $format = "json")
  {
    $api_url = "https://short-url.asia/api/?key=$this->key";
    $api_url .= "&url=" . urlencode(filter_var($url, FILTER_SANITIZE_URL));
    if (!empty($custom)) {
      $api_url .= "&custom=" . strip_tags($custom);
    }
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $api_url
    ));
    $Response = curl_exec($curl);
    curl_close($curl);
    if ($format == "text") {
      $Ar = json_decode($Response, TRUE);
      if ($Ar["error"]) {
        return $Ar["msg"];
      } else {
        return $Ar["short"];
      }
    } else {
      return $Response;
    }
  }
}
