<?php
/* Lien avec la base de donnée */
require 'connexion.php';

function getUserData () {
  $data = $_POST;
  if (!empty($data['email']) && !empty($data['password'])) {
      $bdd = connectToBdd();
      $array = [$data['email'], $data['password']];

      $query = $bdd->prepare("SELECT * FROM users WHERE email=? AND password=?");
      $query->execute($array);

      return $query->fetchAll(PDO::FETCH_ASSOC);
  }
}