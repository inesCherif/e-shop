<?php

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $BDname = "eshop";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$BDname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;

}


function getAllCategories(){
    
    // 1- DB connexion
    $conn = connect();

    // 2- query creation

    $query = "SELECT * FROM categories";

    // 3- query execution 

    $result = $conn->query($query); 

    // 4- query result 

    $catgories = $result->fetchAll();

    return $catgories;
}


function getAllProducts() {
        
    // 1- DB connexion

    $conn = connect();


    // 2- query creation

    $query = "SELECT * FROM products";

    // 3- query execution 

    $result = $conn->query($query); 

    // 4- query result 

    $products = $result->fetchAll();

    return $products;
}


function searchProducts($keyword){

    $conn = connect();

    $query = "SELECT * FROM products WHERE name LIKE '%$keyword%'";

    $result = $conn->query($query);

    $products = $result->fetchAll();

    return $products;
}

function getProductById($id){
    $conn = connect();
    $query = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($query);
    $product = $result->fetch();
    return $product;
}

function AddVisitor($data){
    $conn = connect();
    $pwH=md5($data['pw']);
    $query = " INSERT INTO visitor(FirstName,LastName,email,pw,phone) VALUES ('".$data['FirstName']."', '".$data['LastName']."', '".$data['email']."', '".$pwH."', '".$data['phone']."') ";
    $result = $conn->query($query);
    if ($result){
        return true;
    }else{
        return false;
    }
}


function ConnectVisitor($data){
    $conn = connect();
    $email=$data['email'];
    $pw=md5($data['pw']);
    $query= "SELECT * FROM visitor WHERE email = '$email'  AND pw = '$pw' ";
    
    $result = $conn->query($query);
    $user = $result->fetch();

    return $user;
}







?>