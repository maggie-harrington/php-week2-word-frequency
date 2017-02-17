<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test1CheckCountRepeats()
        {
            // Arrange
            $testWord = 'a';
            $testString = 'a';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }

        function test2CheckCountRepeats()
        {
            // Arrange
            $testWord = 'a';
            $testString = 'a a';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('2', $result);
        }

        function test3CheckCountRepeats()
        {
            // Arrange
            $testWord = 'cat';
            $testString = 'cat';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }

        function test4CheckCountRepeats()
        {
            // Arrange
            $testWord = 'cat';
            $testString = 'cat cat';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('2', $result);
        }

        function test5CheckCountRepeats()
        {
            // Arrange
            $testWord = 'cat';
            $testString = 'cat dog cat rabbit';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('2', $result);
        }

        function test6CheckCountRepeats()
        {
            // Arrange
            $testWord = 'A';
            $testString = 'a';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }

        function test7CheckCountRepeats()
        {
            // Arrange
            $testWord = 'a';
            $testString = 'A';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }

        function test8CheckCountRepeats()
        {
            // Arrange
            $testWord = 'cat';
            $testString = 'The cat is in the cathedral';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }

        function test9CheckCountRepeats()
        {
            // Arrange
            $testWord = 'cat';
            $testString = 'Where is my cat?';
            $testRepeatCounter = new RepeatCounter($testWord, $testString);

            // Act
            $result = $testRepeatCounter->countRepeats($testWord, $testString);

            // Assert
            $this->assertEquals('1', $result);
        }


    }
?>
