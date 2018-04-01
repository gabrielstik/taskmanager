const $checkboxes = document.querySelectorAll('.task--checkbox')
for (const $checkbox of $checkboxes) {
  $checkbox.addEventListener('mousedown', () => {
    $checkbox.parentNode.classList.toggle('checked')
  })
}

if (document.querySelector('.js-account')) {
  const $account = document.querySelector('.js-account')

  if (document.querySelector('.connection-form')) {
    const $connection = document.querySelector('.connection-form')

    $account.addEventListener('mousedown', () => {
      $connection.classList.toggle('active')
    })

    const $quit = $connection.querySelector('.connection-form--quit')
    $quit.addEventListener('mousedown', () => {
      $connection.classList.remove('active')
    })
    window.addEventListener('keydown', (e) => {
      if (e.keyCode == 27) $connection.classList.remove('active')
    })
  }
}


const $taskNames = document.querySelectorAll('.task--name')
for (const $taskName of $taskNames) {
  $taskName.addEventListener('mousedown', () => {
    $taskName.parentNode.querySelector('.task-infos').classList.add('active')
  })
}

const $tasksQuits = document.querySelectorAll('.task-infos--quit')
for (const $tasksQuit of $tasksQuits) {
  $tasksQuit.addEventListener('mousedown', () => {
    $tasksQuit.parentNode.classList.remove('active')
  })
}

const $priorities = document.querySelectorAll('.task-infos--priority div')
for (const $priority of $priorities) {
  $priority.addEventListener('mousedown', () => {
    for (const $priority of $priorities) {
      $priority.classList.remove('active')
    }
    $priority.classList.add('active')
    $priority.parentNode.querySelector('input').value = $priority.dataset.priority
  })
}