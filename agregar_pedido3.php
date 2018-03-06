<?php
$mysqli = new mysqli("localhost:3306", "root","", "test");
$try="hola";
/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "call agregar_pedido('peda')";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
   // while ($row = $result->fetch_assoc()) {
     //   printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
   // }

    /* free result set */
//    $result->free();
}

/* close connection */
$mysqli->close();
?>


DELIMITER $$

USE `restupdated`$$

DROP PROCEDURE IF EXISTS `sp_crear_usuario`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_crear_usuario`(IN ced CHAR(15),IN nom VARCHAR(30),IN ape VARCHAR(30),IN tel CHAR(12), IN email VARCHAR(30), IN users VARCHAR(20), IN pass VARCHAR(88),IN rol TINYINT(2))
BEGIN
	INSERT INTO `usuario_datos` (`cedula`, `nombre`, `apellido`, `telefono`, `correo`) VALUES (ced, nom, ape, tel, email);
	INSERT INTO `usuario` (`cedula`, `usuario`, `clave`, `id_roles`, `inactivo`) VALUES (ced, users, pass, rol, 0) ;
    END$$

DELIMITER ;