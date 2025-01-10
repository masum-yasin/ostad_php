<?php

interface Printer {
    public function Print();

    
}
class ExamplePrinter{
    public function print(){
        echo "Print From PDF Printer";
        
    }
}

class PDFPrinter implements Printer{
    public function Print(){
        echo "Print Paper From PDFPrinter ";
    }
}

class ThreeDPrinter implements Printer{
    public function Print(){
        echo "Print Papaer From ThreeDPrinter";
    }
}

class FourDoublePrinter implements Printer{
    public function create(){
        echo "Four Double Printer";
    }
   
}
function printDoc($printer){
$printer->Print();
}

// $p1 = new Printer();
// $p1->print();
// echo "<br>";
// $p2 = new PDFPrinter();
// $p2->Print();
// echo "<br>";
// $p3 = new ThreeDPrinter();
// $p3->Print();
$pdf = new PDFPrinter();
printDoc($pdf);
echo "<br>";
$threePrinter = new ThreeDPrinter();
printDoc($threePrinter);
echo "<br>";
$FourDoublePrinter = new FourDoublePrinter();
printDoc($FourDoublePrinter);
?>