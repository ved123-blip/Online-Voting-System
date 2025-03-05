<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <style>
            input {
  padding: 10px;
  border-radius: 5px;
}

select {
  padding: 10px;
  border-radius: 5px;
}

#upload {
  padding: 10px;
  border-radius: 5px;
  border: 2px solid black;
}

#headerSection {
  padding: 2px;
  font-family: Cursive;
}

#loginSection {
  padding: 5px;
}

body {
  background-image: url("bg.jpg");
  background-size: cover;
}

#loginbtn {
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}

#reglink {
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
  text-decoration: none;
}

a {
  text-decoration: none;
}

#mainSection {
  padding: 10px;
}

#profileSection {
  width: 30%;
  float: left;
  background-color: white;
  padding: 20px;
}

#groupSection {
  width: 60%;
  float: right;
  background-color: white;
  padding: 20px;
}

#back-button {
  float: left;
  margin-left: 20px;
  margin-top: 20px;
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}

#logout-button {
  float: right;
  margin-right: 20px;
  margin-top: 20px;
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}

            </style>
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
    </body>
</html>