<?php
//UNA VOLTA IMPORTATA LA PAGINA CATEGORY ANDARE A SOSTUIRE QUELLO CHE SI ASPETTA COME TIPIZZAZIONE DELLA VARIAILE $category
require_once __DIR__ . "/Category.php";
//Classe product
class Product
{
    private string $name;
    private float $price = 0.0;
    //operatore '?' è un operatore di costruzione che permette di impostare un valore di default se il valore non è stato impostato
    private ?string $description = null;
    private Category $category;

    //Construtor
    public function __construct(string $name, Category $category)
    {
        $this->setName($name);
        $this->setCategory($category);
    }

    //Getters e Setters
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get the value of category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }
}
