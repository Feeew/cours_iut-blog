<?php
function get_published_billets($offset = 0, $limit = PAGINATION)
{
    global $bdd;
        
    $sql = 'SELECT * FROM billet WHERE publie = 1  AND date < now() ORDER BY id ASC LIMIT '.$limit.' OFFSET '.$offset; 
    $req = $bdd->prepare($sql);
    $req->execute();
    $blogs = $req->fetchAll();
    
    return $blogs;
}

function get_not_published_billets($offset = 0, $limit = PAGINATION)
{
    global $bdd;
        
    $sql = 'SELECT * FROM billet WHERE publie = 0 OR (publie = 1 AND date > now()) ORDER BY id ASC LIMIT '.$limit.' OFFSET '.$offset; 
    $req = $bdd->prepare($sql);
    $req->execute();
    $blogs = $req->fetchAll();
    
    return $blogs;
}

function get_tags_from_billet($billet_id){
    global $bdd;
        
    $sql = 'SELECT tag.libelle FROM tag, tag_billet WHERE tag.id = tag_billet.tag_id AND :billet_id = tag_billet.billet_id'; 
    $req = $bdd->prepare($sql);
    $req->bindParam(':billet_id', htmlentities($billet_id), PDO::PARAM_STR);
    $req->execute();
    $blogs = $req->fetchAll();
    
    return $blogs;
}

function ajouter_billet($titre, $message, $date, $publie) 
{
    global $bdd;

    $sql = "INSERT INTO billet(titre, contenu, date, publie) VALUES (:titre, :message, :ma_date, :publie)";
    $req = $bdd->prepare($sql);

    $req->bindParam(':titre', htmlentities($titre), PDO::PARAM_STR);
    $req->bindParam(':message', htmlentities($message), PDO::PARAM_STR);
    $req->bindParam(':ma_date', $date, PDO::PARAM_STR);
    $req->bindParam(':publie', $publie, PDO::PARAM_STR);

    $req->execute();
}

function suppression_billet($id) 
{
    global $bdd;

    $sql = 'DELETE FROM billet WHERE id = :id';
    $req = $bdd->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);

    $req->execute(); 
}

function update_billet($id, $titre, $message, $date, $publie) 
{
    global $bdd;

    $sql = 'UPDATE billet SET titre=:titre, contenu = :message, date = :date, publie=:publie WHERE id = :id';
    $req = $bdd->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->bindParam(':titre', htmlentities($titre), PDO::PARAM_STR);
    $req->bindParam(':message', htmlentities($message), PDO::PARAM_STR);
    $req->bindParam(':date', htmlentities($date), PDO::PARAM_STR);
    $req->bindParam(':publie', htmlentities($publie), PDO::PARAM_STR);

    $req->execute();
}

function get_billet_by_id($id) 
{
    global $bdd;

    $sql = 'SELECT * FROM billet WHERE id = :id';
    $req = $bdd->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_STR);

    $req->execute(); 

    $billet = $req->fetch();

    return $billet;
}

function get_nb_billets($publie)
{
    global $bdd;
        
    if($publie){
        $sql = 'SELECT count(*) FROM billet WHERE publie = 1 && date < now()'; 
    }
    else{
        $sql = 'SELECT count(*) FROM billet WHERE publie = 0 OR (publie = 1 AND date > now())';
    }
    $req = $bdd->prepare($sql);
    $req->execute();
    $urls_number = $req->fetchColumn();
    
    return $urls_number;
}

function tag_exist($nom)
{
    global $bdd;
        
    $sql = 'SELECT count(*) FROM tag WHERE libelle = :nom';
    $req = $bdd->prepare($sql);
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->execute();

    $tag_exist = $req->fetchColumn();
    
    return $tag_exist;
}

function add_new_tag($nom){
    global $bdd;

    $sql = "INSERT INTO tag(libelle) VALUES (:libelle)";
    $req = $bdd->prepare($sql);

    $req->bindParam(':libelle', htmlentities($nom), PDO::PARAM_STR);

    $req->execute();
}

function get_tag_by_name($nom) 
{
    global $bdd;

    $sql = 'SELECT * FROM tag WHERE libelle = :libelle';
    $req = $bdd->prepare($sql);
    $req->bindParam(':libelle', $nom, PDO::PARAM_STR);

    $req->execute(); 

    $billet = $req->fetch();

    return $billet;
}

function get_last_billet() 
{
    global $bdd;

    $sql = 'SELECT * from billet where id = (select MAX(id) FROM billet)';
    $req = $bdd->prepare($sql);

    $req->execute(); 

    $billet = $req->fetch();

    return $billet;
}



function add_tag_to_billet($billet_id, $tag_id){
    global $bdd;

    $sql = "INSERT INTO tag_billet(billet_id, tag_id) VALUES (:billet_id, :tag_id)";
    $req = $bdd->prepare($sql);

    $req->bindParam(':billet_id', $billet_id, PDO::PARAM_STR);
    $req->bindParam(':tag_id', $tag_id, PDO::PARAM_STR);

    $req->execute();
}
