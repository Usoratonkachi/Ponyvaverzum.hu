var navWrap = document.getElementById("primary_nav_wrap");
var navItems = navWrap.querySelectorAll("#menu1 > li");

navItems.forEach(function(navItem) {
    navItem.addEventListener("mouseenter", function() {
        var subMenu = this.querySelector("ul");
        if (subMenu) {
            subMenu.style.display = "block";
        }
    });

    navItem.addEventListener("mouseleave", function() {
        var subMenu = this.querySelector("ul");
        if (subMenu) {
            subMenu.style.display = "none";
        }
    });
});
window.onload = function() {
    var h1Height = document.getElementById("focim").offsetHeight;
    var divPaddingBottom = h1Height + 10px;
    document.getElementById("content").style.paddingBottom = divPaddingBottom + "px";
};