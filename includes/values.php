<div id="values-grid">
    <div class="values">
        <?php 
            $counter = 0;
            foreach($values as $value) { 
            
        ?>  
            <div class="value <?php if($counter == 0) { echo 'active'; } ?>">
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
                        <li><span id="backwards"><</span></li>
                        <li><span id="forward">></span></li>
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
            <ul>
                <li>do you have hope? <span id="open-values-menu">+</span><span id="close-values-menu">-</span></li>
                <li>can you imagine?</li>
                <li>belief?</li>
                <li>create</li>
            </ul>
        </div>
    </div>
</div>