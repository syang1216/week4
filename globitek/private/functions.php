<?php

  function h($string="") {
    return htmlspecialchars($string);
  }

  function u($string="") {
    return urlencode($string);
  }

  function raw_u($string="") {
    return rawurlencode($string);
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  function url_for($script_path) {
    return DOC_ROOT . $script_path;
  }

  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

  function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
  }

  function request_is_same_domain() {
    if(!isset($_SERVER['HTTP_REFERER'])) { return false; }
    $referer_host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    return ($referer_host === $_SERVER['HTTP_HOST']);
  }

  function display_errors($errors=array()) {
    $output = '';
    if (!empty($errors)) {
      $output .= "<div class=\"errors\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }


  function str_rot($string, $rot=13) {
    $letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
    // "% 26" allows numbers larger than 26
    // doubled letters = double rotated
    $dbl_rot = ((int) $rot % 26) * 2;
    if($dbl_rot == 0) { return $string; }
    // build shifted letter map ($dbl_rot to end + start to $dbl_rot)
    $map = substr($letters, $dbl_rot) . substr($letters, 0, $dbl_rot);
    // strtr does the substitutions between $letters and $map
    return strtr($string, $letters, $map);
  }

  function signing_checksum($string) {
    $salt = "qi02BcXzp639"; // makes process hard to guess
    return hash('sha1', $string . $salt);
  }

  function sign_string($string) {
    return $string . '--' . signing_checksum($string);
  }

  function signed_string_is_valid($signed_string) {
    $array = explode('--', $signed_string);
    // if not 2 parts it is malformed or not signed
    if(count($array) != 2) { return false; }

    $new_checksum = signing_checksum($array[0]);
    return ($new_checksum === $array[1]);
  }
?>
