<?php

require 'connexion.php';

function addWord() {
  $data = $_POST;
  $user_id = $_SESSION['user_id'];
  if (!empty($data['content'])) {
    $bdd = connectToBdd();
    $content = $data['content'];

    $query = $bdd->prepare("INSERT INTO contents (content, user_id) VALUES (?, ?)");
    $query->execute([$content, $user_id]);
  }
}


function getContent() {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM contents");
  $query->execute();

  $contents = $query->fetchAll(PDO::FETCH_ASSOC);

  // & = pour eviter de faire "une copie" du tableau, utilisation du tableau "en dur"
  foreach ($contents as &$content){
    $content['user'] = getUserByContent($content['user_id']);
  }

  return $contents;
}


function getUserByContent($user_id) {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM users WHERE id = ?");
  $query->execute([$user_id]);

  return $query->fetchAll(PDO::FETCH_ASSOC);
}