var light = document.getElementById("light");
light.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        light.name="sunny-outline";
    }
    else{
        light.name="moon-outline";
    }
}
