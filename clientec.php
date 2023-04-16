<!DOCTYPE html>
<html>
<head>
    <title>Cliente de API REST</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Tabla de Datos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Salario</th>
        </tr>
        <?php
        // Colocar la URL de la Api
        $url = 'https://api.example.com/data'; // No se cual es la URL :(

        // Realizar petición
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        // Decodificar la respuesta 
        $data = json_decode($response, true);

        // Mostrar los datos
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellidos'] . "</td>"; //Modificar datos $data y $row si es necesario
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['salario'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
//Mensaje de Prueba
