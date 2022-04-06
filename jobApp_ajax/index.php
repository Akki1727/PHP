<?php
include "config.php";
?>
<!doctype html>
<html>

<head>
    <title>Sorting the Table by clicking Header with AJAX</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src='jquery-3.3.1.min.js' type='text/javascript'></script>
    <script src='script.js' type='text/javascript'></script>
    <style>
        .container {
            margin: 0 auto;
        }

        #empTable {
            border-collapse: collapse;
        }

        #empTable th span:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class='container'>
        <input type='hidden' id='sort' value='asc'>
        <table width='100%' id='empTable' border='1' cellpadding='10'>
            <tr>
                <th><span onclick='sortTable("id");'>Name</span></th>
                <th><span onclick='sortTable("fname");'>Fname</span></th>
                <th><span onclick='sortTable("lname");'>Lname</span></th>
                <th><span onclick='sortTable("designation");'>Designation</span></th>
                <th><span onclick='sortTable("address1");'>Address1</a></th>
            </tr>
            <?php
            $query = "SELECT * FROM basic_info order by id asc";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['id'];
                $salary = $row['fname'];
                $gender = $row['lname'];
                $city = $row['designation'];
                $email = $row['address1'];

            ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $salary; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
            <?php }
             ?>

        </table>
    </div>
</body>

</html>