function favoriteItemClick(button) {
    
    // Item ID
    let itemID = button.children[1].value

    // Is item favorited already?
    let img = button.children[0]
    let clicked = img.src.endsWith("img/full_heart.png")

    if (clicked) { // Unfavorite
        img.src = "img/heart.png"
    } else { // Favorite
        img.src = "img/full_heart.png"
    }

}

function favoriteItem() {

    // Get all the buttons
    buttons = document.getElementsByClassName("favorite-button")

    // Add click listeners
    for (let button of buttons) {
        button.addEventListener("click", () => favoriteItemClick(button))
    }

}