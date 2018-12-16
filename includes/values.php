<div id="values-grid">
    <div class="values">
        <?php 
            $counter = 0;
            foreach($values as $value) { 
            
        ?>  
            <div id="<?php echo $value->postId ?>" class="value <?php if($counter == 0) { echo 'active'; } ?>">
                <h1 id="#header"><?php echo $value->header ?></h1>
                <div class="hope-definition">
                    <p>
                        <span id="title"><?php echo $value->title ?></span>
                        <br/>
                        <span id="sound"><?php echo $value->sound ?></span>
                        <br/>
                        <i><?php echo $value->type ?></i>
                        <br/>
                        <span id="desc">
                            <?php echo $value->description ?>
                        </span>
                    </p>
                </div>
                <div class="values-navigation">
                    <ul>
                        <li><span class="backwards" data-postId="<?php echo $value->postId ?>"><</span></li>
                        <li><span class="forwards" data-postId="<?php echo $value->postId ?>">></span></li>
                    </ul>
                </div>
            </div>

        <?php 
            $counter++;
            } 
        ?>
        
    </div>
    <div class="values-img">
        <div class="values-submenu">
            <span id="open-values-menu">+</span>
            <span id="close-values-menu">-</span>
            <ul>
            
            <?php 

            $counter = 0;
            foreach($values as $value) { 
            
            ?> 
                <li <?php if($counter == 0) { echo 'class="active"'; } ?>>
                    <?php echo $value->header; ?>
                </li>
            <?php $counter++; } ?>
            </ul>
        </div>
    </div>
</div>