<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {

        function test_makePingPong()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 3;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals("Ping", $result);
        }
    }

?>
