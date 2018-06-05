function ClickMe() {
  const table = document.getElementById("students");

  const name = document.getElementById("name").value;
  if (name == ""){
    document.getElementById("name").className = "error";
  }
  else{
    document.getElementById("name").className = "";
  }
  const surname = document.getElementById("surname").value;
  if (surname == ""){
    document.getElementById("surname").className = "error";
  }
  else {
    document.getElementById("surname").className = "";
  }
  const faculty = document.getElementById("faculty").value;
  if (faculty == "-1"){
    document.getElementById("faculty").className = "error";
  }
  else if (name != "" && surname != "" && faculty != "-1"){
    document.getElementById("name").className = "";
    document.getElementById("surname").className = "";
    document.getElementById("faculty").className = "";

    const tr = document.createElement("tr");
    const td1 = document.createElement("td");  td1.innerHTML = name;
    const td2 = document.createElement("td");  td2.innerHTML = surname;
    const td3 = document.createElement("td");  td3.innerHTML = "<strong>" + faculty + "<strong>";

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    table.appendChild(tr);
}
}
document.querySelector("#addStudent").addEventListener('click', ClickMe);