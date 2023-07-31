<?php 

namespace Helper {

    class InputHelper{
        
        static function input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN); // fungsi menginputkan value di php
            return trim($result);
        }
    }
}
?>