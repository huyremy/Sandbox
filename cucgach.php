<?php
function testSandbox($inputString) {
  $chuoiDaVietHoa = strtoupper($inputString);
  return "Kết quả là: " . $chuoiDaVietHoa . " 😄";
}
echo testSandbox("Đây là một cục gạch")
?>