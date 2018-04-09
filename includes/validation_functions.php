<?php

    $errors = array();

    function fieldname_as_text($fieldname)
    {
        $fieldname = str_replace("_", " ", $fieldname);
        $fieldname = ucfirst($fieldname);
        return $fieldname;
    }

    // * presence
    // use trim() so empty spaces don't count
    // use === to avoid false positives
    // empty() would consider "0" to be empty
    function has_presence($value)
    {
        return isset($value) && $value !== "";
    }

    function validate_presences($required_fields)
    {
        global $errors;
        foreach ($required_fields as $field) {
            $value = trim($_POST[$field]);
            if (!has_presence($value)) {
                $errors[$field] = fieldname_as_text($field) . " can't be blank";
            }
        }
    }

    // * string length
    // max length
    function has_max_length($value, $max)
    {
        return strlen($value) <= $max;
    }

    // min length
    function has_min_length($value, $min) {
      return strlen($value) >= $min;
    }

    function validate_max_lengths($fields_with_max_lengths)
    {
        global $errors;
        // Expects an assoc. array
        foreach ($fields_with_max_lengths as $field => $max) {
            $value = trim($_POST[$field]);
            if (!has_max_length($value, $max)) {
                $errors[$field] = fieldname_as_text($field) . " cannot exceed more than " . $max ." characters";
            }
        }
    }

    function validate_min_lengths($fields_with_min_lengths) {
      global $errors;
      // Expects an assoc. array
      foreach($fields_with_min_lengths as $field => $min) {
          $value = trim($_POST[$field]);
      if (!has_min_length($value, $min)) {
          $errors[$field] = fieldname_as_text($field) . " should be at least " . $min ." characters";
      }
      }
    }

// password length
// password match
    function validate_password()
    {
        global $errors;
        $value1 = trim($_POST["password"]);
        $value2 = trim($_POST["confirm_password"]);
        if (strlen($value1) < 6) {
            $errors[""] = "Password has to be at least 6 characters";
        }elseif($value1 !== $value2) {
            $errors[""] = "Passwords don't match";
        }
    }


    // * inclusion in a set
    function has_inclusion_in($value, $set)
    {
        return in_array($value, $set);
    }
