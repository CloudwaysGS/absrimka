let myList = [{ name: "Banane", checked: 0 }];

const btnAdd = document.querySelector("#addNew");
const output = document.querySelector(".output");
const newItem = document.querySelector("#addItem");

function build() {
  output.innerHTML = "<h1>My list</h1>";
    //Creation du tableau
  const tbl = document.createElement("table");
  for (let i = 0; i < myList.length; i++) {
    //Creation d'un tr
    const row = document.createElement("tr");
    const cell1 = document.createElement("td");
    cell1.innerHTML = myList[i].name;
    if (myList[i].checked == 1) {
      cell1.innerHTML = `<strike>${myList[i].name}</strike>`;
    }
// Ajouter even click
    cell1.addEventListener('click',function(){
      myList[i].checked = !myList[i].checked;
      this.innerHTML = myList[i].name;
      build();
    });
// ajouter la cell1 dans le tr
    row.appendChild(cell1);
  }

  const cell2 =
}

btnAdd.addEventListener("click", function () {
  if (newItem.value) {
    myList.push({ name: newItem.value, checked: 0 });
    //vider le champ
    newItem.value = "";
    //console.log(myList);
    build();
  }
});

Window.onload = build;
