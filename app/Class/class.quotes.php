<?php 

namespace Quotes\app;

/*if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Quotes':
            getQuotes();
            break;
        case 'Random':
            random();
            break;
    }
}*/

class Quotes
{
    
 
    public function getQuotes(){
        //return the entire array of quotes
        $quotes = include 'quotes.php';
        //$quotes = array("hi", "I","Hope","You","Have","A","Great","Day");
        echo $quotes;
    }

    public function random(){
        //pick a random quote
        $quotes = include 'quotes.php';
        //$quotes = array("hi", "I","Hope","You","Have","A","Great","Day");
        $randomquotes= $quotes[array_rand($quotes,1)];
        echo $randomquotes;
    }

       public function quoted(){
        //quote of the day
        //Doing for loop to incrament for each day
        
        $array = ["1","2","3","4"];
        $output=[];

        for($day = 1; $day < 365; $day++){
            $output.push($array[$day % $array.length]);
        }
        echo $output;

    }


        public function search ($words){
            //search for a quote
            $quotes = include 'quotes.php';
            foreach($quotes as $index=>$string){
                if(stristr($string, $words )){
                        return $index;
            }
        }
     }

     public function setQuotes(){
        //Replacing array
        $quotes = include 'quotes.php';
        $quotes2 = include 'quotes2.php';

        $replace = array_replace($quotes2, $quotes);
        echo($replace);



     }



}