const searchcourse = () =>{
    let searchbox = document.getElementById("search").value.toUpperCase();
    let course = document.getElementsByClassName("course");
    let h2 = document.getElementsByTagName("h2");
    for(var i=0; i<h2.length; i++){
        let a = h2[i].getElementsByTagName("h2")[0];
        let textValue = a.innerText;
        if(textValue.toUpperCase().indexOf(searchbox) > -1){
            course[i].style.display = '';
        }
        else{
            course[i].style.display = 'none';
        }
    }
}