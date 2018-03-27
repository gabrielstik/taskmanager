<?

class Tasks {
  function __construct() {
    $Db = new Db();
    $tasks = $Db->getTasks('gabe');
    echo '<pre style="font-size:12px">';
    print_r($tasks);
    echo '</pre>';
  }
}