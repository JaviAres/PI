function recogeDatos(elemento){
    document.cookie="id = "+elemento.getAttribute("id")+" expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie="producto = "+elemento.getAttribute("name")+ " expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie="id = "+elemento.getAttribute("id")+" ;path=/;";
    document.cookie="producto = "+elemento.getAttribute("name")+ " ;path=/;";
}