<?php
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(dirname(__FILE__, 2) . '/src/models/User.php');

    // Database::getConnection();
    // $sql = 'select * from users';
    // $result = Database::getResultFromQuery($sql);

    // while($row = $result -> fetch_assoc()){
    //     print_r($row);
    //     echo '<br>';
    // }
    
    
    // testando a classe User
    $user = new User(['name' => 'João', 'email' => 'joao@joao.com']);
    print_r($user->name); //método get em uso
    //alterando dados com __set:
    $user->email = 'joaopedro@joao.com';
    echo '<br>';
    print_r($user->email);
?>