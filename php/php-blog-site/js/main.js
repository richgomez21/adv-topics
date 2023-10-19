window.addEventListener("load", function(){
			
    const menu = document.querySelector("#menu");
    const menuButton = document.querySelector("#menu-button");

    menuButton.addEventListener("click", () => {
        // toggle the 'open' class on the menu
        if(menu.classList.contains("open")){
            menu.classList.remove("open");
        }else{
            menu.classList.add("open");
        }
    });

});