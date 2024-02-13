document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Empêche la soumission du formulaire par défaut

  // Récupère les valeurs des champs
  var nom = document.getElementById('nom').value;
  var prenom = document.getElementById('prenom').value;
  var email = document.getElementById('Email').value;
  var code = document.getElementById('code').value;
  var password = document.getElementById('password').value;
  var confirmation = document.getElementById('confirmation').value;

  // Réinitialise les messages d'erreur
  document.getElementById('nomError').innerHTML = '';
  document.getElementById('prenomError').innerHTML = '';
  document.getElementById('emailError').innerHTML = '';
  document.getElementById('codeError').innerHTML = '';
  document.getElementById('passwordError').innerHTML = '';
  document.getElementById('confirmationError').innerHTML = '';

  // Vérifie si les champs sont vides et affiche les messages d'erreur correspondants
  if (nom === '') {
    document.getElementById('nomError').innerHTML = 'Veuillez entrer votre nom.';
  }
  if (prenom === '') {
    document.getElementById('prenomError').innerHTML = 'Veuillez entrer votre prénom.';
  }
  if (email === '') {
    document.getElementById('emailError').innerHTML = 'Veuillez entrer votre email.';
  }
  if (code === '') {
    document.getElementById('codeError').innerHTML = 'Veuillez entrer votre code.';
  }
  if (password === '') {
    document.getElementById('passwordError').innerHTML = 'Veuillez entrer votre mot de passe.';
  }
  if (confirmation === '') {
    document.getElementById('confirmationError').innerHTML = 'Veuillez confirmer votre mot de passe.';
  }
});

document.getElementById('loginButton').addEventListener('click', function() {
  // Code pour effectuer une action lorsque le bouton de connexion est cliqué
  alert('Bouton de connexion cliqué !');
});