// Fonction pour récupérer les utilisateurs via une requête AJAX
function getUsers() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_users.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        var users = JSON.parse(xhr.responseText);
        displayUsers(users);
      }
    };
    xhr.send();
  }
  
  // Fonction pour afficher les utilisateurs dans la table
  function displayUsers(users) {
    var tableBody = document.querySelector('#usersTable tbody');
    tableBody.innerHTML = '';
  
    for (var i = 0; i < users.length; i++) {
      var user = users[i];
  
      var row = document.createElement('tr');
      row.innerHTML = '<td>' + user.id_personne + '</td>' +
                      '<td>' + user.nom + '</td>' +
                      '<td>' + user.prenom + '</td>' +
                      '<td>' + user.Email + '</td>';
  
      tableBody.appendChild(row);
    }
  }
  
  // Appel de la fonction pour récupérer et afficher les utilisateurs lors du chargement de la page
  document.addEventListener('DOMContentLoaded', function() {
    getUsers();
  });
  