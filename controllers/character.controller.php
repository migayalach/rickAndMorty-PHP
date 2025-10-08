<?php
class CharacterController
{
  private $model;

  public function __construct()
  {
    require_once("/home/miguel/Documents/htdocs/rick_and_morty/models/characters.model.php");
    $this->model = new CharactersModel();
  }

  public function getAllApi()
  {
    $data = $this->model->getAllApi();
    return $data;
  }

  public function getIdCharacterApi($idCharacter)
  {
    $data = $this->model->getCharacterIdApi($idCharacter);
    if ($data) return $data;
    return false;
  }
}
