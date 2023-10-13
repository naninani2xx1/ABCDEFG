<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Ambta\DoctrineEncryptBundle\Configuration\Encrypted;
/**
 * @MongoDB\Document
 */
class User
{
    /**
     * @MongoDB\Id(strategy="AUTO")
     */
    private $id;

    /**
     * @MongoDB\Field(type="string") 
     * @Encrypted
     */
    private $name;

    /**
     * @MongoDB\Field(type="float")
     */
    private $price;

    public function getName(){
        return $this->price;
    }

    public function setName(string $name){
        $this->name = $name;
        return $this;
    }

    public function setPrice(string $price){
        $this->price = $price;
        return $this;
    }
    // ... getters and setters
}