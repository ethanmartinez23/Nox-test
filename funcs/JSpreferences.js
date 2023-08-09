const cities = [
    "Cold",
    "Hot",
    "Latte",
    "Caff",
    "Decaf",
    "Iced",
    "Sweet",
    "Strong",
    "Frappes",
    "Rice Combos",
    "Japanese",
    "Pastas",
    "Sandwiches",
    "Alchoholic",
    "Budget-Friendly",
  ];
  
  function generateListItems(arg) {
    let items = "";
    for(let i = 0; i < arg.length; i++) {
      items += `<input type="checkbox" name="foo"> ${arg[i]}<br/>`;
    }
    return items;
  }
  
  document.querySelector("main").innerHTML = `
  <ul>
  ${generateListItems(cities)}
  </ul>
  `;

function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}