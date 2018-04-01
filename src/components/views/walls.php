<section class="wall auto-90"> 
  <h1 class="wall--title">Mon mur</h1>
  <div class="lists">
    <? foreach ($walls as $wall) { $tasks = $Db->get_tasks($wall->id) ?>
    <div class="list">
      <h2 class="list--title">
        <?= $wall->wall ?>
        <form class="wall-delete" action="/" method="post">
          <input type="hidden" name="delete-wall-id" value="<?= $wall->id ?>">
          <button type="submit">[x]</button>
        </form>
      </h2>
      <? foreach ($tasks as $task) { ?>
      <div class="task <? if ($task->is_done) { ?>checked<? } ?> active">
        <form class="task-check" action="/" method="post">
          <input type="hidden" name="check-is-done" value="<?= $task->is_done ?>">
          <input type="hidden" name="check-task-id" value="<?= $task->id ?>">
          <button type="submit" class="task--checkbox">[<span class="task--status-todo"> </span><span class="task--status-done">x</span>]</button>
        </form>
        <span class="task--name <? if ($task->deadline - time() < 0) { ?>dead<? } ?>">
          <?= $task->title ?>
          <?
          if ($task->priority == 1) echo '<span class="task--priority">!</span>'; 
          if ($task->priority == 2) echo '<span class="task--priority">!!</span>'; 
          if ($task->priority == 3) echo '<span class="task--priority">!!!</span>'; 
          ?>
        </span>
        <form class="task-delete" action="/" method="post">
          <input type="hidden" name="delete-task-id" value="<?= $task->id ?>">
          <button type="submit">[x]</button>
        </form>
        <form class="task-infos" action="/" method="post">
          <h3 class="task-infos--name"><?= $task->title ?></h3>
          <input type="hidden" name="infos-id" value="<?= $task->id ?>">
          <div class="flex between">
            <div class="task-infos--deadline">
              <input type="date" name="infos-date" value="<?= date('Y-m-d', $task->deadline) ?>">
              <input type="time" name="infos-time" value="<?= date('H:i', $task->deadline) ?>">
            </div>
            <div class="task-infos--priority flex">
              <div data-priority="0" <? if ($task->priority == 0) { ?>class="active"<? } ?>>0</div>
              <div data-priority="1" <? if ($task->priority == 1) { ?>class="active"<? } ?>>!</div>
              <div data-priority="2" <? if ($task->priority == 2) { ?>class="active"<? } ?>>!!</div>
              <div data-priority="3" <? if ($task->priority == 3) { ?>class="active"<? } ?>>!!!</div>
              <input type="hidden" name="infos-priority" value="<?= $task->priority ?>">
            </div>
          </div>
          <button class="task-infos--save" type="submit">Enregistrer</button>
          <div class="task-infos--quit">x</div>
        </form>
      </div>
      <? } ?>
      <form method="post" action="/" class="task-add">
        <input type="hidden" name="new-task-related-wall" value="<?= $wall->id ?>"></input>
        <button type="submit" class="task-add--plus">[+]</button>
        <input type="text" class="task-add--name" name="new-task-name"></input>
      </form>
    </div>
    <? } ?>
    <div class="list">
      <h2 class="list--title add">
        <form method="post" action="/" class="wall-add">
          <input type="text" name="new-wall-name"></input>
          <button type="submit" class="wall-add--plus">[+]</button>
        </form>
      </h2>
    </div>
  </div>
</section>