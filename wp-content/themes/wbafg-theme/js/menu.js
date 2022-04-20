
function closeMenu() {
    document.getElementById("header-container-opened").style.display = "none";
    document.getElementById("header-container-closed").style.display = "block";
}

function openMenu() {
    document.getElementById("header-container-closed").style.display = "none";
    document.getElementById("header-container-opened").style.display = "flex";
}

