<?php
class CharactersModel
{
  private $api;

  public function __construct()
  {
    $config = require_once("/home/miguel/Documents/htdocs/rick_and_morty/config/api.php");
    $this->api = $config['RICK_AND_MORTY_API'];
  }

  public function getAllApi()
  {
    $response = file_get_contents($this->api);
    if (!$response) return [];
    $data = json_decode($response, true);
    return $data['results'] ?? [];
  }

  public function getCharacterIdApi($idCharacter)
  {
    $getApi = $this->api . '/' . $idCharacter;
    $response = file_get_contents($getApi);
    if (!$response) return false;
    $data = json_decode($response, true);
    return $data ?: false;
  }

  public function paginationApi($page)
  {
    $getPagination = $this->api . '?page=' . $page;
    $response = file_get_contents($getPagination);
    if (!$response) return false;
    $data = json_decode($response, true);
    return $data ?: false;
  }

  public function totalPages()
  {
    $response = file_get_contents($this->api);
    if (!$response) return 0;
    $data = json_decode($response, true);
    return $data['info']['pages'] ?? 0;
  }

  public function addStatus() {}

  public function addSpecies() {}

  public function addGender() {}
}
