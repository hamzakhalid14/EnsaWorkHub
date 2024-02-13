<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
    <title>ensab store</title>
  

</head>



<style>
   
    
    .labe{
    width: 300px;
    height:30px;
  border-radius: 6px;
    margin-left: 250px;
    
    
}
.flex2{
    width: 50%;
    float:left;
}
.flex1{
    width: 50%;
    float:right;

}
.submit{
margin-left: 400px;
margin-top: 10px;

}
.label1{
    padding-top: 50px;
    height: 500px;  
    padding-top: 120px;
}
.height{
    padding-top: 50px;
    height: 500px;
 font-size:x-large;
 font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 padding-top: 120px;
 color: black;
}
.button{
        margin-left: 900px;
        cursor: pointer;

    }
    body{
        background-image: url(baack.jpg);
        height: 100vh;
        background-position: center;
        background-size: cover;
    }
</style>
<body>
 <div class="navbar navbar-expand-md bg-dark navbar-dark text-danger">
    <img src="ensa.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"> 
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav button">
            <li class="nav-item"><a href="acueil.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="inscription.php" class="nav-link">inscription </a></li>
        </ul>
        
    </div> 
 
 </div>
 <section id="hero" class=" text-light ">
    <div class="container height  flex2 text-center">
        Bienvenue sur notre page web de gestion de demande 
        d'articles ! Nous sommes ravis de vous présenter notre solution innovante 
        pour gérer efficacement les demandes d'articles dans votre entreprise.
    </div >

 

    <div class="container  ">
        <form method="POST" action="testconnection.php">
            <div class="label1">
            <label for="login"> </label>
            <input class="labe"  type="email" placeholder="login" name="Email" id="Email" required="required"> <br>
            <label for="password"> </label>
            <input  class="labe  " class="mt-2" type="password" placeholder="password" name="password" required="required"   > <br>
            <p style="display: none;" id="error">le login ou le mot de passe et incorrect</p>
           <button  name="submit" value="check" class=" submit  btn btn-dark" > submit</button>
            <a  href="inscription.php">s'inscrire</a>
           
            </form>
      
    </div>
    </div>
    
</section>


  
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
   crossorigin="anonymous"></script>
</body>
</html>