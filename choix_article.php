
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>choix articles</title>
    <style>
body {
            background-color: #A5ABBD;
        }
        .center {
            display: flex;
            justify-content: center;
        }
        .form-container {
            width: 1000px;
            height: 400px;
            padding: 20px;
            background-color: white;
            margin-bottom: 60px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .form-control label {
            font-weight: bold;
        }
        .form-control input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .form-control select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .form-control button {
            padding: 5px 10px;
        }
        .TT{
          display: flex;
          float: right;

        }
        .center{
        text-align: center;
        margin-top: 50px;
        }
        image{
          width: 220px;
          height: 60px;
        }
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
       background-color: #A5ABBD;
        height: 100vh;
        background-position: center;
        background-size: cover;
    }
    .back-icon {
            font-size: 24px;
            color: #000000;
            cursor: pointer;
        }
        .image{
            width: 220px;
            height: 80px;
        }
        .bonjour{
            margin-top: 50px;
            text-align: center;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .con{
            margin-right: 130px;
        }
  
    .footer-basic {
  padding:40px 0;
  background-color:#E2F1FF;
  color:#4b4c4d;
  margin-top: 30px;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
    </style>
</head>
<body>
    
    <div class="navbar navbar-expand-md bg-dark navbar-dark text-danger">
        <img src="berrechid.png" alt="" class="image">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav button">
                <li class="nav-item"><a href="login.php" class="nav-link"> <span class="fas fa-home"></span>Home</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">déconnexion </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i></a></li>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
            </ul>  
        </div> 
     </div>
    <h4> <div id="date" class="date TT"></div></h4>
    <div class="center">
        <h1>Veuillez choisir des articles :</h1>
    </div>

    <div class="center">
        <div class="form-container">
            <form action="generate_pdf.php" method="POST">
                <table id="articleTable">
                    <tr>
                        <th>
                            <h3>Choisir votre département :</h3>
                        </th>
                        <th>
                            <select class="form-select-color-dark btn btn-dark" aria-label="Default select example"name="department">
                                <option selected>Open this select menu</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Physique">Physique</option>
                                <option value="Informatique">Informatique</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Nom de l'article</th>
                        <th>Quantité</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="article_name[]" class="form-control small-input" required>
                        </td>
                        <td>
                            <input type="number" name="quantity[]" class="form-control small-input" required>
                        </td>
                        <td>
                            <button type="button" onclick="removeRow(this)" class="btn btn-dark">Supprimer</button>
                        </td>
                    </tr>
                </table>
                <button type="button" onclick="addRow()" class="btn btn-dark">Ajouter un article</button>
                <br><br>
                <button type="submit" name="submit" id="submit" class="btn btn-dark">Générer la demande en PDF</button>
            </form>
        </div>
    </div>

    <script>
        function addRow() {
            var table = document.getElementById("articleTable");
            var row = table.insertRow();
            var cell1 = row.insertCell();
            var cell2 = row.insertCell();
            var cell3 = row.insertCell();
            cell1.innerHTML = '<input type="text" name="article_name[]" class="form-control small-input" required>';
            cell2.innerHTML = '<input type="number" name="quantity[]" class="form-control small-input" required>';
            cell3.innerHTML = '<button type="button" onclick="removeRow(this)" class="btn btn-dark">Supprimer</button>';
        }

        function removeRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        } document.getElementById('articleForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission 

        var departmentSelect = document.getElementById('departmentSelect');
        var selectedDepartment = departmentSelect.options[departmentSelect.selectedIndex].value;
        });
       //la date actuel
       var dateElement = document.getElementById("date");
     var dateActuelle = new Date();
var jour = dateActuelle.getDate();
var mois = dateActuelle.getMonth() + 1;
var annee = dateActuelle.getFullYear();

// Formate la date en "jj/mm/aaaa"
var dateFormatee = jour + "/" + mois + "/" + annee;
dateElement.innerHTML = "Date de demande : " + dateFormatee;
 


    </script>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
     crossorigin="anonymous">
   </script>
      
  <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright"> © 2023 Copyright:<a class="text-bleu" href="https://www.ensab.ac.ma//">Ensab.ma</a></p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>

   