<?php

$firestore = $factory->createFirestore();
use Kreait\Firebase\Firestore; 
class MyService
{
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }
}
$firestore = app('firebase.firestore');
$database = $firestore->database();
?>