<?php
require_once "src/RepeatCounter.php";
class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function test1CheckCountRepeats()
    {
        // Arrange
        $testWord = 'a';
        $testString = 'a';
        $newRepeatCounter = new RepeatCounter($testWord, $testString);

        // Act
        $result = $newRepeatCounter->countRepeats($testWord, $testString);
        
        // Assert
        $this->assertEquals('1', $result);
    }

}
?>
