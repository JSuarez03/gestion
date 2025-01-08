<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $put = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        $put = json_encode($put);
        echo ($put);
        return $put;
    }
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        var_dump($_SERVER['REQUEST_METHOD']);
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Hola </title>
    </head>
    <body>
        <button id='put'>Cambiar</button>
        <button  id='delete'>Eliminar</button>
        <script>
            const put = document.getElementById('put');
            const dele = document.getElementById('delete');
            put.addEventListener('click',async ()=>{
                let hola = await fetch('/gestion/prueba',{
                    method:"PUT"
                })
                hola = await hola.json()
                console.log(hola)
                window.location.href = '/gestion/prueba'
            });
            dele.addEventListener('click',()=>{
                fetch('/prueba',{
                    method:"DELETE"
                })
            })
        </script>
    </body>
</html>


