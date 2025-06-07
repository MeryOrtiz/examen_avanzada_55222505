let productos = [];

document.addEventListener("DOMContentLoaded", () => {
  fetch('https://fakestoreapi.com/products')
    .then(response => response.json())
    .then(data => {
      productos = data;
      mostrarProductos(productos);
    })
    .catch(error => {
      console.error("Error al cargar los productos:", error);
    });
});

function mostrarProductos(lista) {
  const contenedor = document.getElementById("productos");
  contenedor.innerHTML = "";

  if (lista.length === 0) {
    contenedor.innerHTML = "<p>No se encontraron productos para esta categoría.</p>";
    return;
  }

  lista.forEach(producto => {
    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <img src="${producto.image}" alt="${producto.title}">
      <h3>${producto.title}</h3>
      <p><strong>Precio:</strong> $${producto.price}</p>
      <p><strong>Categoría:</strong> ${producto.category}</p>
    `;
    contenedor.appendChild(card);
  });
}

function filtrarPorCategoria() {
  const categoria = document.getElementById("categoria").value.toLowerCase().trim();
  const filtrados = productos.filter(p => p.category.toLowerCase().includes(categoria));
  mostrarProductos(filtrados);
}
