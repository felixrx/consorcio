


<SCRIPT LANGUAGE="JavaScript">
nextfield = "campo1";
netscape = "";
ver = navigator.appVersion; len = ver.length;
for(iln = 0; iln < len; iln++) if (ver.charAt(iln) == "(") break;
    netscape = (ver.charAt(iln+1).toUpperCase() != "C");
function keyDown(DnEvents) {
        k = (netscape) ? DnEvents.which : window.event.keyCode;
        if (k == 13) {
        if (nextfield == 'done') {
            alert("Fin de ejemplo");
            return false;
        } else {
            eval('document.form1.' + nextfield + '.focus()');
            return false;
        }
    }
}
document.onkeydown = keyDown;
if (netscape) document.captureEvents(Event.KEYDOWN|Event.KEYUP);
</script>


























function validar(e) {
    
    
    
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==44) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==48) return true;
    if (tecla==49) return true;
    if (tecla==50) return true;
    if (tecla==51) return true;
    if (tecla==52) return true;
    if (tecla==53) return true;
    if (tecla==54) return true;
    if (tecla==55) return true;
    if (tecla==56) return true;
    if (tecla==13) return true;

   
    patron = /1/; //ver nota
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
</script>

<script type="text/javascript">
function validarM(e) {
    
    
    
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==97) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==98) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==99) return true;
    if (tecla==100) return true;
    if (tecla==101) return true;
    if (tecla==102) return true;
    if (tecla==103) return true;
    if (tecla==104) return true;
    if (tecla==105) return true;
    if (tecla==106) return true;
    if (tecla==107) return true;
    if (tecla==108) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==109) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==110) return true;
    if (tecla==111) return true;
    if (tecla==112) return true;
    if (tecla==113) return true;
    if (tecla==114) return true;
    if (tecla==115) return true;
    if (tecla==116) return true;
    if (tecla==117) return true;
    if (tecla==118) return true;
    if (tecla==119) return true;
    if (tecla==120) return true;
    if (tecla==121) return true;
    if (tecla==122) return true;
    if (tecla==32) return true;
    if (tecla==49) return false;
     if (tecla==13) return true;


    patron = /1/; //ver nota
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
