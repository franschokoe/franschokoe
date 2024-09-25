
<?php
//include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>writecv</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="WriteCV.css">
</head>
<body>
    <header class="head">
        <h1>Write Your CV</h1>
    </header>
    <form class="form-dev" action="Input.php" method="post">
       <div class="Personal">
            <h1>Personal Information</h1>
            <label for="Name">Name:</label>
            <input type="text" for="Name" name="name"><br> <!--==Characters or strings==-->
            <label for="Surname">Surname:</label>
            <input form="Surname" type="text" name="surname"><br><!--Characters or strings-->
            <label for="Date-of-birth">Date of Birth:</label>
            <input type="date" for="Date-of-birth" name="dateofbirth"><br><!--int-->
            <label for="Gender">Gender:</label>
            <input type="text" for="Gender" name="gender"><br><!--strings-->
            <label for="ID">Identity Number:</label>
            <input type="text" for="ID" name="id"><br><!--int-->
            <label for="Nationality">Nationality:</label>
            <input type="text" form="Nationality" name="nationality"><br><!--strings-->
            <label for="Status">Marital Status:</label>
            <input type="text" for="Status" name="status"><br><!--strings-->
            <label for="Religion">Religion:</label>
            <input type="text" name="religion" for="Religion"><br><!--String-->
            <label for="Home-lang">Home Language:</label>
            <input type="text" name="home-lang"><br>
            <label for="Other-lang">Other Language:</label>
            <input type="text" name="other-lang"><br>
        </div> 
        <div class="contacts">
            <h1>Contact Information</h1>
            <label for="numbers">Phone Numbers:</label>
            <input type="text" for="numbers" name="numbers"><br><!--Int-->
            <label for="email">Email:</label>
            <input type="email" for="email" name="email"><br><!--string-->
        </div>
        <div class="education">
            <h1>Education</h1>
            <label for="institusion">Name of Institusion:</label>
            <input for="institusion" name="institusion" type="text"><br>
            <label for="education-level">Highest grade:</label>
            <input type="text" for="education-level" name="highest" ><br>
            <label for="tertiary-level">Tertiary education:</label>
            <input type="text" for="tertiary-level" name="tertiary"><br>
            <label for="course">Feild of Study:</label>
            <input type="text" name="course" for="course"><br>
            <label for="degree">Degree obtained:</label>
            <input for="degree" name="degree" type="text"><br>
        </div>
        <div class="Experience">
            <h1>Work Experience</h1>
            <label for="jobt" >Job title:</label>
            <input type="text" name="job" for="jobt" ><br>
            <label for="Company">Company Name:</label>
            <input type="text" for="Company" name="company"><br>
            <label for="description">Job description</label>
            <input for="description" name="descripe" type="text"><br>
        </div>
        <div class="Skills">
            <h1>Skills</h1>
            <label for="skill">Descripe your Sills:</label><br>
            <input type="text" for="skill" name="skill">

        </div>
        <div class="Project">
            <h1>Projects</h1>
            <label for="project">Mention your completed projects</label><br>
            <input for="project" name="project" type="text">

        </div>
    <div class="button">
        <button type="submit" name="submit-button">Submit</button>            
    </div>
    
        
    </form>
    <footer>
            
    </footer>
</body>
</html>
<?php


?>