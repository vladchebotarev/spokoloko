function handleChange(checkbox) {
  if (checkbox.checked == true) {
    $(`#from_${checkbox.id}`).attr("disabled", false);
    $(`#to_${checkbox.id}`).attr("disabled", false);
  } else {
    $(`#from_${checkbox.id}`).attr("disabled", true);
    $(`#to_${checkbox.id}`).attr("disabled", true);
  }
}

function handleChange2(checkbox) {
  if (checkbox.checked == false) {
    $(`#to_${checkbox.id}`).attr("disabled", false);
  } else {
    $(`#to_${checkbox.id}`).attr("disabled", true);
    
  }
}

function handleChange3(checkbox) {
    if(checkbox.checked == false){
        document.getElementById("to_"+checkbox.id).classList.add("hidden-desktop", "hidden-large-desktop", "hidden-tablet", "hidden-mobile");
    }else{
        document.getElementById("to_"+checkbox.id).classList.remove("hidden-desktop", "hidden-large-desktop", "hidden-tablet", "hidden-mobile"));

    }
}

