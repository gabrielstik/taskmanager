const $tasks = document.querySelectorAll('.task')
for (const $task of $tasks) {
  $task.addEventListener('mousedown', () => {
    $task.classList.toggle('checked')
  })
}