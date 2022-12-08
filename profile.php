<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">    
        <style>
        .header {
            background-color: #57427e;
            text-align: center;
            padding: 20px;
            font-family: "Sofia", sans-serif;
        }
        .header h1 {
            color: #eeeeee;
            font-size: 30px;
            font-family: "Sofia", sans-serif;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #4D5F0F;
            font-family: Georgia, serif;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            padding: 8px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: Georgia, serif;
        }
        
        li a:hover {
            background-color: #52554a;
        }
        .parent {
            display: flex;
        }
        .active {
            background-color: #4D5F0F;
        }
        h2 {
            color: black;
            font-size: 25px;
            font-family: Georgia, serif;
        }
        a1:link {
            color: black;
            font-size: 20px;
            font-family: Georgia, serif;
            text-decoration: none;
        }
        img {
            width: 200px;
            height: auto;
        }   
        img.one {
            width: 200px;
            height: auto;
            border-radius: 50%;
        }   
        h3 {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
            text-decoration: none;
        }
        h3:hover {
            color: #4D5F0F;
            text-decoration: underline;
        }
        h4 {
            color: black;
            font-size: 15px;
            font-family: Georgia, serif;
        }
        div1{
            padding-top: 30px;
            padding-left: 30px;
        }
        div2{
            padding-top: 50px;
            padding-left: 30px;
        }
        :root {
            --username: JohnDoe22;
        }

        div.gallery {
            margin: 20px 10px 10px 10px;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            opacity: 0.6;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Hidden Treasures</h1>
        </div>
        <ul>
        <li><a href="homePage.php">Home</a></li>
        <li style="float:right"><a class="active" href="profile.php">Profile</a></li>
        <li style="float:right"><a class="active" href="posting.html">Post</a></li>
        <li style="float:right"><a class="active" href="#filter">Filter</a></li>
        </ul>
        <div1 class="parent">
            <img class="one" src="ProfPhotos/<?=$_SESSION["profile_photo"]?>" alt="profilePic" width="500" height="500">
            <div1>
                <p><?php echo $_SESSION["username"];?></p> 
                <a class="one" href="editProfile.php"><h3>Edit Profile</h3></a>
                <p><?php echo $_SESSION["bio"];?></p>   
            </div1>
        </div1>
        <div2 class="parent">
            <h2>Posts</h2>
        </div2>

        <div class="gallery">
            <a target="_blank" href="postPage.html">
              <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\azzuro.jpg" alt="Azzuro" width="800" height="800">
            </a>
            
          </div>
        <div class="gallery">
            <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg">
              <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\Milano.jpg" alt="Milano" width="800" height="800">
            </a>
            
          </div>
          
          <div class="gallery">
            <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg">
              <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\ostello.jpg" alt="Ostello" width="800" height="800">
            </a>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg">
              <img src="C:\Users\audre\OneDrive\College\Year 3\Software Engineering\LaChiesa.jpg" alt="Mountains" width="800" height="800">
            </a>
          </div>

    </body> 
    
    
     
    
    
</html> 