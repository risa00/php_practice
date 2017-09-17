<?php
class Tweet
{
  public $message;
  public $name;
  public $dateTIme;

  public function print(){
    if ($this->countletter()>14) {
      echo "message too long";
      return;
    }else {
    }echo "$this->message . ($name->name / $this->dateTime)";
}

  public function countletters(){
    return strlen($this->message);
}
}
