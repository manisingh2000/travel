<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Travel and Tourism | Landing Page</title>
      <link rel="stylesheet" href="stylee.css">
      <style>
            html,
            body {
                  margin: 0;
                  padding: 0;
                  width: 100%;
            }

            body {
                  width: 100%;
                  height: 100vh;
                  background-image: url("images/land1.jpg");
                  opticity: 0.5;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                  display: table;
                  font-family: Montserrat;
            }

            .nav {
                  position: fixed;
                  top: 0;
                  left: 0;
                  margin: 0;
                  padding: 0;
                  width: 100%;
                  height: 80px;
            }

            .logo {
                  
                  color:rgb(0,0,128);
                  font-size: 20px;
                  line-height: 40px;
                  padding: 1px 20px;
                  border: 1px solid black;
                  border-radius: 4px;
                  margin: 1.5em;
                  display: inline-block;
                  list-style: none;
                  font-weight: bold;
            }

            .menu {
                  float: right;
                  line-height: 60px;
                  margin: 0.1em;
            }

            .menu ul {
                  list-style: none;
            }

            .menu ul li {
                  display: inline-block;
            }

            .menu ul li a {
                  text-decoration: none;
                  color: #fff;
                  font-size: 16px;
                  font-weight: bold;
                  padding: 0 20px;
            }

            ul li:nth-child(2) a {
                  color: black;
                  border: 1px solid #00CED1;
                  padding: 10px 20px;
                  border-radius: 4px;
            }

            ul li:nth-child(1) a {
                  color: black;
                  border: 1px solid #00CED1;
                  padding: 10px 20px;
                  border-radius: 4px;
            }

            .header {
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  text-align: center;
            }

            .header h1 {
                  color: black;
                  font-size: 64px;
                  font-weight: 400px;
                  margin-bottom: 8px;
                  font-style: italic;
                  text-shadow: 4px 4px 4px RoyalBlue;
            }

            .header p {
                  color:black;
                  font-size: 28px;
                  font-weight: bold;
                  text-shadow: 4px 4px 4px grey;
                  font-style: italic;
                  font-weight: 1000;
            }
      </style>
</head>

<body>
      <div class="wrapper">
            <div class="nav">
                  <div class="logo">
                        Travel and Tourism
                  </div>
                  <div class="menu">
                        <ul>

                              <li><a href="login.php" target="_blank">Login</a></li>
                              <li><a href="demo.php" target="_blank">SignUp</a></li>

                        </ul>
                  </div>
            </div>
            <div class="header">
                  <h1>Travel and Tourism</h1>
                  <p>Let's Explore The World
                  </p>

            </div>
      </div>
</body>

</html>