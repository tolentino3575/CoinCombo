<?php

    require_once "src/CoinCombo.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_CoinCombo_amt()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 87;

            //Act
            $result = $test_CoinCombo->amtOutput($input);

            //Assert
            $this->assertEquals(87, $result);
        }

        function test_CoinCombo_divide()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 75;

            //Act
            $result = $test_CoinCombo->divideOutput($input);

            //Assert
            $this->assertEquals(3, $result);
        }

        // function test_CoinCombo_divideRemainder() //this test does work but further method development broke it because we were no longer just returning the remainder.
        // {
        //     //Arrange
        //     $test_CoinCombo = new CoinCombo;
        //     $input = 77;
        //
        //     //Act
        //     $result = $test_CoinCombo->divideOutput($input);
        //
        //     //Assert
        //     $this->assertEquals(2, $result);
        // }

        function test_CoinCombo_divideDime()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 85;

            //Act
            $result = $test_CoinCombo->divideOutput($input);

            //Assert
            $this->assertEquals(array(3, 1), $result);
        }

        function test_CoinCombo_divideNickel()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 90;

            //Act
            $result = $test_CoinCombo->divideOutput($input);

            //Assert
            $this->assertEquals(array(3, 1, 1), $result);
        }

        function test_CoinCombo_dividePenny()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 93;

            //Act
            $result = $test_CoinCombo->divideOutput($input);

            //Assert
            $this->assertEquals(array(3, 1, 1, 3), $result);
        }
    }
?>
