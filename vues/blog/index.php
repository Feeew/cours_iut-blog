<ul>
<?php

for($i = 0; $i < sizeOf($billets); $i = $i+2){
?>
    <li>
        <h3><?php echo $billets[$i]['titre'];?></h3>
        <span><?php echo $billets[$i]['contenu'];?></span>
        <?php 
        echo "|| Tags : ";
        foreach($billets[$i+1] as $tags){
            echo $tags["libelle"]."&nbsp;&nbsp;&nbsp;";
        }
        ?>
        <br />
        <span>Date de publication : <?php echo $billets[$i]['date'];?></span>
        <br/>
        <a href="?action=delete&id=<?php echo $billets[$i]['id'];?><?php echo ($_GET['getBillets']=='NotPublished') ? '&getBillets=NotPublished' : '';?>">Supprimer</a>
        <a href="?action=mod&id=<?php echo $billets[$i]['id'];?><?php echo ($_GET['getBillets']=='NotPublished') ? '&getBillets=NotPublished' : '';?>">Modifier</a>
    </li>
<?php
}
echo "<br />";

if($_GET['getBillets']=='NotPublished')
    $getBillets = "NotPublished";
else
    $getBillets = "Published";

if($current_page != 1) echo "<a href='?p=".($current_page-1)."&getBillets=".$getBillets."'><<< Precedent</a>";
for($i = 1; $i <= $nb_page; $i++){
        echo "&nbsp;&nbsp;&nbsp;";
        if($i==$current_page) echo "<b>".$i."</b>"; else echo "<a href='?p=".$i."&getBillets=".$getBillets."'>".$i."</a>";
}
 echo "&nbsp;&nbsp;&nbsp;"; 
if($current_page != $nb_page) echo "<a href='?p=".($current_page+1)."&getBillets=".$getBillets."'>Suivant >>></a>";

?>
</ul>