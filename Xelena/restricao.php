<?php
session_start();

if (array_key_exists('id', $_SESSION)) {
} else {
    header("Refresh: 0; URL=login.html"); // Redirecionamento
}
