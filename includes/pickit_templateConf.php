<html> 

<header> 
    

</header>

<body>
<h1> Configuración de Pickit </h1>
<p>  Configuración del módulo de Pickit para Woo Commerce. </p>
<br><hr><br>

<p> <strong> Configuración Global  </strong></p>

<form name="formulario_pickit_conf" method = "post">

    <table  cellspacing="30">
        <tr>
            <th scope="row">Modo de testeo:</th>
            <td> <select name="pickit_conf_modo_testeo">
            <option value="0" selected>Deshabilitado</option>
            <option value="1">Habilitado</option> 
            </select> </td>
        </tr>

        <tr>
            <th scope="row">ApyKey (WebApp):</th>
            <td> <label for="pickit_conf_apykey"> </label>
            <input type="text" name="pickit_conf_apykey"> </td> 
        </tr>

        <tr>
            <th scope="row">Token ID:</th>
            <td> <label for="pickit_conf_tokenId"> </label>
            <input type="text" name="pickit_conf_tokenId"> </td> 
        </tr>

        <tr>
            <th scope="row">URL Web Service:</th>
            <td> <label for="pickit_conf_URLWService"> </label>
            <input type="text" name="pickit_conf_URLWService"> </td> 
        </tr>

        <tr>
            <th scope="row">URL Web Service (Testing):</th>
            <td> <label for="pickit_conf_URLWSTest"> </label>
            <input type="text" name="pickit_conf_URLWSTest"> </td> 
        </tr>

        <tr>
            <th scope="row">Peso del producto en:</th>
            <td> <select name="pickit_conf_pesoProducto">
            <option value="1" selected>Kilogramos</option>
            <option value="2">Gramos</option>
            <option value="3">Libras</option> 
            </select> </td>
        </tr>


        <tr>
            <th scope="row">Dimensiones del producto en:</th>
            <td> <select name="pickit_conf_dimensionProducto">
            <option value="1" selected>Centímetros</option>
            <option value="2">Metros</option>
            </select> </td>
        </tr>

        <tr>
            <th scope="row">Imposición:</th>
            <td> <select name="pickit_conf_imposicion">
            <option value="1" selected>Automática según estado definido.</option>
            <option value="2">Manual al realizar envío.</option>
            </select> </td>
        </tr>

        <tr>
            <th scope="row">Estado Inicial:</th>
            <td> <select name="pickit_conf_estadoInicial">
            <option value="1" selected>En retailer.</option>
            <option value="2">Disponible para retiro.</option>
            </select> </td>
        </tr>

        <tr>
            <th scope="row">Campo DNI:</th>
            <td> <select name="pickit_conf_campoDNI">
            <option value="1" selected>Crear nuevo campo</option>
            <option value="2">Usar campo existente.</option>
            </select> </td>
        </tr>

        <tr>
            <th scope="row">ID del campo DNI de la tienda:</th>
            <td> <label for="pickit_conf_IDCampoDNI"> </label>
            <input type="text" name="pickit_conf_IDCampoDNI"> </td> 
        </tr>
    
    
    </table>

    

</form>

</body>


</html>