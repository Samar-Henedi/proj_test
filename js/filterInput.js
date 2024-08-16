function filterInput (event) {
  var inputValue = event.target.value
  event.target.value = inputValue.replace(/\D/g, '')
}
function filterInput1 (event) {
  var inputValue = event.target.value
  event.target.value = inputValue.replace(/[^0-9.]/g, '')
}
function filterInputAr (event) {
  var inputValue = event.target.value
  inputValue = inputValue.replace(/[^ء-ي ]/g, '')
  inputValue = inputValue.replace(/^\s+|\s+\s+/g, ' ')
  event.target.value = inputValue
}
function filterInputArUnderscore (event) {
  var inputValue = event.target.value
  event.target.value = inputValue.replace(/[^ء-ي- ]/g, '')
}

function filterEnNumUnderscore (event) {
  var inputValue = event.target.value
  event.target.value = inputValue.replace(/[^0-9A-Za-z_]/g, '')
}
