<?php

    class PingPong
    {
        function makePingPong($input_number)
        {
            if (($input_number % 15) == 0) {
                return "Ping Pong";
            } elseif (($input_number % 3) == 0) {
                return "Ping";
            } elseif (($input_number % 5) == 0) {
                return "Pong";
            } else
            return $input_number;

        }
    }

?>
