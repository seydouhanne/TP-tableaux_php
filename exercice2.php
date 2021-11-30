<?php

for($lettre=11;$lettre<=36;$lettre++){


    $tab[$lettre] = chr(54+$lettre);
}


foreach($tab as $cl=>$val){

    echo ($cl ."====>".$val);
    
}
?>