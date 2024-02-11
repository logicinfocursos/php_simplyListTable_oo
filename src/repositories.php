<?php

abstract class Repositories
{
    protected $apiUrl;
    protected $baseUrl;

    public function __construct($tableName)
    {
        $this->baseUrl = 'http://localhost:3000/';

        $this->apiUrl = $this->baseUrl . $tableName;
    }

    protected function fetchData($url, $method = 'GET', $data = null)
    {
        $options = [
            'http' => [
                'method' => $method,
                'header' => 'Content-type: application/json',
                'content' => $data ? json_encode($data) : null,
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return $result ? json_decode($result, true) : null;
    }

    abstract protected function mapToItem($data);

    public function getAll()
    {
        $data = $this->fetchData($this->apiUrl);
        $items = [];

        foreach ($data as $itemData) {
            $items[] = $this->mapToItem($itemData);
        }

        return $items;
    }
}