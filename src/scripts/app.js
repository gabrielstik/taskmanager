const $checkboxes = document.querySelectorAll('.task--checkbox')
for (const $checkbox of $checkboxes) {
  $checkbox.addEventListener('mousedown', () => {
    $checkbox.parentNode.classList.toggle('checked')
  })
}