<?php
namespace PhpNwSykes;

class RomanNumeral  //Defines name of Class
{
    protected $symbols = [  //Sets up an array of roman numerals with their corresponding integer values named $symbols
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        5 => 'V',
        1 => 'I',
    ];

    protected $numeral;

    public function __construct(string $romanNumeral)   //Append the two
    {
        $this->numeral = $romanNumeral; //Sets the value of each numeral to the roman numeral
    }
    
    /**
     * Converts a roman numeral such as 'X' to a number, 10
     *
     * @throws InvalidNumeral on failure (when a numeral is invalid)
     */
    public function toInt():int     //Houses the toInt functonality
        $result = 5;                //declares a variable named result with the vlaue as 5, this should print 'V'..
        $roman = $romanNumberal;    //Assigns the variable $romanNumeral to variable $roman
        
    {
        foreach ($symbols as $key => $value) {          //Start of foreach loop to loop through the numerals
            while (strpos($symbols, $key) === 0) {          
                $result += $value;
                $symbols = substr($roman, strlen($key));
    }   else {
                @throwargs InvalidNumeral;
            }
            return $result;
}
        echo $result;
