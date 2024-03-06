// Массив с информацией о продуктах (заголовок, описание, SVG)
const products = [
    {
        title: "Single Kayak",
        description: "Perfect for solo adventures on the water.",
        svg: "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='100' height='100'><path fill='orange' d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z'/></svg>"
    },
    {
        title: "Tandem Kayak",
        description: "Enjoy paddling with a partner in our tandem kayak.",
        svg: "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='100' height='100'><path fill='orange' d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z'/></svg>"
    },
    {
        title: "Paddleboard",
        description: "Try stand-up paddling with our versatile paddleboard.",
        svg: "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='100' height='100'><path fill='orange' d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8z'/></svg>"
    }
];

// Функция для создания карточек продуктов
function createProductCards() {
    const productsSection = document.getElementById("products");
    const container = productsSection.querySelector(".container");

    products.forEach(product => {
        const card = document.createElement("div");
        card.classList.add("product-card");

        card.innerHTML = product.svg;

        const title = document.createElement("h3");
        title.textContent = product.title;
        card.appendChild(title);

        const description = document.createElement("p");
        description.textContent = product.description;
        card.appendChild(description);

        container.appendChild(card);
    });
}

// Вызываем функцию для создания карточек продуктов при загрузке страницы
window.onload = function() {
    createProductCards();
};
