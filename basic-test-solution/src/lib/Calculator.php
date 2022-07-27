<?php

/**
 * Class for calculation logics
 */
class  Calculator
{
    private $result = 0;

    /**
     * Function for addition operation
     */
    private function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Function for subtract operation
     */
    private function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    /**
     * Function for multiplication operation
     */
    private function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    /**
     * Function for divide operation
     */
    private function divide($num1, $num2)
    {
        return $num1 / $num2;
    }

    /**
     * Function to validate the data from instruction set
     */
    private function validate($instructions)
    {
        // TODO Implement method
    }


    /**
     * Function for calculation logic
     */
    public function calculate($instructionText)
    {
        $instructions = explode("\n", $instructionText);
        $this->validate($instructions);
        $this->result = count($instructions) == 1 ? explode(' ', trim($instructions[0]))[1] : 0;
        for ($i = 0; $i < count($instructions) - 1; $i++) {
            $firstInstruction = explode(' ', trim($instructions[$i]));
            $secondInstruction = explode(' ', trim($instructions[$i + 1]));
            $this->result = $this->{$firstInstruction[0]}(($this->result ? $this->result : $firstInstruction[1]), $secondInstruction[1]);
        }
        return $this->result;
    }
}
