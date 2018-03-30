<?

$Db = new Db();
$Manager = new Manager();
$tasks = $Db->get_tasks('gabe');


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
        <form class="task-delete" action="/" method="post">
          <input type="hidden" name="delete-task-id" value="<?= $task->id ?>">
          <button type="submit">[x]</button>
        </form>
      </div>
      <? } ?>
      <form method="post" action="/" class="task-add">
        <button type="submit" class="task-add--plus">[+]</button>
        <input class="task-add--name" name="new-task-name"></input>
      </form>
    </div>
    <div class="list">
      <h2 class="list--title add">+</h2>
    </div>
  </div>
</section>