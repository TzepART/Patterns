<?php
/**
 * Some factory
 */
interface Factory
{

    /**
     * Returns product
     *
     * @return Product
     */
    public function getProduct();
}

/**
 * Some product
 */
interface Product
{

    /**
     * Returns product's name
     *
     * @return string
     */
    public function getName();
}

/**
 * First factory
 */
class FirstFactory implements Factory
{

    /**
     * Returns the product
     *
     * @return Product
     */
    public function getProduct()
    {
        return new FirstProduct();
    }
}

/**
 * Second factory
 */
class SecondFactory implements Factory
{

    /**
     * Returns the product
     *
     * @return Product
     */
    public function getProduct()
    {
        return new SecondProduct();
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
        return 'The first product';
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
        return 'Second product';
    }
}

class UserFactory{
    
    static function create($user_id)
    {
        if($user_id>100){
            return new SecondProduct;
        }else{
            return new FirstProduct;
        }
    }
}

class UserStrategy{

    public function getName($user_id)
    {
        if($user_id>100){
            $name = new SecondProduct;
            return $name->getName();
        }else{
            $name = new FirstProduct;
            return $name->getName();
        }
    }
}