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
        c.prenom as nomcandidat,
        p.libelle,
        pr.annee
        from
        candidat c,
        permis p,
        preparer pr
        where
        c.idcandidat = pr.idcandidat;";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }
?>