<?php
// Defines an interface for creating an object.
// But leaves the choice of its type to the subclasses, creating instances of those subclasses.
interface Product {
    public function getName();
}

class ConcreteProduct implements Product {
    public function getName() {
        return 'Concrete Product';
    }
}

interface Creator {
    public function createProduct(): Product;
}

class ConcreteCreator implements Creator {
    public function createProduct(): Product {
        return new ConcreteProduct();
    }
}