<?php
    class CreditCard {
        
        protected $number;
        protected $date;
        protected $cvc;

        public function __construct($number, $date, $cvc) {
            $this->number = $number;
            $this->cvc = $cvc;
        }

        public function getNumber() {
            return $this->number;
        }

        public function getDate() {
            return $this-> date;
        }

        public function getCvc() {
            return $this->cvc;
        }

    }
?>
