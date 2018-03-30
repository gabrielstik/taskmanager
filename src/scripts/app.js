const $checkboxes = document.querySelectorAll('.task--checkbox')
for (const $checkbox of $checkboxes) {
  $checkbox.addEventListener('mousedown', () => {
    $checkbox.parentNode.classList.toggle('checked')
  })
}


const $account = document.querySelector('.js-account')
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