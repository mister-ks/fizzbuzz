<html>
<body>
<p><?php

$i = 1;

for($i = 1; $i <= 100; $i++) {

      if($i%3 == 0 && $i%5 == 0) {
          echo 'fizz buzz<br />';
      } elseif($i%3 == 0 && $i%5 != 0) {
          echo 'fizz<br />';
      } elseif($i%3 != 0 && $i%5 == 0) {
          echo 'buzz<br />';
      } elseif($i%3 != 0 && $i%5 != 0) {
          echo $i.'<br />';
      }

}
?></p>
</body>
</html>
