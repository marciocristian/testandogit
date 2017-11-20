<?php

$conn = new mysqli("localhost", "root", "", "portal");

if ($conn->connect_error) {
  die("Falha ao conectar!, Motivo: " . $conn->connect_error);
}
