<?php

use GuzzleHttp\Client;

class MarvelClient{
    private $baseUrl = 'http://gateway.marvel.com/v1/public/';
    private $publicApiKey;
    private $privateApiKey;

    public function __construct()
    {
        $this->publicApiKey = '1ac7649ee7d6409d32cf8887d26be208';
        $this->privateApiKey = '0fde4a9ceeb91063d3f80fe0b1e1f0d6a9f08de0';
    }

    private function call(string $operation)
    {
        $url = $this->baseUrl . $operation;

        return $this->send($url);
    }

    private function send(string $url, array $params = array()) 
    {
        $client = new GuzzleHttp\Client();

        $response = $client->request('GET', $url . "?ts=1&apikey=" . $this->publicApiKey . "&hash=" . md5(1 . $this->privateApiKey . $this->publicApiKey ),[
            'exceptions' => false,
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'X-Foo'      => ['Bar', 'Baz']
            ]
        ]);
        
        return json_decode($response->getBody(), true);
    }

    public function getCharacters()
    {
        $response = $this->call('characters');

        $characters = $response['data']['results'];

        foreach ($characters as $character) 
        {
            $thumbnail = $character['thumbnail']['path'] . '.' . $character['thumbnail']['extension'];
            $charactersArray[] = new Character($character['name'], $character['description'], $thumbnail, $character['comics']);
        }

        return $charactersArray;
    }

    public function getCharacter(int $id) 
    {
        $response = $this->call('characters/' . $id);

        $marvelCharacter = $response['data']['results'];

        foreach ($marvelCharacter as $character) 
        {
            $thumbnail = $character['thumbnail']['path'] . '.' . $character['thumbnail']['extension'];
            $marvelCharacter = new Character($character['name'], $character['description'], $thumbnail, $character['comics']);
        }

        return $marvelCharacter;
    }

    public function getComicsForCharacter(int $id)
    {
        $response = $this->call('characters/' . $id . '/comics');

        $comics = $response['data']['results'];

        return $comics;
    }

    public function getComic(int $id) 
    {
        $response = $this->call('comics/' . $id);

        $comic = $response['data']['results'];

        return $comic;
    }

    public function getCreatorsForComics(int $id) 
    {
        $response = $this->call('comics/' . $id . '/creators');

        $creators = $response['data']['results'];

        return $creators;
    }


}
?>