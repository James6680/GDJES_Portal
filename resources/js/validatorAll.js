function checkLength(value, container){
    if(value.length > 100){
      container.textContent = "❌ Maaari lamang maglagay ng 100 na letra";
      return 0;
    }
    return 1;
  }
  
function checkEmptySelect(value, container){
  if(value === "0"){
    container.textContent = "❌ Pumili muna sa mga pagpipilian bago lumipat sa sunod na pahina.";
    return 0;
  }
  return 1;
}

function checkEmptyInput(value, container){
  if(value === "undefined"){
    container.textContent = "❌ Punan muna ang katanungan bago lumipat sa sunod na pahina.";
    return 0;
  }
  return 1;
}

function checkEmptyRadio(value, container){
  if(value.length ===0){
    return 0;
  } 
  return 1;
}