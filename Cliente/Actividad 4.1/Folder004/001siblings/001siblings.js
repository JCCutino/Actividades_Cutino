  // Obtenemos el elemento contenedor
  let container = document.getElementById('container');

  // Verificamos la afirmación "elem.lastChild.nextSibling siempre es null"
  console.log("elem.lastChild.nextSibling:", container.lastChild.nextSibling);

  //El ultimo hijo del elemento no puede tener un nextSibling ya que este es el último, así que siempre será null

  // Verificamos la afirmación "elem.children[0].previousSibling siempre es null"
  console.log("elem.children[0].previousSibling:", container.children[0].previousSibling);

  //Esta afirmación es falsa ya que es el primer hijo del elemento pero siempre puede tener antes un nodo text por ejemplo