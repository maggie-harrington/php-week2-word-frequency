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

            $inputStringArray = str_word_count($inputString, 1);
            // $inputStringArray = explode(" ", $inputString);
            $matchingArray = array();
            for ($i = 0; $i < sizeof($inputStringArray); $i++) {
                if ($inputStringArray[$i] == $inputWord) {
                    array_push($matchingArray, $inputStringArray[$i]);
                }
            }

            $matchingString = implode(" ", $matchingArray);
            $repeatNumber = str_word_count($matchingString, 0);


            // $repeatNumber = substr_count($matchingString, $inputWord);

            // $repeatNumber = substr_count($inputString, $inputWord);

            return $repeatNumber;
        }

    }
?>
