<?php

require('top.inc.php');
$order_id = get_safe_value($con, $_GET['id']);

if(isset($_POST['update_order_status'])){
    $update_order_status = $_POST['update_order_status'];
    mysqli_query($con,"update `order` set order_status = '$update_order_status' where id = '$order_id'");
}

?>



<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Order Details</h4>

                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Product Name</th>
                                        <th class="product-name"><span class="nobr">Order Data</span></th>
                                        <th class="product-name"><span class="nobr">Qty</span></th>
                                        <th class="product-price"><span class="nobr">Price</span></th>
                                        <th class="product-price"><span class="nobr">Total Price</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $res = mysqli_query($con, "select distinct(order_detail.id),order_detail.*,product.name,product.image,`order`.city,`order`.address,`order`.order_status, `order`.pincode from `order`,order_detail,product where order_detail.order_id = '$order_id' and product.id=order_detail.product_id");
                                    $total_price = 0;
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $address = $row['address'];
                                        $city = $row['city'];
                                        $pincode = $row['pincode'];
                                        $order_status = $row['order_status'];

                                        $total_price += ($row['qty'] * $row['price']);


                                    ?>
                                        <tr>
                                            <td class="product-add-to-cart"><a href="my_order_details.php?id=<?php echo $row['id'] ?>"> <?php echo $row['name'] ?></a></td>
                                            <td class="product-name"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="full-image"></td>
                                            <td class="product-name"><?php echo $row['qty'] ?></td>
                                            <td class="product-name">₹ <?php echo $row['price'] ?></td>
                                            <td class="product-name">₹ <?php echo $row['price'] * $row['qty'] ?></td>

                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="product-name">Total Price</td>
                                        <td class="product-name">₹ <?php echo $total_price ?></td>

                                    </tr>

                                </tbody>

                            </table>
                            <div id="address_details">
                                <strong>&nbsp &nbsp &nbsp Address</strong>
                                <?php echo $address ?> , <?php echo $city ?>, <?php echo $pincode ?><br><br>
                                <strong>&nbsp &nbsp &nbsp Order Status</strong>
                                <?php
                                $order_status_arr = mysqli_fetch_assoc(mysqli_query($con, "select order_status.status from order_status,`order` where `order`.id='$order_id' and `order`.order_status = order_status.id"));
                                echo $order_status_arr['status'];
                                ?>
                                <div>
                                    <form method="post">
                                        <select class="form-control" name="update_order_status">
                                            <option>Select Status</option>
                                            <?php
                                            $res = mysqli_query($con, "select * from order_status");
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                if ($row['id'] == $categories_id) {
                                                    echo "<option selected value=" . $row['id'] . ">" . $row['status'] . "</option>";
                                                } else {
                                                    echo "<option value=" . $row['id'] . ">" . $row['status'] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <input type="submit" class="form-control">
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

require('footer.inc.php');

?>