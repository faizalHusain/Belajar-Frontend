<?php
$nama = $_POST["nama"] ?? "";
$email = $_POST["email"] ?? "";
$notlp = $_POST["notlp"] ?? "";
echo json_encode(["nama" => $nama,"email" => $email, "notlp" => $notlp]);