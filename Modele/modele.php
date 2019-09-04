//Accède à la base de donnée
<?php
    function connexion ()
    {
        $con = mysqli_connect("localhost", "root", "", "autoecole");
        return $con;
    }

    function deconnexion ($con)
    {
        mysqli_close($con);
    }

    function selectAllM ($table)
    {
        $con = connexion();
        $requete = "select * from " .$table. ";";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }

    function selectAllCoursModele()
    {
        $con = connexion();
        $requete = "select cr.idcours, 
        c.nom as nomcandidat, 
        c.prenom as prenomcandidat, 
        m.nom as nommoniteur, 
        m.prenom as prenommoniteur, 
        cr.datedebut as datecours, 
        cr.heuredebut, 
        cr.heurefin 
        from 
        cours cr, 
        candidat c, 
        moniteur m 
        where cr.idmoniteur = m.idmoniteur 
        and 
        cr.idcandidat = c.idcandidat 
        order by 
        datecours;";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }

    function selectAllPrepareModele()
    {
        $con = connexion();
        $requete = "select c.idcandidat,
        c.nom as nomcandidat,
        c.prenom as prenomcandidat,
        p.libelle,
        pr.annee
        from
        candidat c,
        permis p,
        preparer pr
        where
        c.idcandidat = pr.idcandidat
        and p.idpermis = pr.idpermis
        order by annee;";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }

    //Fonction Candidat
    function insertCandidatModele($tab)
    {
        $con = connexion();
        $requete = "insert into candidat values (null, '".$tab["nom"]."',' ".$tab["prenom"]."','".$tab["adresse"]."','".$tab["date"]."',".$tab["montant"].");";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteCandidatModele($idcandidat)
    {
        $con = connexion();
        $requete = "delete from candidat where idcandidat = ".$idcandidat.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdCandidatModele($idcandidat)
    {
        $con = connexion();
        $requete = "select *from candidat where idcandidat = " .$idcandidat. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function updateCandidatModele($tab)
    {
        $con = connexion();
        $requete = "update candidat set nom = '".$tab['nom']."',
        prenom = '".$tab['prenom']."',
        adresse = '".$tab['adresse']."',
        datenaissance = '".$tab['date']."',
        montant = ".$tab['montant']." 
        where idcandidat = ".$tab['idcandidat'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }


    //Fonction moniteur
    function insertMoniteurModele($tab)
    {
        $con = connexion();
        $requete = "insert into moniteur values (null, '".$tab["nom"]."',' ".$tab["prenom"]."','".$tab["qualification"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateMoniteurModele($tab)
    {
        $con = connexion();
        $requete = "update moniteur set nom = '".$tab['nom']."',
        prenom = '".$tab['prenom']."',
        qualification = '".$tab['qualification']."'
        where idmoniteur = ".$tab['idmoniteur'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdMoniteurModele($idmoniteur)
    {
        $con = connexion();
        $requete = "select *from moniteur where idmoniteur = " .$idmoniteur. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function deleteMoniteurModele($idmoniteur)
    {
        $con = connexion();
        $requete = "delete from moniteur where idmoniteur = ".$idmoniteur.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Permis
    function insertPermisModele($tab)
    {
        $con = connexion();
        $requete = "insert into permis values (null, '".$tab["libelle"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updatePermisModele($tab)
    {
        $con = connexion();
        $requete = "update permis set libelle = '".$tab['libelle']."'
        where idpermis = ".$tab['idpermis'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdPermisModele($idpermis)
    {
        $con = connexion();
        $requete = "select *from permis where idpermis = " .$idpermis. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function deletePermisModele($idpermis)
    {
        $con = connexion();
        $requete = "delete from permis where idpermis = ".$idpermis.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Cours
    function insertCoursModele($tab)
    {
        $con = connexion();
        $requete = "insert into cours values (null, null, null,'".$tab["datecours"]."','".$tab["heuredebut"]."','".$tab["heurefin"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateCoursModele($tab)
    {
        $con = connexion();
        $requete = "update permis set idcandidat = '".$tab['idcandidat']."',
        idmoniteur = '".$tab['idmoniteur']."',
        nomcandidat = '".$tab['nom']."',
        prenomcandidat = '".$tab['prenom']."',
        nommoniteur = '".$tab['nom']."',
        prenommoniteur = '".$tab['prenom']."',
        datecours = '".$tab['datecours']."',
        heuredebut = '".$tab['heuredebut']."',
        heurefin = '".$tab['heurefin']."',
        rapport = '".$tab['rapport']."'
        where idcours = ".$tab['idcours'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdCoursModele($idcours)
    {
        $con = connexion();
        $requete = "select *from cours where idcours = " .$idcours. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function deleteCoursModele($idcours)
    {
        $con = connexion();
        $requete = "delete from cours where idcours = ".$idcours.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Preparer
    function insertPreparerModele($tab)
    {
        $con = connexion();
        $requete = "insert into preparer values (null, '".$tab["idcandidat"]."','".$tab["idmoniteur"]."','".$tab["annee"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateListePreparerModele($tab)
    {
        $con = connexion();
        $requete = "update preparer set idcandidat = '".$tab['idcandidat']."',
        idmoniteur = '".$tab['idmoniteur']."',
        annee = '".$tab['annee']."'
        where idpermis = ".$tab['idpermis'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdPreparerModele($idpreparer)
    {
        $con = connexion();
        $requete = "select *from preparer where idpreparer = " .$idpreparer. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function deletePreparerModele($idpreparer)
    {
        $con = connexion();
        $requete = "delete from preparer where idpermis = ".$idpermis.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }
?>