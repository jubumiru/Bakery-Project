<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// GET Product

$app->get('/getproduct' , function(Request $request, Response $response){

    $data = array('test' => 'test');
    return $response->withJson($data);
    // $sql = "SELECT * FROM `product`";

    // try{
    //     $db         = new db();
    //     $db         = $db->connect();
    //     $stmt       = $db->query($sql);
    //     $product    = $stmt->fetchAll(PDO::FETCH_OBJ);

    //     $db = null;

    //     return $response->withJson($product, 200, JSON_NUMERIC_CHECK);


    // }catch(PDOException $e){
    //     echo '{"error": {"text" : '.$e->getMessage().'}';
    // }
});

