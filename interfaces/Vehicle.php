<?php
    interface iVehicle {
        // an interface cannot contain any functionality, only definitions of methods
        // the derived class MUST implements these methods
        public function book();
    }