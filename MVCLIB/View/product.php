<?php
class View_Product
{
    public $id;
    public function __construct()
    {
        $request = new Model_Request();
        $this->id = ($request->getQueryData("id"));
    }

    public function createForm($productDetails = [])
    {
        $form = '<form action="" method="POST">';
        // $form .= '<div>';
        // $form .= $this->creteTextField('pdata[product_id]', "Product Id: ", $productDetails['product_id'] ?? '');
        // $form .= '</div>';
        // $form .= '<div>';
        // $form .= $this->creteTextField('pdata[product_id]', "Product Id: ", $productDetails['product_id'] ?? '');
        // $form .= '</div>';
        $form .= '<div>';
        $form .= $this->creteTextField('pdata[product_name]', "Product Name: ", $productDetails['product_name'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[sku]', "Sku: ", $productDetails['sku'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[price]', "Price: ", $productDetails['price'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->creteTextField('pdata[manufacturer_cost]', "Cost: ", $productDetails['manufacturer_cost'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->createSelectField('pdata[category]', 'Category', ['' => 'Select Category', 'Living room', 'Dining & kitchen', 'Office', 'Mattresses', 'Bar & Game Room', 'Outdoor', 'Decor', 'Lighting'], $productDetails['category'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->createRadioBtn('pdata[status]', 'Status', ['Enabled', 'Disabled'], $productDetails['status'] ?? '');
        $form .= '</div>';

        $form .= '<div>';
        $form .= $this->createRadioBtn('pdata[product_type]', 'Product Type', ['Simple', 'Bundle'], $productDetails['product_type'] ?? '');
        $form .= '</div>';


        $form .= '<div>';
        if ($this->id) {

            $form .= $this->creteUpdateBtn('Update');
        } else {
            $form .= $this->creteSubmitBtn('Submit');

        }
        $form .= '</div>';

        $form .= '</form>';

        return $form;
    }

    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }

    public function createSelectField($name, $title, $options = [], $selectedValue = '', $id = '')
    {
        $selectField = '<span> ' . $title . ' </span><select id="' . $id . '" name="' . $name . '">';

        foreach ($options as $value) {
            $selected = ($value == $selectedValue) ? 'selected="selected"' : '';
            $selectField .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
        }

        $selectField .= '</select>';
        return $selectField;
    }

    public function createRadioBtn($name, $title, $options = [], $selectedValue = '', $id = '')
    {
        $radioBtn = '<span>' . $title . '</span>';

        foreach ($options as $value) {
            $checked = ($value == $selectedValue) ? 'checked' : '';
            $radioBtn .= '<label><input type="radio" id="' . $id . '" name="' . $name . '" value="' . $value . '" ' . $checked . '> ' . $value . '</label>';
        }

        return $radioBtn;
    }

    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="' . $title . '">';
    }

    public function creteUpdateBtn($title)
    {
        return '<input type="submit" name="update" value="Update">';
    }

    public function toHtml($products)
    {
        $html = '<a href="index.php?action=add&id=0">Add New Product</a><br>';
        $html .= '<table border="1">';
        $html .= '<tr><th>Product Name</th><th>Actions</th></tr>';

        foreach ($products as $product) {
            $html .= '<tr>';
            $html .= '<td>' . $product['product_name'] . '</td>';
            $html .= '<td><a href="index.php?action=edit&id=' . $product['product_id'] . '">Edit</a>';
            $html .= ' | <a href="index.php?action=delete&id=' . $product['product_id'] . '">Delete</a></td>';
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;
    }
}
