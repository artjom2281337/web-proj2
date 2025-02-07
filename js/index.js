// Products
const products = document.getElementsByClassName("carousel-item");
const products2 = document.getElementsByClassName("carousel-item-2");
const len = products.length;
const len2 = products2.length;

// Classes
const left = "active-left";
const active = "active";
const right = "active-right";

// Index
let index = 0;

// Default
products[index].classList.add(left)
products[index + 1].classList.add(active)
products[index + 2].classList.add(right)

products2[index].classList.add(left)
products2[index + 1].classList.add(active)
products2[index + 2].classList.add(right)

setInterval(() => {
    
    // Remove old classes
    setTimeout(() => products[(index - 1) % len].classList.remove(left), 1000)
    setTimeout(() => products2[(index - 1) % len2].classList.remove(left), 1000)
    products[(index + 1) % len].classList.remove(active)
    products2[(index + 1) % len2].classList.remove(active)
    products[(index + 2) % len].classList.remove(right)
    products2[(index + 2) % len2].classList.remove(right)

    // Update
    index++

    // Add new classed
    products[index % len].classList.add(left)
    products2[index % len2].classList.add(left)
    products[(index + 1) % len].classList.add(active)
    products2[(index + 1) % len2].classList.add(active)
    products[(index + 2) % len].classList.add(right)
    products2[(index + 2) % len2].classList.add(right)
}, 2500)