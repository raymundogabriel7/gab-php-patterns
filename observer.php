<?php
// Defines a one-to-many dependency between objects so that when one object changes state,
// all its dependents are notified and updated automatically.
interface Observer {
    public function update($data);
}

class ConcreteObserver implements Observer {
    public function update($data) {
        echo "Received update: $data\n";
    }
}

class Subject {
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function notifyObservers($data) {
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }
}