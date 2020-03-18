var locat = window.location.pathname;
var filename = locat.substring(locat.lastIndexOf('/')+1)
// alert(filename)
if(filename == "homePlana.php"){
    var div = document.getElementById("homeA")
    div.className = 'ativado'
}
if(filename == "calendarioPlana.php"){
    var div = document.getElementById("calendarioA")
    div.className = 'ativado'
}
if(filename == "atividadesPlana.php"){
    var div = document.getElementById("atividadeA")
    div.className = 'ativado'
}
if(filename == "contaPlana.php"){
    var div = document.getElementById("contaA")
    div.className = 'ativado'
}