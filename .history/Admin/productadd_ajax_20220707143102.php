<?php 
              $show_brand_ajax = $product->show_brand_ajax();
              if($show_brand){while($result=$show_brand->fetch_assoc()){

            
              ?>
                <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
                <?php 
               }}
?>