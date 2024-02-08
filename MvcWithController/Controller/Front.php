<?php
class Controller_Front {
    public function init() {
        $request = new Model_Request();
        $uri = $request->getRequestUri();

        // Determine the action based on the URI
        $action = $request->getQueryData('action');
        $id = $request->getQueryData('id');

        $productModel = new Model_Product();
        $productView = new View_Product();

        // Handle form submission and database operations
        if ($action === 'add' && $request->isPost()) {
            $postData = $request->getPostData('pdata');
            $productModel->save($postData);
            header("Location: index.php");
            exit();
        } elseif ($action === 'edit' && $request->isPost()) {
            $postData = $request->getPostData('pdata');
            $productModel->update($postData, ['product_id' => $id]);
            header("Location: index.php");
            exit();
        } elseif ($action === 'delete') {
            $productModel->del(['product_id' => $id]);
            header("Location: index.php");
            exit();
        }

        // Display product form for editing or adding
        if ($action === 'edit' || $action === 'add') {
            $productDetails = [];
            if ($action === 'edit') {
                $productDetails = $productModel->show('*', ['product_id' => $id]);
                $productDetails = $productDetails[0];
            }
            echo $productView->createForm($productDetails);
            exit();
        }

        // Display the list of products
        $products = $productModel->show();
        echo $productView->toHtml($products);
    }
}
?>
