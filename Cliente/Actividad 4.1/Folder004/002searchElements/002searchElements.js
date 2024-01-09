  // Encontramos y mostamos la tabla con id="age-table"
  let ageTable = document.getElementById('age-table');
  console.log("Tabla con id='age-table':", ageTable);

  // Encontramos y mostamos todos los elementos label dentro de la tabla
  let labelsTable = ageTable.querySelectorAll('label');
  console.log("Elementos label dentro de la tabla:", labelsTable);

  // Encontramos y mostamos el primer td en la tabla con la palabra "age"
  let primerAge = ageTable.getElementsByTagName('td')[0]
  console.log("Primer td en la tabla con la palabra 'age':", primerAge);

  // Encontramos y mostamos el form con name="search"
  let searchForm = document.forms['search'];
  console.log("Formulario con name='search':", searchForm);

  // Encontramos y mostamos el primer input en ese formulario
  let primerInputForm = searchForm.querySelector('input');
  console.log("Primer input en el formulario de búsqueda:", primerInputForm);

  // Encontramos y mostamos el último input en ese formulario
  let inputsForm = searchForm.querySelectorAll('input');
  let ultimoInputForm = inputsForm[inputsForm.length - 1];
  console.log("Último input en el formulario de búsqueda:", ultimoInputForm);

  