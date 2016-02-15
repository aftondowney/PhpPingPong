<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {

        function test_makePingPong_ping()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 3;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, "Ping"), $result);
        }

        function test_makePingPong_pong()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 5;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, "Ping", 4, "Pong"), $result);
        }

        function test_makePingPong_pingpong()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 15;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, "Ping", 4, "Pong", "Ping", 7, 8, "Ping", "Pong", 11, "Ping", 13, 14, "Ping Pong"), $result);
        }

        function test_makePingPong_number()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 2;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(array(1, 2), $result);
        }
    }

?>
