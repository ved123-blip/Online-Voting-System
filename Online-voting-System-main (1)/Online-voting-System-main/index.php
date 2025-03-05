<html>
    <head>
        <title>Online voting system - Home</title>
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

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>