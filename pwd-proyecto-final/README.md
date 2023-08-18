<a name="readme-top"></a>

<br />
<div align="center">
    <img src="./Vista/img/logo.png" alt="Logo" width="80" height="80">

  <h3 align="center">Trabajo Práctico Final</h3>

  <p align="center">
    Programación Web Dinámica
    <br />
  </p>
</div>

Participantes
Jerónimo Agustín Rojo
Correo electrónico: jeronimo.rojo.99@gmail.com
Objetivos
El objetivo de este trabajo es aplicar los conceptos aprendidos en la materia. Se busca desarrollar una tienda en línea con dos vistas: pública y privada.

Vista Pública:
En esta vista, los usuarios pueden acceder a información sobre la tienda, como dirección, medios de contacto, descripción y otros detalles relevantes. También es posible acceder a la vista privada mediante autenticación con credenciales válidas.

Vista Privada:
Una vez autenticados, los usuarios pueden acceder a diferentes operaciones según su rol. Los roles iniciales son cliente, depósito y administrador.

Herramientas Utilizadas
Bootstrap
JQuery
Pautas Básicas
La aplicación se desarrollará siguiendo la arquitectura MVC (Modelo-Vista-Controlador) utilizando PHP como lenguaje de programación. Se sugiere utilizar una estructura de directorio similar a la ilustrada en la Figura 2.

Se utilizará la base de datos "bdcarritocompras" proporcionada por la cátedra. Se aplicará el Mapeo Objeto-Relacional (MOR) a las tablas del modelo de base de datos de la Figura 1. Se verificará la estructura de las tablas y se realizarán modificaciones según sea necesario.

La aplicación tendrá páginas públicas y restringidas, accesibles solo mediante autenticación. Se utilizará el módulo de autenticación implementado en el Trabajo Práctico 5. Se definirán al menos tres roles: cliente, depósito y administrador.

El menú de la aplicación será dinámico y administrado por el administrador. Las tablas "menu" y "menurol" en la base de datos contendrán esta información.

Los usuarios con múltiples roles podrán cambiar de rol según su preferencia.

Funcionalidades del usuario con rol Cliente:

Modificar los datos de su cuenta, como correo y contraseña.
Realizar compras de productos con stock suficiente.
Funcionalidades del usuario con rol Depósito:

Crear y gestionar productos.
Cambiar el estado de los productos mediante procedimientos.
Modificar el stock de productos.
Funcionalidades del usuario con rol Administrador:

Crear nuevos usuarios y asignar roles.
Gestionar roles y elementos del menú.
Lista de Usuarios

Usuario: admin
Contraseña: admin
Roles: Administrador, Depósito, Cliente

<p align="right">(<a href="#readme-top">ir al inicio</a>)</p>

