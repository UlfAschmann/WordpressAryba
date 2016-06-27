<?php
if(mail($_POST['email'], 'Mensaje:' . $_POST['cname'], $_POST['comments'])){
    echo "Mensaje enviado";
}
else{
    echo "Error al enviar";
}
