<?php

// PALINDROME ANGKA

function palindrome_angka($angka) {
   
   $angka_terbalik = "";
   
   for ($i = strlen($angka) - 1; $i >= 0; $i--) {
      $angka_terbalik .= strval($angka)[$i];
   }
   
   if (intval($angka_terbalik) === $angka) {
      return "Itu palindrome\n";
   }
   
   return "Itu tidak palindrome\n";
   
}

echo palindrome_angka(121);