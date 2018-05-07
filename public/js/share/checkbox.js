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

