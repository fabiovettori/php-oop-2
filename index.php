<?php
// ESERCIZIO
// definire la struttura di una tabella users che contiene i dati degli utenti di un blog
// definire una classe User che "mappa" la tabella users
// creare alcune istanze della classe User per stampare i dati degli utenti
// Nome repo: php-oop-2
// N.B: NON dovete creare per davvero il database né la tabella

// Step 1) -> Definisco la struttura della tabellla
// Struttura dati utente:
// - Name;
// - Lastame;
// - Email;
// - Subscription;
// - PlaneType;

// Step 2)  - Definisco una Classe user che mappa la tabella

require 'User.php';
require 'Ninja.php';

$user_example1 = new User(35);
$user_example1->name = 'Fabio';
$user_example1->lastname = 'Vettori';
$user_example1->SetEmail('pippo@gmail.com');
$user_example1->SetSubscription(true);


$user_example2 = new User(25);
$user_example2->name = 'Pippo';
$user_example2->lastname = 'Pluto';
$user_example2->SetEmail('pluto@gmail.com');
$user_example2->SetSubscription(false);


var_dump($user_example1);
echo 'User n.1 = ' . $user_example1->name . ' ' . $user_example1->lastname;

var_dump($user_example2);
echo 'User n.2 = ' . $user_example2->name . ' ' . $user_example2->lastname;


$ninja_example = new Ninja(33);
$ninja_example->name = 'Yoshi';
$ninja_example->lastname = 'Mio';
$ninja_example->SetEmail('yoshi@gmail.com');
$ninja_example->SetSubscription(true);

var_dump($ninja_example);
echo 'User n.2 = ' . $ninja_example->name . ' ' . $ninja_example->lastname;

?>
