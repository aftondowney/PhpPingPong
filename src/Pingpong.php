<?php

    class PingPong
    {
        function makePingPong($input_number)
        {
            if (($input_number % 3) == 0) {
                return "Ping";
            } elseif (($input_number % 5) == 0) {
                return "Pong";
            }

        }
    }

?>
