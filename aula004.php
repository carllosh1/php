<?php
 ECHO "<h4>1) Use array com construtor</h4>";
 $carlos = Array("Nome" => "Carlos","Idade"=>"19 anos", "Altura" => "1.85", "Peso" => "85kg" );
 $Kelly = Array("Nome" => "Kelly","Idade"=>"20 anos", "Altura" => "1.67", "Peso" => "52kg" );

 print_r($carlos);  
 print("<br>"); 
 print_r($Kelly);   
 print("<br>"); 
 foreach($carlos as $atributos){
         echo $atributos. " ";
 };
  print("<br>"); 
 foreach($Kelly as $atributos){
    echo $atributos. " ";
};

 ECHO "<h4>2) Use matriz com construtor</h4>";

 $pessoa = Array(Array("Carlos", "Kelly", "Rodrigo"),Array("19 anos", "20 anos", "20 anos"));
 print_r($pessoa);
 echo "<br>";
 for($i=0;$i<2;$i++){
     
    for($j=0;$j<3;$j++){
        echo $pessoa[$i][$j]. " ";
  
    }
   echo "<br>";
 }

 ECHO "<h4>3) Use array com implícito</h4>";

 $pessoas[0]= "Carlos";
 $pessoas[1]= "Kelly";
 $pessoas[2]= "Rodrigo";
 $pessoas[3]= "Juliana";
 $pessoas[4]= "Lorrany";
 $pessoas[5]= "Laura";
 print_r($pessoas);
 for($i=0;$i<6;$i++){
     
    printf("<br> %s ",$pessoas[$i]);
   
 }


 ECHO "<h4>4) Use matriz com implícito</h4>";

 $matriz[0][0] = "Carlos";
 $matriz[0][1] = "19 anos";
 $matriz[0][2] = "Alto";

 $matriz[1][0] = "Kelly";
 $matriz[1][1] = "20 anos";
 $matriz[1][2] = "Baixa";
 print_r($matriz);
 for($i = 0; $i <2;$i++){
    echo "<br>";
     for($j = 0; $j<3;$j++){
        printf("%s ", $matriz[$i][$j]);
     }
   
 }


?>  