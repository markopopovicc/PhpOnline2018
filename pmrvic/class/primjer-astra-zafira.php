<?php
include './Astra.php';
include './Zafira.php';

$A1=new Astra();
$Z1= new Zafira();

Echo '<h1>Usporedba vozila</h1>';

echo '<table border=1>'
. '<tr>'
    .'<td>'
    .'Astra'
    .'</td>'
    .'<td>'
    .'Zafira'
    .'</td>'
    .'</tr>'
    . '<tr>'
    .'<td>'
    .$A1->ispis()
    .'</td>'
    .'<td>'
    .$Z1->ispis()
    .'</td>'
    .'</tr>'
    . '</table>';