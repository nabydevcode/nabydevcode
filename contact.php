<?php

$title = "nous-contact";
$nav = "contact";

require ('header.php');
require ('technique/crenneaux.php');


?>

<div class="container">
    <div class="row justify-content-end">
        <div class="col-6">
            <h1> Nous contacter Contacter</h1>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugit eveniet ex saepe, laborum
            quibusdam blanditiis
            commodi reprehenderit dolor facilis voluptas sequi? Veniam at molestias autem corrupti incidunt, sequi
            distinctio.
            Adipisci delectus beatae voluptatibus provident minima cumque hic voluptates doloribus officia pariatur!
            Rerum
            reprehenderit, alias ad ab deleniti earum fugit suscipit quod maxime! Mollitia dolorem adipisci dolorum est
            ipsam
            facilis.

        </div>
        <div class="col-6">
            <h3> les heures d'ouvertures </h3>

            <?php foreach (SCRENNEAUX as $key => $day): ?>

                <li>
                    <?php if (empty($day[0]) && empty($day[1])): ?>
                        fermé
                    <?php else:
                        $debut = $day[0];
                        $fin = $day[1];
                        ?>
                        <?php if (!empty($debut)): ?>
                            ouvert de
                            <?php echo " $debut[0]: h à $debut[1]: h " ?>
                        <?php endif ?>
                        <?php if (!empty($fin)): ?>
                            et de
                            <?php echo "  $fin[0] :h  à $fin[1] :h  " ?>
                        <?php endif ?>
                    <?php endif; ?>
                </li>

            <?php endforeach ?>

        </div>
    </div>

</div>








<?php

require ('footer.php');
?>