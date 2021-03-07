<?php 

    $data = getData();

?>
<section class="developer-tabs">
    <div class="container">

        <div class="tab">
            
            <?php 
                $i = 0;
                foreach($data['tabs'] as $tab): 
                if($i == 0):
            ?>
                <button class="tablinks active" onclick="changeTab(event, <?php echo $i ?>)"><?php echo $tab['title'] ?></button>
            <?php else: ?>
                <button class="tablinks" onclick="changeTab(event, <?php echo $i ?>)"><?php echo $tab['title'] ?></button>
            
            <?php 
                endif;
                $i++;
                endforeach; 
            ?>

        </div>

        <?php 
            $i = 0;
            foreach($data['tabs'] as $tab): 
            if($i == 0):
        ?>
            <div id="tab-<?php echo $i ?>" class="tabcontent active">
                <?php echo $tab['description'] ?>
            </div>

            <?php else: ?>
        
            <div id="tab-<?php echo $i ?>" class="tabcontent">
                <?php echo $tab['description'] ?>
            </div> 
        
            <?php 
                endif;
                $i++;
                endforeach; 
            ?>
            
        
        </div>

    </div>  
</section>