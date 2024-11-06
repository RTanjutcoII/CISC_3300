<?php

try {
    if($num < 0) {
        throw new Exception("This is negative: $num");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}