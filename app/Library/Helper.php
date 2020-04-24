<?php
 function switchAction($routeName)
    {
        switch ($routeName) {
            case 'categories.index':
                return 'add-product-category';
                break;
            
            default:
                return '';
                break;
        }
    }
?>