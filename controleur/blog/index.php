<?php
define('PAGINATION', 3);
define('MON_APP', "http://localhost:8888/ScriptsAvances/iut-blog");


include_once('controleur/blog/tools.php');

include_once('modele/blog/blog.php');

// On a soumis un formulaire à l'application
if (isset($_POST['action'])) {
    //Ajout d'un billet
    if ($_POST['action'] == 'add') {
        //Récupération des paramètres
        if($_POST['publie'] == 'on') $publie = 1;
        else $publie = 0;
        $titre = $_POST['titre'];
        $message = $_POST['Message'];
        $date = $_POST['date'];
        //Transformation des tags en tableau
        $tags = explode(' ', $_POST['tags']);
        //On souhaite ajouter un nouveau billet en base
        ajouter_billet($titre, $message, $date, $publie);
        //On traite les tags
        foreach($tags as $tag){
            //Si le tag est nouveau, on l'ajoute à la base
            if(tag_exist($tag)==0){
                add_new_tag($tag);
            }
            //On récupère l'ID du tag inséré
            $tag_id = get_tag_by_name($tag)['id'];
            //On récupère l'ID du billet créé
            $billet_id = get_last_billet()['id'];
            //On créé l'enregistrement dans la table intermédiaire
            add_tag_to_billet($billet_id, $tag_id);
        }
    }
    else if ($_POST['action'] == 'mod') {
        if($_POST['publie'] == 'on') $publie = 1;
        else $publie = 0;
        $titre = $_POST['titre'];
        $message = $_POST['Message'];
        $date = $_POST['date'];
        // on souhaite ajouter une nouvelle URL en base
        update_billet($_POST['id'], $titre, $message, $date, $publie);
    }
}
else if ($_GET != array()) {
    if($_GET['action']=='delete'){
        //suppression du commentaire
        $id = $_GET['id'];
        suppression_billet($id);
    }
    else if($_GET['action']=='mod'){
        //suppression du commentaire
        $id = $_GET['id'];
        $billet_upd = get_billet_by_id($id);
    }
}

        
$current_page = isset($_GET['p']) ? (intval($_GET['p'])!=0 ? intval($_GET['p']) : 1) : 1;

if($_GET['getBillets']=='NotPublished')
    $total = get_nb_billets(0);
else
    $total = get_nb_billets(1);

$nb_page = ceil($total / PAGINATION);

if($_GET['getBillets']=='NotPublished'){
    $billets_temp = get_not_published_billets(($current_page-1)*PAGINATION);
}
else{
    $billets_temp = get_published_billets(($current_page-1)*PAGINATION);
}

foreach($billets_temp as $v){
    $billets[sizeOf($billets)] = $v;
    $billets[sizeOf($billets)] = get_tags_from_billet($v["id"]);
}   