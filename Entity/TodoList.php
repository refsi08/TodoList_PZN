<?php

/**
 * Implementasi PBO PHP
 */

namespace Entity {
    class TodoList
    {
        // properti
        private string $todo;

        // constructor
        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        // Getter
        public function getTodo()
        {
            return $this->todo;
        }

        // Setter
        public function setTodo($todo)
        {
            $this->todo = $todo;

            return $this;
        }
    }
}
