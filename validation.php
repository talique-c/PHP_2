<?php
// Name validation function
function validateName($name) {
    // Makes sure the name is less than 25 characters
        if (strlen($name > 25)) {
            return false;
        } else {
            return true;
        }
}

// Email validation function
function validateEmail($email) {
    // Makes sure email is a valid email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
