<?php

// include "Lib/autoload.php";

// $request = new Model_Request();
// $productModel = new Model_Product();

// if (!$request->isPost()) {
//     // Display the list of products
//     $products = $productModel->show();
//     $productView = new View_Product();
//     echo $productView->toHtml($products);
// } else {
//     // Handle form submission
//     $postData = $request->getPostData('pdata');
    
//     if (isset($postData['submit'])) {
//         // Insert or update based on the presence of 'product_id'
//         if (isset($postData['product_id']) && !empty($postData['product_id'])) {
//             $productId = $postData['product_id'];
//             unset($postData['product_id']);
//             $productModel->update($postData, ['product_id' => $productId]);
//         } else {
//             $productModel->save($postData);
//         }

//         // Redirect to index.php after successful submission
//         header("Location: index.php");
//         exit();
//     }
// }

// // Handle edit and delete actions
// if (isset($_GET['action']) && !empty($_GET['action'])) {
//     $action = $_GET['action'];
//     $productId = $_GET['id'];

//     if ($action === 'edit') {
//         // Fetch the product details and display the form for editing
//         $productDetails = $productModel->show('*', ['product_id' => $productId]);
//         $productView = new View_Product();
//         echo $productView->createForm($productDetails[0]);
//         exit();
//     } elseif ($action === 'delete') {
//         // ... existing code
//     }
// }


// <?php

// include "Lib/autoload.php";

// $request = new Model_Request();
// $productModel = new Model_Product();

// if (!$request->isPost()) {
//     // Display the list of products
//     $products = $productModel->show();
//     $productView = new View_Product();
//     echo $productView->toHtml($products);
// } else {
//     // Handle form submission
//     $postData = $request->getPostData('pdata');
    
//     if (isset($postData['submit'])) {
//         // Insert or update based on the presence of 'product_id'
//         if (isset($postData['product_id']) && !empty($postData['product_id'])) {
//             $productId = $postData['product_id'];
//             unset($postData['product_id']);
//             $productModel->update($postData, ['product_id' => $productId]);
//         } else {
//             $productModel->save($postData);
//         }

//         // Redirect to index.php after successful submission
//         header("Location: index.php");
//         exit();
//     }
// }

// // Handle edit and delete actions

//     if (isset($_GET['action']) && !empty($_GET['action'])) {
//         $action = $_GET['action'];
//         $productId = $_GET['id'];
    
//         if ($action === 'edit') {
//             // Fetch the product details and display the form for editing
//             $productDetails = $productModel->show('*', ['product_id' => $productId]);
//             echo $productView->createForm($productDetails[0]);
//             exit();
//         } elseif ($action === 'delete') {
//             // Delete the product and redirect to index.php
//             $productModel->del(['product_id' => $productId]);
//             header("Location: index.php");
//             exit();
//         }
//     }

// <?php

// include "Lib/autoload.php";

// $request = new Model_Request();
// $productModel = new Model_Product();

// // Handle form submission
// if ($request->isPost()) {
//     $postData = $request->getPostData('pdata');

//     if (isset($postData['submit'])) {
//         // Insert or update based on the presence of 'product_id'
//         if (isset($postData['product_id']) && !empty($postData['product_id'])) {
//             $productId = $postData['product_id'];
//             unset($postData['product_id']);
//             $productModel->update($postData, ['product_id' => $productId]);
//         } else {
//             $productModel->save($postData);
//         }

//         // Redirect to index.php after successful submission
//         header("Location: index.php");
//         exit();
//     }
// }

// // Handle edit and delete actions
// if (isset($_GET['action']) && !empty($_GET['action'])) {
//     $action = $_GET['action'];
//     $productId = $_GET['id'];

//     if ($action === 'edit') {
//         // Fetch the product details and display the form for editing
//         $productDetails = $productModel->show('*', ['product_id' => $productId]);
//         $productView = new View_Product();
//         echo $productView->createForm($productDetails[0]);
//         exit();
//     } elseif ($action === 'delete') {
//         // Delete the product and redirect to index.php
//         $productModel->del(['product_id' => $productId]);
//         header("Location: index.php");
//         exit();
//     }
// }

// // Display the list of products
// $products = $productModel->show();
// $productView = new View_Product();
// echo $productView->toHtml($products);





// <?php

// <?php

include "Lib/autoload.php";

class Ccc{
    public static function init(){
    //    echo "123";
      $frontController = new Controller_front;
      $frontController->init();

    }
}
Ccc::init();


// $request = new Model_Request();
// $productModel = new Model_Product();
// $productView = new View_Product();

// // Handle form submission
// echo "Hello";
// // print_r($request->getPostData());
// if ($request->isPost()) {
//     $postData = $request->getPostData('pdata');
//     // print_r($postData);
//     // var_dump(isset($postData['submit']));
    
//     if (($request->getPostData('submit'))) {
//         // Insert or update based on the presence of 'product_id'
//         if (!empty($postData['product_id'])) {
//             $productId = $postData['product_id'];
//             // unset($postData['product_id']); 
//             $productModel->update($postData, ['product_id' => $productId]);
//             header("Location: index.php");   
//             // Redirect to index.php after successful submission
//             // header("Location: index.php");
//             // exit();
//         }
//         else{
//             $productModel->save($postData);
//         }
//     }
// }

// // Handle edit and delete actions
// if (isset($_GET['action']) && !empty($_GET['action'])) {
//     $action = $_GET['action'];
//     $productId = $_GET['id'];
//     $postData = $request->getPostData('pdata');
//     if ($action === 'edit') {
//         // Fetch the product details and display the form for editing
//         $productDetails = $productModel->show('*', ['product_id' => $productId]);
//         echo $productView->createForm($productDetails[0]); 
//         // // if($action === 'edit') {
//             // //     print_r($productId);
//             // //     die();
//             // unset($postData['product_id']);
//             // $productModel->update($postData, ['product_id' => $productId]);
//             // header("Location: index.php");
//             // }
            
//             exit();
//         }
//         elseif ($action === 'delete') {
//             // Delete the product and redirect to index.php
//         $productModel->del(['product_id' => $productId]);
//         header("Location: index.php");
//         exit();
//     }elseif ($action === 'add'){
        
//         echo $productView->createForm(); 
//         // if(isset($postData['submit'])){
//             // $productModel->save($postData);
//         // }
//     }
// }

// // Display the list of products
// $products = $productModel->show();
// echo $productView->toHtml($products);

?>
