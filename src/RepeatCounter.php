<?php
    class RepeatCounter
    {
        private $userInputWord;
        private $userInputString;

        function __construct($inputWord, $inputString)
        {
            $this->userInputWord = $inputWord;
            $this->userInputString = $inputString;
        }

        function getUserInputWord()
        {
            return $this->userInputWord;
        }

        function getUserInputString()
        {
            return $this->userInputString;
        }

        function countRepeats($inputWord, $inputString)
        {
            $repeatNumber = "";
            return $repeatNumber;
        }

    }
?>
