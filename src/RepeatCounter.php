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

            $inputStringArray = explode(" ", $inputString);
            $matchingArray = array();
            for ($i = 0; $i < sizeof($inputStringArray); $i++) {
                if ($inputStringArray[$i] == $inputWord) {
                    array_push($matchingArray, $inputStringArray[$i]);
                }
            }
            var_dump($matchingArray);
            $matchingString = implode(" ", $matchingArray);
            $repeatNumber = substr_count($matchingString, $inputWord);

            // $repeatNumber = substr_count($inputString, $inputWord);
            // var_dump($repeatNumber);
            return $repeatNumber;
        }

    }
?>
