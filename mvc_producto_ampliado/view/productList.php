
<main>
        <section>
            <?php foreach($product as $p){ ?>
                <ul class="list-group">
                    <li class="list-group-item"><b>Código</b>:<?php echo $p->getCod();?></li>
                    <li class="list-group-item"><b>Short Name:</b> <?= $p->getShort_name();?></li>
                    <li class="list-group-item"><b>PVP:</b> <?= $p->getPvp();?></li>
                    <li class="list-group-item"><b>Nombre:</b> <?= $p->getName();?></li>
                </ul>
                <hr>
            <?php } ?>
        </section>
    </main>