<?php
$all = [];
for ($i = 1; $i <= 100; $i++) {
    $all[] = $i;
    // print_r($all);
}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">Number</th>
                     <th scope="col">Even</th>
                     <th scope="col">Odd</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                   for($i = 0; $i < count($all); $i++) {
                    echo "<tr>";
                    echo "<th scope='row'>".$all[$i]."</th>";
                    if ($all[$i] % 2 == 0) {
                        echo "<td class='text-danger'>".$all[$i]."</td>";
                        echo "<td></td>";
                    } else {
                        echo "<td></td>";
                        echo "<td class='text-success'>".$all[$i]."</td>";
                    }
                    echo "</tr>";
                   }
                   ?>
                 </tbody>
               </table>
            </div>
        </div>



</body>

</html>