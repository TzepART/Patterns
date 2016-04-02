<?php
/**
 * Some product
 */
namespace Patterns\Classes\LazyInitialization;

interface Product
{

    /**
     * Returns product's name
     *
     * @return string
     */
    public function getName();
}

class Factory
{

    /**
     * @var Product
     */
    protected $firstProduct;

    /**
     * @var Product
     */
    protected $secondProduct;


    /**
     * Returns the product
     *
     * @return Product
     */
    public function getFirstProduct()
    {

        if (!$this->firstProduct) {
            $this->firstProduct = new FirstProduct();
        }
        return $this->firstProduct;
    }

    /**
     * Returns the product
     *
     * @return Product
     */
    public function getSecondProduct()
    {

        if (!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }
        return $this->secondProduct;
    }
}

/**
 * The first product
 */
class FirstProduct implements Product
{

    /**
     * Returns product's name
     *
     * @return string
     */
    public function getName()
    {
        return 'The first product<br>';
    }
}

/**
 * Second product
 */
class SecondProduct implements Product
{

    /**
     * Returns product's name
     *
     * @return string
     */
    public function getName()
    {
        return 'Second product<br>';
    }
}
