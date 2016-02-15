<?php

    class PingPong
    {
        function makePingPong($input_number)
        {
            $numbers = array();
            for ($i=1; $i <= $input_number; $i++) {
                if ($i % 15 == 0) {
                    array_push($numbers, 'Ping Pong');
                } elseif ($i % 3 == 0) {
                    array_push($numbers, 'Ping');
                } elseif ($i % 5 == 0) {
                  array_push($numbers, 'Pong');
                } else {
                array_push($numbers, $i);
                }
          }
          return $numbers;
        }
    }

?>
