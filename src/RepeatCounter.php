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
            $inputWord = strtolower($inputWord);
            $inputString = strtolower($inputString);

            $repeatNumber = substr_count($inputString, $inputWord);
            var_dump($repeatNumber);
            return $repeatNumber;
        }

    }
?>
