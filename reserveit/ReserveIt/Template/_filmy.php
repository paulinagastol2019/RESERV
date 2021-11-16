<?php
$filmy_shuffle = $filmy->getData();
?>

<section class="kategorie">
    <div class="container">
        <h4 class="pt-4">Kategorie</h4>
        <hr>
        <div id="filruj" role="group" aria-label="Kategorie">
            <button class="btn my-2" data-filter="*">Wszystkie</button>
            <button class="btn border my-2" data-filter=".Scifi">Sci-fi</button>
            <button class="btn border my-2" data-filter=".Komedie">Komedie</button>
            <button class="btn border my-2" data-filter=".Dramat">Dramat</button>
            <button class="btn border my-2" data-filter=".Edukacyjne">Edukacyjne</button>
            <button class="btn border my-2" data-filter=".Akcja">Akcja</button>
            <button class="btn border my-2" data-filter=".Animowane">Animowane</button>
        </div>
</section>

<section class="filmy">
    <div class="grid">
        <div class="grid-item border border-2 px-5 py-5">
            <?php array_map(function($item){?>
                <div class="item py-3 px-3 d-inline-block <?php echo $item['gatunek_filmu'] ?? "Gatunek";?>" style="max-width:250px;">
                    <div class="film ">
                        <img src="<?php echo $item['obrazek'] ?? "./images/filmy/filmy1dramat.jpg";?>" alt="plakat filmu" class="img-fluid">
                        <div class="text-center py-3">
                            <h6><?php echo $item['tytul'] ?? "Nieznany";?></h6>
                            <button type="submit" class="btn btn-warning font-size-10 my-1">Zarezerwuj teraz</button>
                        </div>
                    </div>
                </div>
            <?php }, $filmy_shuffle)?>
        </div>
    </div>

</section>
</main>