function validaForm() {
  var inputTarefa = document.forms["form"]["txttarefa"].value;
  var inputData = document.forms["form"]["txtdata"].value;
  if(inputTarefa == "") {
    alert("Nome da tarefa precisa ser preenchido");
    return false;
  } else if(inputData == ""){
    alert("Data da tarefa precisa ser preenchido");
    return false;
  }
}

