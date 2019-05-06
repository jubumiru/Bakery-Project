<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/submitorder' , function(Request $request, Response $response){

    $userData       = $request->getParam('userData');
    $orderDetail   = $request->getParam('orderDetail');
    $total          = $request->getParam('total');
    $deliveryDate   = $request->getParam('deliveryDate');

    // // order user
    $orderUserSql   = "INSERT INTO `order` (`Member_ID`, `Address_ID`, `Order_Date`, `Order_Status`, `Delivery_Date`, `Total`) ";
    $orderUserSql  .= "VALUES (:Member_ID, :Address_ID, NOW(), :Order_Status, :Delivery_Date, :Total)";
    $dataUser = [
        'Member_ID' => $userData['userId'],
        'Address_ID' => $userData['addressId'],
        'Order_Status' => "ยังไม่ชำระ",
        'Delivery_Date' => $deliveryDate,
        'Total' => $total,
    ];

    // //query product

    try{
        $db         = new db();
        $db         = $db->connect();
        $orderUser  = $db->prepare($orderUserSql);
        $orderUser->execute($dataUser);
        $order_id = $db->lastInsertId();
        $isPass     = true;
    }catch(PDOException $e){
        echo '{"error": {"text" : '.$e->getMessage().'}';
        $isPass     = false;
    }

    // // order product
    $orderProductSql    = "INSERT INTO `order_detail` (`Order_ID`, `Product_ID`, `Product_Amount`,`Product_Note`) ";
    $orderProductSql    .= "VALUES (:Order_id, :Product_id, :Product_amout, :Product_Note)";

    try{
        $orderProductDetail  = $db->prepare($orderProductSql);
        foreach($orderDetail as $orderProduct){

            $orderProductDetail->execute([
                'Order_id' => $order_id,
                'Product_id' => $orderProduct['id'],
                'Product_amout' => $orderProduct['quantity'],
                'Product_Note' => $orderProduct['detail']
            ]);
        }

        $db     = null;
        $isPass = true;
    }catch(PDOException $e){
        echo '{"error": {"text" : '.$e->getMessage().'}';
        $isPass = false;
    }

    $status = array('isPass' => $isPass);
    
    return $response->withJson($status);

});

// $app->get('/getorder' , function(Request $request, Response $response){

//     $sql     = "SELECT orders.Order_id, orders.Order_name, orders.Order_surname, orders.Order_email, ";
//     $sql    .= "orders.Order_tel, orders.Order_address, orders.Order_total, ";
//     $sql    .= "GROUP_CONCAT(product.Product_name) as Products, ";
//     $sql    .= "GROUP_CONCAT(orders_detail.Product_amout) as Amounts, ";
//     $sql    .= "GROUP_CONCAT(product.Product_price) as Prices ";
//     $sql    .= "FROM orders ";
//     $sql    .= "INNER JOIN orders_detail ON orders_detail.Order_id = orders.Order_id ";
//     $sql    .= "INNER JOIN product ON orders_detail.Product_id = product.Product_id ";
//     $sql    .= "GROUP BY Order_id";
    
//     try{
//         $db     = new db();
//         $db     = $db->connect();
//         $stmt   = $db->query($sql);
//         $orders  = $stmt->fetchAll(PDO::FETCH_OBJ);

//         foreach($orders as $index=>$order){
//             $output = [
//                 'Order_id' => $order->Order_id,
//                 'Order_name' => $order->Order_name,
//                 'Order_surname' => $order->Order_surname,
//                 'Order_email' => $order->Order_email,
//                 'Order_tel' => $order->Order_tel,
//                 'Order_address' => $order->Order_address,
//                 'Order_total' => $order->Order_total
//             ];

//             $product_ids = explode(",", $order->Products);
//             $product_amounts = explode(",", $order->Amounts);
//             $product_prices = explode(",", $order->Prices);

//             for($i = 0; $i < sizeof($product_ids); $i++){
//                 $output['Order_detail'][$i]['Product_name'] = $product_ids[$i]; 
//                 $output['Order_detail'][$i]['Product_amout'] = $product_amounts[$i];
//                 $output['Order_detail'][$i]['Product_price'] = $product_prices[$i];
//             }
//             $outputs[$index] = $output;
//         }

//         return $response->withJson($outputs);

//     }catch(PDOException $e){
//         echo '{"error": {"text" : '.$e->getMessage().'}';
//     }
// });
