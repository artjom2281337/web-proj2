function setActive(active, inactive) {

    // Change iFrame
    let iframe = document.getElementById("entry-container")
    iframe.src = active + ".html"

    if (active == "login") {
        iframe.classList.add("login-height")
        iframe.classList.remove("register-height")
    } else {
        iframe.classList.add("register-height")
        iframe.classList.remove("login-height")
    }

    // Get elements
    active = document.getElementById(active)
    inactive = document.getElementById(inactive)

    // Set classes for active
    active.classList.remove("inactive")
    active.classList.add("active")

    // Set classes for inactive
    inactive.classList.remove("active")
    inactive.classList.add("inactive")
}