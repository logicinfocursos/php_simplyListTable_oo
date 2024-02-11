<?php
include_once "src/repositories.php";
class ProductRepository extends Repositories
{
    public function __construct()
    {
        parent::__construct('products');
    }

    protected function mapToItem($data)
    {
        return $this->mapToProduct($data);
    }
    public function mapToProduct($data)
    {
        return new Product($data['id'], $data['name']);
    }
}