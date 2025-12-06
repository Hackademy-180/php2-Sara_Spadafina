<?php

// funzioni
// dichiarazione SI UTILIZZANO I "PARAMETRI FORMALI"

        // function saluta(PARAMETRI FORMALI){
        //     // blocco di istruzione
        //     echo "Ciao a tutti! \n";
        // }

        // INVOCAZIONE= SI UTILIZZANO I "PARAMETRI REALI"

        // saluta(PARAMETRI REALI)

// LE STAMPE sono dei SIDE-EFFECT = effetto collaterale


// function saluta($nome){
//     return "Ciao a $nome\n";
// }

// saluta("Sara");

//        $somma = $somma + $numero;
//        SI PUO SCRIVERE ANCHE $SOMMA += $NUMERO;
//        += ugale a se stessa più

// Creare un software che gestisca la creazione di una password. Questa password dovrà avere determinate caratteristiche:

// 1. Minimo 8 caratteri - true
// 2. Dovrà contenere almeno un numero - true
// 3. Dovrà contenere almeno una lettera maiuscola -true
// 4. Dovrà contenere un carattere speciale -true
// 5. Effettuare un test che mi dica se tutti i 4 punti precedenti siano rispettati

// Built-in function: funzioni NON custom già previste dal linguaggio di programmazione

// Replicare l'esercizio di creazione della password visto a lezione ma con la seguente modifica:

//     Implementare la logica finale di controllo della password ragionando per utilizzare il ciclo do/while al posto del ciclo while


// $password = readline("Inserisci qui la password che vuoi creare: ");

function controlloLunghezza($pw){
        $lunghezza = strlen($pw);
        if($lunghezza >= 8){
           return true;
        }else{
           echo("Inserire una pw con almeno 8 caratteri \n");
           return false;
        }
}


function controlloNumero($pw){
        for($i = 0; $i < strlen($pw); $i++){
                if(is_numeric($pw[$i])){
                        return true;
                }
        }
        echo("Inserire almeno un numero \n");
        return false;
}


function controlloMaiuscole($pw){
        for($i = 0; $i < strlen($pw); $i++){
                if(ctype_upper($pw[$i])){
                        return true;
                }
        }
        echo("Inserire almeno un carattere Maiuscolo \n");
        return false;
}
        
function controlloCarattereSpeciale($pw){
        $caratteriSpeciali = ["@","!","#","%","&",".",","];
        for($i = 0; $i < strlen($pw); $i++){
                if(in_array($pw[$i], $caratteriSpeciali)){
                        return true;
                }
        }
        echo("Inserire almeno un carattere speciale \n");
        return false;
}

function controllo_password($pw){
        $vistoLunghezza = controlloLunghezza($pw);
        $vistoNumero = controlloNumero($pw);
        $vistoMaiuscole = controlloMaiuscole($pw);
        $vistoCarattere = controlloCarattereSpeciale($pw);
        if($vistoLunghezza && $vistoNumero && $vistoMaiuscole && $vistoCarattere){
                // echo ("La password è valida ");
          return true;
        }else{
                // echo("La password non è valida. Riprova ");
          return false;
        } 
}

do{
        $password = readline("Inserisci qui la password che vuoi creare: ");
        $vistoPassword = controllo_password($password);

        if($vistoPassword == false){
                 echo ("La password non è valida \n");
        }else{
                echo ("La password è valida \n");
        }
}while($vistoPassword == false);


   
