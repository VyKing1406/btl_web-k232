<?php

// Create connection
$conn = new PDO('mysql:host=localhost;port=3306;dbname=webbanlap', 'root', 'Abc@1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
