<!DOCTYPE html>
<html>
  <head>
    <title>Nombre de la aplicación de mensajería</title>
    <style>
nav {
    background-color: #333;
    height: 50px;
}
nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative;
}
nav ul li {
    display: inline-block;
    background-color: #333;
    position: relative;
    z-index: 1;
}
nav a {
    display: block;
    padding: 0 10px;
    color: #fff;
    font-size: 16px;
    line-height: 50px;
    text-decoration: none;
    font-weight: bold;
}
nav ul ul {
    display: none;
    position: absolute;
    top: 50px;
    z-index: 2;
}
nav ul li:hover > ul {
    display:inherit;
}
nav ul ul li {
    width: 200px;
    float: none;
    display: list-item;
    position: relative;
}
nav ul ul ul li {
    position: relative;
    top:-60px;
    left:200px;
}
/* Estilos para el menú desplegable */
.menu {
    position: relative;
    display: inline-block;
}
.menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    display: none;
}
.menu ul li {
    display: block;
    padding: 10px;
    text-align: left;
}
.menu ul li:hover {
    background-color: #f6f6f6;
}
.menu:hover ul {
    display: block;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f6f6f6;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    border-radius: 5px;
    margin-top: 50px;
}
h1 {
    font-size: 36px;
    color: #333;
    margin-top: 0;
}
p {
    font-size: 18px;
    line-height: 1.5;
    color: #666;
    margin: 20px 0;
}
a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}
a:hover {
    text-decoration: underline;
}

.contenido {
    width: 80%;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


.campo {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.campo label {
    font-weight: bold;
    margin-bottom: 5px;
}

.campo input[type="text"],
.campo input[type="email"],
.campo input[type="password"],
.campo select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.boton-guardar {
    background-color: #009688;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    margin-right: 10px;
    cursor: pointer;
}

.boton-cancelar {
    background-color: #ccc;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.boton-guardar:hover,
.boton-cancelar:hover {
    opacity: 0.8;
}

.botones {
    display: flex;
    justify-content: flex-end;
}

/* Estilos para el menú desplegable */
.menu {
    position: relative;
    display: inline-block;
}
.menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    display: none;
}
.menu ul li {
    display: block;
    padding: 10px;
    text-align: left;
}
.menu ul li:hover {
    background-color: #f6f6f6;
}
.menu:hover ul {
    display: block;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f6f6f6;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    border-radius: 5px;
    margin-top: 50px;
}
h1 {
    font-size: 36px;
    color: #333;
    margin-top: 0;
}
p {
    font-size: 18px;
    line-height: 1.5;
    color: #666;
    margin: 20px 0;
}
a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}
a:hover {
    text-decoration: underline;
}
.profile-container {
    background-color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    border-radius: 5px;
    padding: 20px;
    margin-top: 50px;
}
.profile-picture {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    margin-bottom: 20px;
    background-image: url('profile-picture.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.profile-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}
.profile-info h2 {
    font-size: 24px;
    color: #333;
    margin-top: 0;
}
.profile-info p {
    font-size: 18px;
    color: #666;
    margin: 0;
}
.profile-info .edit-profile-link {
    font-size: 16px;
    color: #999;
    margin-top: 10px;
}
.profile-info .edit-profile-link:hover {
    color: #333;
    text-decoration: underline;
}
.profile-stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #ccc;
    padding-top: 20px;
}
.profile-stats .stat {
    flex: 1;
    text-align: center;
    color: #666;
    font-size: 16px;
    line-height: 1.5;
}
.profile-stats .stat strong {
    color: #333;
    font-weight: bold;
    font-size: 20px;
    display: block;
    margin-bottom: 5px;
}
a:hover {
    text-decoration: underline;
}

.messages-container {
    background-color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
    border-radius: 5px;
    padding: 20px;
    margin-top: 50px;
}
.message {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
}
.message p {
    margin: 0;
}
.message .meta {
    font-size: 12px;
    color: #999;
    margin-bottom: 5px;
}
.message .body {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}
.message .body.unread {
    font-weight: bold;
}
</style>
  </head>
  <body>
  