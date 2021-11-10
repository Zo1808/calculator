<?php
  Route::get('calculator', function(){
     echo 'Hello from the  doun calculator package!';
  });
 Route::get('add/{a}/{b}', 'doun\testing\CalculatorController@add');
  Route::get('subtract/{a}/{b}', 'doun\testing\CalculatorController@subtract');

?>