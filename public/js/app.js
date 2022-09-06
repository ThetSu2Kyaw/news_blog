document.getElementById('burger').onclick = function(){
    let mobile_menu = document.getElementById('mobile_menu');
    if(mobile_menu.style.display === "block"){
        // mobile_menu.style.opacity = "0";
        mobile_menu.style.display = "none";
    }else{
        // mobile_menu.style.opacity = "1";
        mobile_menu.style.display = "block";
    }
}