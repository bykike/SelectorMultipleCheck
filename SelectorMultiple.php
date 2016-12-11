<html>
<head>
<script language="JavaScript">

</script>
</head>
<body>
    
<?php
// array con datos como ejemplo: los datos se toman de una tabla de base de datos
$data = array(1=>'Pedro', 2=>'José', 4=>'Leonardo',5=>'Juana',6=>'Valeria');

// Muestra el dato seleccionado
if(isset($_POST['Bok'])){
    // usuario[] es un vector HTML
    foreach($_POST['usuario'] as $id){
        // Busca el valor: esto debe ser reemplazado por una query
        $valor = $data[$id];
        print("Se seleccionó el usaurio $valor ($id)<br />");
    }
}

// Muestra los datos en un formulario
?>
<hr />
<form action="" method="post" id="ff">
<?php
    foreach($data as $k => $v){
?>
    <label> <!-- el label es para que tome click sobre la palabra, además de sobre el control -->
        <input type="checkbox" name="usuario[]" value="<?=$k?>" /> <?=$v?> <br />
    </label>
<?php   
    } // foreach
?>
    <input type="submit" value="Enviar" name="Bok" />
</form>
    
</body>
</html>