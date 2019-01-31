<!DOCTYPE html>
<html>
    <p style="text-align: center;">
        <span style="font-size:36px;"><strong><span style="font-family: trebuchet ms,helvetica,sans-serif;"><span style="color: rgb(0, 128, 128);">Driver Employee List's</span></span></strong></span></p>
        <p style="text-align: center;">
        &nbsp;</p>
        <head>
            <title>Registered Employees</title>
            <style type="text/css">
            table, td, th
            {
            border:1px solid #666;
            font-style:Calibri;
            }
            th
            {
            background-color:#666;
            color:white;
            font-style:Calibri;
            }
            .button {
            background-color: #666;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
            opacity: 0.9;
            }
            </style>
        </head>
        <body>
            <table border="1px" width="100%">
                <tr>
                    <th>ID:</th>
                    <th>License:</th>
                    <th>Plate Number:</th>
                    <th>First Name:</th>
                    <th>Last Name:</th>
                    <th>Age:</th>
                    <th>Gender:</th>
                    <th>Address:</th>
                    <th>Contact:</th>
                    <th>E-Mail:</th>
                    <th>Birthdate:</th>
                    <th>Nationality:</th>
                    <th>Education Level:</th>
                    <th>Vehicle Type:</th>
                    <th>Year Hired: </th>
                </tr>
                <?php
                $hostname = "localhost";
                $username = "root";
                $password ="";
                $database = "transport";
                $conn = new mysqli($hostname, $username, $password, $database);
                if($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
                }
                $sql = "SELECT id_no, licence, plateno, fname, lastname, age, gender, address, contact, email, bdate, nationality, edulevel, vehicletype, yrhired FROM driver_employee";
                $result = $conn->query($sql);
                $dwb = $result->fetch_all();
                
                for($i=0; $i < sizeof($dwb); $i++){
                {
                print "<tr>";
                    print "<td align=center>" . $dwb[$i][0] . "</td>";
                    print "<td align=center>" . $dwb[$i][1] . "</td>";
                    print "<td align=center>" . $dwb[$i][2] . "</td>";
                    print "<td align=center>" . $dwb[$i][3] . "</td>";
                    print "<td align=center>" . $dwb[$i][4] . "</td>";
                    print "<td align=center>" . $dwb[$i][5] . "</td>";
                    print "<td align=center>" . $dwb[$i][6] . "</td>";
                    print "<td align=center>" . $dwb[$i][7] . "</td>";
                    print "<td align=center>" . $dwb[$i][8] . "</td>";
                    print "<td align=center>" . $dwb[$i][9] . "</td>";
                    print "<td align=center>" . $dwb[$i][10] . "</td>";
                    print "<td align=center>" . $dwb[$i][11] . "</td>";
                    print "<td align=center>" . $dwb[$i][12] . "</td>";
                    print "<td align=center>" . $dwb[$i][13] . "</td>";
                    print "<td align=center>" . $dwb[$i][14] . "</td>";

                print "</tr>" ;
                }
                }
                ?>
            </table>
            <a class="button" href="index.php">Return</a>

        </body>
    </html>
