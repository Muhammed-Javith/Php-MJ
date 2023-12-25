<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    $q = intval($_GET['q']);
    // Database connection parameters
    $servername = "localhost";
    $username = "useradmin";
    $password = "admin123";
    $dbname = "myfactory";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$stmt = $conn->query("SELECT * FROM employeed WHERE ename = '".$q."'");
        // Your SQL query with placeholders
        $sql = "SELECT * FROM employeed WHERE  eid = :value";
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        // Bind parameters if needed (replace :value with the actual value)
        $stmt->bindParam(':value', $q, PDO::PARAM_INT);
        // Execute the statement
        $stmt->execute();
        // Fetch the results as an associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>
            <tr>
            <th>Employee id</th>
            <th>Employee name</th>
            <th>Employee Designation</th>
            <th>Employe eage</th>
            <th>Employee department</th>
            </tr>";
        foreach ($result as $row) {
                echo "<tr>
               <td>{$row['eid']}</td>
                <td>{$row['ename']}</td>
                <td>{$row['edesig']}</td>
                <td>{$row['eage']}</td>
               <td>{$row['edept']}</td>
                </tr>";
           }
            echo "</table>";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } finally {
        $conn = null;
    }
    ?>
</body>

</html>