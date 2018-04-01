<?

$Db = new Db();
$Manager = new Manager();
$walls = $Db->get_walls('gabe');

?>
<section class="wall auto-90"> 
  <h1 class="wall--title">Mon mur</h1>
  <div class="lists">
    <? foreach ($walls as $wall) { $tasks = $Db->get_tasks($wall->wall) ?>
    <div class="list">
      <h2 class="list--title"><?= $wall->wall ?></h2>
      <? foreach ($tasks as $task) { ?>
      <div class="task <? if ($task->is_done) { ?>checked<? } ?>">
        <form class="task-check" action="/" method="post">
          <input type="hidden" name="check-is-done" value="<?= $task->is_done ?>">
          <input type="hidden" name="check-task-id" value="<?= $task->id ?>">
          <button type="submit" class="task--checkbox">[<span class="task--status-todo"> </span><span class="task--status-done">x</span>]</button>
        </form>
        <span class="task--name"><?= $task->title ?></span>
        <form class="task-delete" action="/" method="post">
          <input type="hidden" name="delete-task-id" value="<?= $task->id ?>">
          <button type="submit">[x]</button>
        </form>
      </div>
      <? } ?>
      <form method="post" action="/" class="task-add">
        <input type="hidden" name="new-task-related-wall" value="<?= $wall->wall ?>"></input>
        <button type="submit" class="task-add--plus">[+]</button>
        <input type="text" class="task-add--name" name="new-task-name"></input>
      </form>
    </div>
    <? } ?>
    <div class="list">
      <h2 class="list--title add">+</h2>
    </div>
  </div>
</section>