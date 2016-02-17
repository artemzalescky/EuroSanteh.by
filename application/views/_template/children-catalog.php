<?php $ph->include_css('children-catalog.css') ?>

<?php  print_r($nearestChildren)?>

<div class="container marketing">
    <div class="row">
      <?php  foreach($nearestChildren as $catalog) { ?>
    <div class="col-lg-4 catalog">
        <div class="catalog-container">
            <?php
                $ph->link_open($currentCatalog['fullUrl'] . '/' . $catalog['url'], ['class' => '']);

                $ph->image('catalog/'.$catalog['url'].'.jpg', [
                    'class' => 'image-container'
     //               'data-src' => 'holder.js/140x140'
                ]);

                $ph->link_close();

                $ph->link_open($currentCatalog['fullUrl'] . '/' . $catalog['url'])
                ->tag('h3', $catalog['nameRus'], ['class' => 'font'])
                ->tag_close('h4')
            ?>
            <hr>
            <ul style="list-style:none; padding-left:20px; padding-top:-10px;">
                <li><a href="catalog/smesiteli-vanny">Смесители для ванны</a></li>
                <li><a href="catalog/smesiteli-umyvalnik">Смесители для умывальника</a></li>
                <li><a href="catalog/smesiteli-kuhni">Смесители для кухни</a></li>
                <li><a href="catalog/smesiteli-moiki">Смесители для мойки</a></li>


            </ul>
            <?php
    //               ->tag('a', $catalog['nameRus'], ['class' => 'font'])
      //              ->tag_close('a');
            ?>

        </div>

    </div>
<?php }?>
</div>
</div>