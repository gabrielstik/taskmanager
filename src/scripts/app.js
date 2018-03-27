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