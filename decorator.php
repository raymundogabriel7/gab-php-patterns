<?php

// Attaches additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality.
interface Component {
    public function operation();
}

class ConcreteComponent implements Component {
    public function operation() {
        return 'Concrete Component';
    }
}

class Decorator implements Component {
    protected $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation() {
        return $this->component->operation();
    }
}

class ConcreteDecorator extends Decorator {
    public function operation() {
        return 'Decorator (' . parent::operation() . ')';
    }
}