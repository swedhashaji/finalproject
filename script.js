const name = document.getElementById('name')
const place = document.getElementById('place')
const church = document.getElementById('church')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }
  if (place.value === '' || place.value == null) {
    messages.push('Place is required')
  }
  if (church.value === '' || church.value == null) {
    messages.push('Church is required')
  }
  
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})