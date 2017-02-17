# Word Frequency

#### _Epicodus PHP Week 2 Project (BDD), 2/17/2017_

#### By Maggie Harrington

## Description

_A website written in PHP to demonstrate Behavior Driven Development (BDD). It returns how frequently a word appears in a given string. The first page collects the word and the string of words to check from the user in a form. After the form is submitted, the second page displays the results of the search._

## Setup/Installation Requirements

* _Download at my GitHub repository: https://github.com/maggie-harrington/php-week2-word-frequency ._

* _To clone through GitHub, first make sure that you have PHP and Composer installed. See https://secure.php.net/ for details on installing PHP. Note: PHP is typically already installed on Macs. See https://getcomposer.org for details on installing Composer._

* _Once the above installations are finished, open Git Bash, type "cd Desktop" and hit enter. Copy the link above (in the second bullet point), then type "git clone " and paste the link and hit enter. You will now have a copy of this project on your desktop. In Git Bash, type "cd php-week2-word-frequency/" and hit enter, then "composer install" and enter. Once the installation has finished, type "cd web" and enter, then "php -S localhost:8000" and enter. In your web browser, navigate to "localhost:8000", which will open the home page._

## Known Bugs

_No known bugs at this time._

## Support and contact details

_If you run into any issues or have questions, ideas or concerns, please feel free to contact me at maggie.harrington@gmail.com_

## Technologies Used

_Written using Git Bash, Atom, Composer, Silex, Twig, and Bootstrap._

### MIT License

Copyright (c) 2017 Maggie Harrington


## Specifications

| Test cases for countRepeats()    | Input    | Output  |
|----------------------------------|----------|---------|
| 1: Single letter word matching test  | 'a', 'a' | 1 |
| 2: Find multiple instances of single letter in string  | 'a', 'a a' | 2 |
| 3: Multiple letters in word  | 'cat', 'cat' | 1 |
| 4: Multiple letters in word, multiple instances in string  | 'cat', 'cat cat' | 2 |
| 5: Do not count non-matching words  | 'cat', 'cat dog cat rabbit' | 2 |
| 6: Ignore case in word  | 'A', 'a' | 1 |
| 7: Ignore case in string  | 'a', 'A' | 1 |
| 8: Do not count partial word matches  | 'cat', 'The cat is in the cathedral' | 1 |
| 9: Ignore punctuation  | Where is my cat? | 1 |


These test values were chosen because they start as simple as possible and continually increase in complexity. Behavior is tested by inputting each case of word and string combos into countRepeats() and checking whether the corresponding expected output is returned.
