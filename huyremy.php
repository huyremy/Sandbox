<?php

function tinhTongMang($mangSo) {
  // Hàm nhận vào một mảng các số và trả về tổng của chúng.
  // Cùng nhau "nhảy múa" với mảng nào! 
  $tong = 0; // Khởi tạo biến tổng là 0
  foreach ($mangSo as $so) {
    $tong += $so; // Cộng từng số vào biến tổng
  }
  return $tong;
}
$mangDuLieu = [10, 25, 5, 15];
echo "Tổng của mảng [10, 25, 5, 15] là: " . tinhTongMang($mangDuLieu) . " ✨";
?>