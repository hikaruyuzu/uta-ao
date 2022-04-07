<?php
require_once "Helper/BokuFunction.php";

// note
/**
 * digunakan untuk mengakses file dari file lain
 * gunakan require jika dia dapat error jika kita memanggil function yang tidak ada
 * gunakan include jika tidak mau error dan apps terus berjalan jika terjadi error'
 * gunakan require_once agar import file tidak terjadi duplikasi
 * gunaskan include_once agat ridak terjadi duplikadsi tapi tidak terjadi error
 */

echo getSomeLove("Kaguya shinomiya");