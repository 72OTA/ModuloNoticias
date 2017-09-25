function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();

    }

    return xmlhttp;
}
function irnoti(id) {
    ajax = objetoAjax();
    window.open("http://localhost/modulonoticias/?view=noticias&id=" + id, "_self");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {

        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id);
}
$('#volver').click(function () {
    window.location.assign("/modulonoticias");

})
function pagina() {
    window.location.assign("/modulonoticias");
}
var notificar = function(){
    for(var x=0;x<30;x++){
document.getElementById("boton1").style.fontSize = x+"px";
document.getElementById("boton1").style.boxShadow = "0 5px 5px 0 rgba(0,0,0,0.24),0 17px 20px 0 rgba(0,0,0,0.19)";
        
        }
    return x;
}
var volver = function(){
    for(var y=30;y>14;y--){
document.getElementById("boton1").style.fontSize = y+"px";
document.getElementById("boton1").style.boxShadow = "none";
        
        }
    return y;
}
$(".dropdown-toggle" ).click(function(){
    $(this).parent() //  seria el <li class="nav-item dropdown mr-auto">
    .find("ul.dropdown-menu") // buscamos el sub-menu
     .toggle(350); // le aplicamos el toggle
});
function cargarbusqueda(){
var dato = $('#buscar').val();
    window.open("http://localhost/modulonoticias/?view=BUSQUEDA&datos="+dato, "_self");
    };
function vernoticia(mes,ano){
    

    ajax = objetoAjax();
    ajax.open("GET", "/modulonoticias/vista/overall/listarnoticias.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            
    }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("mes="+mes+"&ano="+ano);
    window.location.assign("/modulonoticias/?view=LISTARPORFECHA&mes="+mes+"&ano="+ano,"_self");
   
}
function actualizarhora(){
    $('#tiempo').load('/modulonoticias/vista/overall/reloj.php');
    setInterval('actualizarhora()',1000);
}