<?php
  
  // reference link: https://www.onlinecode.org/mysql-comma-separated-column-join-using-php-laravel-laravel/
  $records = Capsule::table('sd_role_product_commission')
    ->select("sd_role_product_commission.*",Capsule::raw("GROUP_CONCAT(distinct tblproducts.name) as productname"), Capsule::raw("GROUP_CONCAT(distinct tbladdons.name) as addonname"), 'tbladminroles.name as role')
    ->join('tbladminroles', 'sd_role_product_commission.roleid', '=', 'tbladminroles.id')
    ->join("tblproducts",Capsule::raw("FIND_IN_SET(tblproducts.id,sd_role_product_commission.productid)"),">",Capsule::raw("'0'"))
    ->join("tbladdons",Capsule::raw("FIND_IN_SET(tbladdons.id,sd_role_product_commission.productaddonid)"),">",Capsule::raw("'0'"))
    ->groupBy('sd_role_product_commission.id')
    ->orderBy('sd_role_product_commission.id', 'DESC')
    ->get();
    
?>
