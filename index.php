<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <!-- =============================================================== -->
        <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #666;
        }
        /* Add padding to containers */
        .container {
        padding: 16px;
        background-color: white;
        }
        /* Full-width input fields */
        input[type=text], input[type=date] {
        width: 100%;
        padding: 5px;
        border: none;
        background: #f1f1f1;
        }
        /* Overwrite default styles of hr*/
        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }
        /* Set a style for the submit button */
        .registerbtn {
        background-color: #666;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }
        .registerbtn:hover {
        opacity: 1;
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
        width: 100%;
        display: inline-block;
        opacity: 0.9;
        }
        .button:hover {
        opacity: 1;
        </style>
        <!-- =============================================================== -->
    </head>
    <body>
        <form action="insert.php" method="GET">
            
            <div class="container">
                <h1>PUV Terminal Registration</h1>
                <div class="row">
                    <div class="col-sm">
                        <p>ID number</p>
                        <input type="text" placeholder="Enter Driver's ID" name="id_no" autocomplete="off" required>
                        <br><br>
                        <p>Licence</p>
                        <input type="text" placeholder="Enter Driver's Licence" name="licence" autocomplete="off" required>
                        <br><br>
                        <p>Plate number</p>
                        <input type="text" placeholder="Plate Number" name="plateno" autocomplete="off" required>
                        <br><br>
                        <p>First Name</p>
                        <input type="text" placeholder="First Name" name="fname" autocomplete="off" required>
                        <br><br>
                        <p>Last Name</p>
                        <input type="text" placeholder="Last Name" name="lastname" autocomplete="off" required>
                        <br><br>
                        <p>Age</p>
                        <input type="text" placeholder="Age" name="age" autocomplete="off" required>
                        <br><br>
                        <p>Gender</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <p>Address</p>
                        <input type="text" placeholder="Address" name="address" autocomplete="off" required>
                        <br><br>
                    </div>
                    <div class="col-sm">
                        <p>Contact</p>
                        <input type="text" placeholder="Contact Number" name="contact" autocomplete="off" required>
                        <br><br>
                        <p>E-mail</p>
                        <input type="text" placeholder="E-mail" name="email" autocomplete="off">
                        <br><br>
                        <p>Birthdate</p>
                        <input type="date" placeholder="Birthdate" name="bdate" autocomplete="off" required>
                        <br><br>
                        <p>Nationality</p>
                        <input type="text" placeholder="Nationality" name="nationality" autocomplete="off" required>
                        <br><br>
                        <p>Educational Level</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="edulevel">
                                <option value="Elementary Graduate">Elementary Graduate</option>
                                <option value="Highschool Graduate">Highschool Graduate</option>
                                <option value="College Graduate">College Graduate</option>
                            </select>
                        </div>
                        <p>Vehicle Type</p>
                        <input type="text" placeholder="Vehicle Type" name="vehicletype" autocomplete="off" required>
                        <br><br>
                        <p>Date Hired</p>
                        <input type="date" placeholder="Date Hired" name="yrhired" autocomplete="off" required>
                        <br><br>
                    </div>
                </div>
                <button type="submit" class="registerbtn">Register</button>
                <a href="view.php" class="button">View List</a>
            </div>
        </div>
        
    </form>
</body>
</html>
