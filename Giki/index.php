<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<h1>Ghulam Ishaq Khan Institute of Engineering Sciences and Technology, Sawabi</h1>

<h2>Students Applied for Admission</h2>


<table>
    <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Major</th>
        <th>Matric</th>
        <th>FSc</th>
        <th>Departments</th>
    </tr>


    <?php
    include('../connect.php');

    $sql = "SELECT * FROM giki";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i=1;
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr> ";
            echo "<td>". $i."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['fname']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "<td>". $row['phone']."</td>";
            echo "<td>". $row['major']."</td>";
            echo "<td>". $row['mmarks']."</td>";
            echo "<td>". $row['fmarks']."</td>";
            echo "<td>". $row['departments']."</td>";
            echo "</tr>";
            $i++;
        }
    } else {
        echo "0 Student Applied So Far";
    }

    ?>
</table>

</body>
</html>