<?php
require_once('../../mysql_connect.php');
// ger variabel $dbc
 
 echo $_POST['Namn'];

 $query = 'INSERT INTO form(Namn,Efternamn,Favorit_film,Favorit_Anime,Tycker_du_att_du_ar_cool) 
VALUES("'
. $_POST['Namn'] .'","'
. $_POST['Efternamn'] . '","'
. $_POST['Favorit_film'] .'","'
. $_POST['Favorit_Anime'] .'","'
. $_POST['Tycker_du_att_du_ar_cool?'] .'");';

mysqli_query($dbc,$query);