function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("from_"+checkbox.id).removeAttribute("disabled");
        document.getElementById("to_"+checkbox.id).removeAttribute("disabled");
    }else{
        document.getElementById("from_"+checkbox.id).setAttribute("disabled", "disabled");
        document.getElementById("to_"+checkbox.id).setAttribute("disabled", "disabled");
    }
}

function handleChange2(checkbox) {
    if(checkbox.checked == false){
        document.getElementById("to_"+checkbox.id).removeAttribute("disabled");
    }else{
        document.getElementById("to_"+checkbox.id).setAttribute("disabled", "disabled");

    }
}

function handleChange3(checkbox) {
    if(checkbox.checked !== false){
        document.getElementById("to_"+checkbox.id).classList.add("hidden-desktop", "hidden-large-desktop", "hidden-tablet", "hidden-mobile");
    }else{
        document.getElementById("to_"+checkbox.id).classList.remove("hidden-desktop", "hidden-large-desktop", "hidden-tablet", "hidden-mobile");

    }
}

