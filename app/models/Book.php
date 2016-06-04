<?php

class Book extends Eloquent {

    public function topics() {
        return $this->has_many_and_belongs_to('Topic', 'books_topic');
    }
}