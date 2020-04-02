<?php
/* Lien avec la bose de donnée */
require 'connexion.php';

function registerUser ($data) {
  if (!empty($data['name']) && !empty($data['email']) && !empty($data['password'])) {
      $bdd = connectToBdd();
      $name = $data['name'];
      $email = $data['email'];
      $password = $data['password'];

      $query = $bdd->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
      $query->execute([$name, $email, $password]);
  }
}