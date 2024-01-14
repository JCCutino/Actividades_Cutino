/*
Por qué en el código de abajo return false no funciona?
&lt;script&gt;
function handler() {
alert( &quot;...&quot; );
return false;
}
&lt;/script&gt;
&lt;a href=&quot;https://w3.org&quot; onclick=&quot;handler()&quot;&gt;el navegador irá a w3.org&lt;/a&gt;
*/

/*El codigo no funciona porque aunque la alerta se ejecuta correctamente nos
sigue mandando a la pagina porque es el evento por defecto que tiene.

Para corregirlo deberiamos evitar que ese evento ocurra*/