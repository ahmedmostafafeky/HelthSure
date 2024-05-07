<?php

session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

    $id = $_POST['id'];

    
    $sql = "SELECT * FROM userinfo WHERE id = '$id'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

    
    $sql1 = "SELECT * FROM generalinfo WHERE id = '$id'";
    $result1 = mysqli_query($con, $sql1);  
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
    /////////////////////////////////////////////////
    $sql2 = "SELECT * FROM relativecont WHERE id = '$id'";
    $result2 = mysqli_query($con, $sql2); 
    /////////////////////////////////////////////////
    $sql3 = "SELECT * FROM allergy WHERE id = '$id'";
    $result3 = mysqli_query($con, $sql3); 
    /////////////////////////////////////////////////
    $sql4 = "SELECT * FROM chronic WHERE id = '$id'";
    $result4 = mysqli_query($con, $sql4); 
    /////////////////////////////////////////////////
    $sql5 = "SELECT * FROM procedures WHERE id = '$id'";
    $result5 = mysqli_query($con, $sql5); 
    /////////////////////////////////////////////////

    /////////////////////////////////////////////////
    $sql7 = "SELECT * FROM appointments WHERE id = '$id'";
    $result7 = mysqli_query($con, $sql7); 
    /////////////////////////////////////////////////
    $sql8 = "SELECT * FROM mesrments WHERE id = '$id'";
    $result8 = mysqli_query($con, $sql8); 
    /////////////////////////////////////////////////
    $sql9 = "SELECT * FROM surgerys WHERE id = '$id'";
    $result9 = mysqli_query($con, $sql9); 
    /////////////////////////////////////////////////
    $sql10 = "SELECT * FROM illneses WHERE id = '$id'";
    $result10 = mysqli_query($con, $sql10); 
    /////////////////////////////////////////////////



?>


<html>
    <head>
    <style>
        body {
            background-color: #045c86;
            margin: 0;
            padding: 0;
        }
        .body-main {
            width:50%;
            margin: auto;
        }
        table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width:100%;
            border: 1px solid black;
        }
        tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        td {
            padding: 12px 15px;
            border: 1px solid black;
        }

        .top {
            display: grid;
            justify-content: center;
            margin: 50px 0;
        }
        h1, h3 {
            text-align: center;
            margin: 20px 0;
        }
        .pimg {
            margin: 20px 0;
        }
</style>
    </head>
    <body>
    <section>
            <div class="top">
            <img class="pimg" style="width:500px; height: 500px; border-radius: 50%" src="proimgs/<?=$row['img']?>">
                <h1>Name: <?=$row['name']?></h1>
                <h3>Email: <?=$row['email']?></h3>
                <h3>Phone: <?=$row['phone']?></h3>
            </div>
            </section>
            <hr>
        <div class="body-main">
            
        <section class="general-info-main">
            <div class="general-info-main-top">
                <div>
                    <h3>General Information</h3>
                    <table>
                        <tr>
                            <td>bloodtype</td>
                            <td>age</td>
                            <td>gender</td>
                            <td>date of birth</td>
                            <td>address</td>
                        </tr>
                        <tr>
                            <td><?php echo $row1["bloodtype"]?></td>
                            <td><?php echo $row1["age"]?></td>
                            <td><?php echo $row1["gender"]?></td>
                            <td><?php echo $row1["dateofbirth"]?></td>
                            <td><?php echo $row1["address"]?></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div>
                    <h3>Relative Contacts</h3>
                    <table>
                        <tr>
                            <td>name</td>
                            <td>number</td>
                            <td>address</td>
                        </tr>
                        <?php
                            while($row2 = $result2->fetch_assoc()) {
                                echo "<tr><td>" . $row2["name"] . "</td>";
                                echo "<td>" . $row2['number'] . "</td>";
                                echo "<td>" . $row2['addrees'] . "</td></tr>";
                            }
                        ?>
                    </table>
                </div>
                <hr>
                <div>
                    <h3>Allergy</h3>
                    <table>
                        <tr>
                            <td>name</td>
                            <td>description</td>
                            <td>date</td>
                        </tr>
                        <?php
                            while($row3 = $result3->fetch_assoc()) {
                                echo "<tr><td>" . $row3["name"] . "</td>";
                                echo "<td>" . $row3['description'] . "</td>";
                                echo "<td>" . $row3['date'] . "</td></tr>";
                            }
                        ?>
                    </table>
                </div>
                <hr>
                <div>
                    <h3>Cironic Desises</h3>
                    <table>
                        <tr>
                            <td>name</td>
                            <td>description</td>
                            <td>date</td>
                        </tr>
                        <?php
                            while($row4 = $result4->fetch_assoc()) {
                                echo "<tr><td>" . $row4["name"] . "</td>";
                                echo "<td>" . $row4['description'] . "</td>";
                                echo "<td>" . $row4['date'] . "</td></tr>";
                            }   
                        ?>
                    </table>
                </div>
            </div>
            <hr>
        </section>

    <section class="medical-procedures">
        <div class="medical-procedures-top">
            <h3>Medical Procedures</h3>
            <table>
                <tr>
                    <td>name</td>
                    <td>description</td>
                </tr>
                <?php
                    while($row5 = $result5->fetch_assoc()) {
                        echo "<tr><td>" . $row5["name"] . "</td>";
                        echo "<td>" . $row5['description'] . "</td></tr>";
                        
                    }
                ?>
            </table>
        </div>
        <hr>
    </section>

    <section class="medical-appointments">
        <div class="medical-appointments-top">
        <h3>Medical Appointments</h3>
            <table>
                <tr>
                    <td>doctor name</td>
                    <td>date</td>
                    <td>description</td>
                    <td>illnes</td>
                </tr>
                <?php
                    while($row7 = $result7->fetch_assoc()) {
                        echo "<tr><td>" . $row7["docname"] . "</td>";
                        echo "<td>" . $row7['date'] . "</td>";
                        echo "<td>" . $row7["description"] . "</td>";
                        echo "<td>" . $row7['illnes'] . "</td></tr>";
                        
                    }
                ?>
            </table>
        </div>
        <hr>
        
    </section>

    <section class="medical-measurment">
        <div class="medical-measurment-top">
        <h3>Medical Measurment</h3>
        <table>
            <tr>
                <td>blood pressure</td>
                <td>temperature</td>
                <td>heart rate</td>
                <td>breathing rate</td>
                <td>oxygen level in blood</td>
                <td>blood sugar level</td>
            </tr>
            <?php
                        while($row8 = $result8->fetch_assoc()) {
                            echo "<tr><td>" . $row8["bloodpressure"] . "</td>";
                            echo "<td>" . $row8["temperater"] . "</td>";
                            echo "<td>" . $row8["hertrate"] . "</td>";
                            echo "<td>" . $row8["breathingrate"] . "</td>";
                            echo "<td>" . $row8["oxegynlevel"] . "</td>";
                            echo "<td>" . $row8["sugerinblood"] . "</td></tr>";
                        }
                    ?>
        </table>
        </div>
        <hr>
        
    </section>

    <section class="helth-history-main">
        <div class="helth-history-main-top">
            <div>
                <h3>Surgarys</h3>
                <table>
                    <tr>
                        <td>name</td>
                        <td>date</td>
                        <td>details</td>
                    </tr>
                    <?php
                    while($row9 = $result9->fetch_assoc()) {
                        echo "<tr><td>" . $row9["name"] . "</td>";
                    echo "<td>" . $row9['date'] . "</td>";
                    echo "<td>" . $row9['description'] . "</td></tr>";
                        
                    }
                ?>
                </table>
            </div>
            <hr>
            <div>
                <h3>Ilnesses</h3>
                <table>
                    <tr>
                        <td>name</td>
                        <td>date</td>
                        <td>details</td>
                    </tr>
                    <?php
                    while($row10 = $result10->fetch_assoc()) {
                        echo "<tr><td>" . $row10["name"] . "</td>";
                    echo "<td>" . $row10['date'] . "</td>";
                    echo "<td>" . $row10['description'] . "</td></tr>";
                        
                    }
                ?>
                </table>
            </div>
        </div>
        <hr>
    </section>
        </div>
    

    </body>
</html>