document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var gender = document.querySelector('input[name="gender"]:checked');
  var hobbies = document.querySelectorAll('input[name="hobby[]"]:checked');

  if (!name || !email || !gender || hobbies.length === 0) {
    alert("Harap lengkapi semua field!");
    return;
  }

  var hobbyList = [];
  for (var i = 0; i < hobbies.length; i++) {
    hobbyList.push(hobbies[i].value);
  }

  var table = document.getElementById("data");
  var row = table.insertRow();
  var cell1 = row.insertCell();
  var cell2 = row.insertCell();
  var cell3 = row.insertCell();
  var cell4 = row.insertCell();

  cell1.innerHTML = name;
  cell2.innerHTML = email;
  cell3.innerHTML = gender.value;
  cell4.innerHTML = hobbyList.join(", ");

  this.reset();
});
