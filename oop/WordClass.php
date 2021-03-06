<?php
   // Ref - https://www.w3schools.com/php/php_ref_string.asp
    class Word {
      /* Member variables */
      var $word;

      function __construct($par1) {
        $this->word = $par1;
     }
      
      function addSlashes(){
         return addcslashes($this->word, 'A..z')    ."<br/>";
      }

      function chop(){
         return chop($this->word, "World!")    ."<br/>";
      }
     
      function countChars(){
      return count_chars($this->word, 3)    ."<br/>";
      }

      function encString(){
      return sha1($this->word)    ."<br/>";
      }

      function length(){
         return strlen($this->word)    ."<br/>";
      }

      function toUpper(){
         return strtoupper($this->word)."<br/>";
      }

      function trim(){
         return trim($this->word)."<br/>";
      }
      
   }


   $word1 = new Word("Hello World");
   echo $word1->addSlashes();
   echo $word1->chop();
   echo $word1->countChars();
   echo $word1->encString();
   echo $word1->length();
   echo $word1->toUpper();
   echo $word1->trim();
   
