<?php
include "./lib/Calculator.php";

/**
 * Class for reading from text file and processing the calculation
 */
class Main extends Calculator
{
  public $file;
  public function setFile($file)
  {
    $this->file = $file;
  }

  /**
   * Function for reading instructions from file
   */
  public function doCalculation()
  {
    if (!empty($this->file)) {
      $file = fopen($this->file, "r");
      $content = fread($file, filesize($this->file));
      fclose($file);
      return $this->calculate($content);
    }
  }
}
$main = new Main();
$main->setFile("./data/instructions.txt");
echo $main->doCalculation();
