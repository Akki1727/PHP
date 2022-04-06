<?php

include "config.php";
$veiw_sql = "SELECT * FROM basic_info";

$result = $con->query($veiw_sql);

$limit = 10;
$total_number_row = mysqli_num_rows($result);

// get the required number of pages

$total_pages = ceil($total_number_row / $limit);

// update the active page number
if (!isset($_REQUEST['page'])) {
    $page_number = 1;
} else {
    $page_number = $_REQUEST['page'];
}

// get the initial page number
$initial_page = ($page_number - 1) * $limit;

// get data of selected rows per page 


$orderby = " ORDER BY id ";
if (isset($_REQUEST['order_by']) && isset($_REQUEST['sort'])) {
    $orderby = ' order by ' . $_REQUEST['order_by'] . ' ' . $_REQUEST['sort'];
}

$columnName = $_POST['columnName'];
$sort = $_POST['sort'];

$select_query = "SELECT * FROM basic_info order by " . $columnName . " " . $sort . " LIMIT " . $initial_page . ',' . $limit;

$result = mysqli_query($con, $select_query);

$html = '';
while ($row = mysqli_fetch_array($result)) {
    $name = $row['id'];
    $salary = $row['fname'];
    $gender = $row['lname'];
    $city = $row['designation'];
    $email = $row['address1'];

    $html .= "<tr>
    <td>" . $name . "</td>
    <td>" . $salary . "</td>
    <td>" . $gender . "</td>
    <td>" . $city . "</td>
    <td>" . $email . "</td>
    </tr>";
    
}

echo $html;
