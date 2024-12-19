<?php
    $conn = new mysqli("mysql", "user", "password", "testdb");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, password FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Password: " . $row["password"];
        }
    }else{
        echo "0 resultados";
    }

    $conn->close();
    ?>