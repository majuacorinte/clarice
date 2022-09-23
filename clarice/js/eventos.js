function caracteres(){
  if(document.getElementById('mensagem').value.length < 101)
    document.getElementById('contador').innerHTML = 100 - document.getElementById('mensagem').value.length;
  if(document.getElementById('mensagem').value.length==100)
    alert("Atingiu o valor máximo de caracteres.");      
}












