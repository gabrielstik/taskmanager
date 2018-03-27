<?

$Db = new Db();
$tasks = $Db->getTasks('gabe');

?>
<section class="wall auto-90"> 
  <h1 class="wall--title">Mon mur</h1>
  <div class="lists">
    <div class="list">
      <h2 class="list--title">Mes tâches</h2>
      <? foreach ($tasks as $task) { ?>
      <div class="task <? if ($task->is_done) { ?>checked<? } ?>">
        <span class="task--checkbox">[<span class="task--status-todo"> </span><span class="task--status-done">x</span>]</span>
        <span class="task--name"><?= $task->title ?></span>
      </div>
      <? } ?>
      <div class="task-add">
        <span class="task-add--plus">[+]</span>
      </div>
    </div>
    <div class="list">
      <h2 class="list--title add">+</h2>
    </div>
  </div>
</section>
<form action="/" method="post">
  <button type="submit" class="save-button">Sauvegarder</button>
</form>