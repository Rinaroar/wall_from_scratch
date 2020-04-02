<?php

require 'connexion.php';

function addWord() {
  $data = $_POST;
  if (!empty($data['content'])) {
    $bdd = connectToBdd();
    $content = $data['content'];

    $query = $bdd->prepare("INSERT INTO contents (content) VALUES (?)");
    $query->execute([$content]);
  }
}


function getContent() {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM contents");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}


