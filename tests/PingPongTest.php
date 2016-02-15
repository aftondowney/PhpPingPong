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
            $this->assertEquals("Ping", $result);
        }

        function test_makePingPong_pong()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 5;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals("Pong", $result);
        }

        function test_makePingPong_pingpong()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 15;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals("Ping Pong", $result);
        }

        function test_makePingPong_number()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = 17;

            //Act
            $result = $test_PingPong->makePingPong($input);

            //Assert
            $this->assertEquals(17, $result);
        }
    }

?>
