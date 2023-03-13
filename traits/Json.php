<?php
    // a trait is a simple way to share code between classes
    trait Json {
        public function asJson() : string {
            return json_encode(get_object_vars($this));
        }
    }