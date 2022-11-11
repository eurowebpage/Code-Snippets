<?php
####################
class get_site_php_info {
  public $headers;

  public function __construct() {
    $this->headers = array();
  }
  public function fetch_headers($opts){
    $opts[CURLOPT_HEADERFUNCTION] = array($this, '_setHeader');
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    return curl_exec($ch);
  }

  private function _setHeader($ch, $header) {
    $this->headers[] = $header;
    return strlen($header);
  }
}


echo "<h1>Get Site Header Information</h1>";
echo "<h3>Domain input form</h3>";
echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post' enctype=''>" .
  "<table>" .
  "<tr><td>Enter URL: </td>" .
  "<td><input type='text' name='url' value='' size='40' maxlength='128' placeholder='your domain here' /></td>" .
  "</tr>" .
  "<tr><td colspan='2'><input type='hidden' name='action' value='submitted' />" .
  "<input type='submit' name='submit' value='Submit' /> " .
  "<input type='reset' value='Reset' /></td></tr>" .
  "</table>" .
  "</form>";
 
if (isset($_POST['action']) && $_POST['action'] == "submitted") {
  echo "<h4>Output</h4>";
  if ($_POST['url']) {
    $url = substr($_POST['url'], 0, 4) == 'http'? $_POST['url']: 'http://' . $_POST['url'];
    echo "<h3>General [" . $url . "]</h3>";
    $opts = array(
        CURLOPT_URL => $url,                // set the URL
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 120,
        CURLOPT_TIMEOUT => 120,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 3,
        CURLOPT_SSL_VERIFYPEER => FALSE,
    );
    $info = new get_site_php_info;

    $data = $info->fetch_headers($opts);
    echo "<h3>Headers</h3><pre>" . var_export($info->headers, true) . "</pre>";

  } else {
      echo "<p>The field is not set!!</p>";
  }
  echo "<p><a href='" . $_SERVER['PHP_SELF'] . "'>Try again</a></p>";
}

###############

?>
