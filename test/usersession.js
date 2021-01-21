var array = localStorage.getItem('admin');
var record = JSON.parse(array);
document.getElementById('name').textContent = record[0];