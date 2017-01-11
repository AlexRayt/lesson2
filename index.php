<?php
    error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
    ini_set('display_errors', 1);
    
    
    $name = 'Алексей';
    $age = 23;
    
    echo 'Меня зовут '.$name.'<br>';
    echo 'Мне '.$age.' года. <br>';
    
    unset($name, $age);
   
        
    define('MY_CITY','Санкт-Петербург');
    
    if(defined('MY_CITY')){
            echo 'Я живу в городе '.MY_CITY.'.<br>';
    }    else {
             echo 'const doesnot exist. <br>';
    }
    
  
    
    $book = array(
            'title' => '"Шаг за шагом к достижению цели"',
            'author' => 'Робертом Маурером',
            'pages' => '187');
    
    
    echo 'Недавно я прочитал книгу ' .$book['title']. ', написанную автором ' .$book['author']. 
'.Я осилил все ' .$book['pages']. ' страниц, мне она очень понравилась.<br>';
    
   $book1 = array(
        'title' => '"Шаг за шагом к достижению цели"',
            'author' => 'Робертом Маурером',
            'pages' => '187');
            
    
   $book2 = array(
            'title' => '"Новая большая книга CSS"',
            'author' => 'Дэвидом Макфарландом',
            'pages' => '720');
   
   $books = array($book1, $book2);
   
   echo 'Недавно я прочитал книги ' .$books[0]['title'].' и '.$books[1]['title'].', 
написанные соответственно авторами ' .$books[0]['author'].' и '.$books[1]['author']. 
'.<br>Я осилил в сумме ' .($books[0]['pages'] + $books[1]['pages']). ' страницы. 
Не ожидал от себя такого результата.<br>';
    
?>