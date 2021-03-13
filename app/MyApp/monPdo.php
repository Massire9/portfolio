<?php
namespace App\MyApp;
use mysql_xdevapi\Exception;
use PDO;
use Illuminate\Support\Facades\Config;
class monPdo
{
    private static $serveur;
    private static $bdd;
    private static $user;
    private static $mdp;
    private $monPdo;

    /**
     * crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    public function __construct()
    {

        self::$serveur = 'mysql:host=' . Config::get('database.connections.mysql.host');
        self::$bdd = 'dbname=' . Config::get('database.connections.mysql.database');
        self::$user = Config::get('database.connections.mysql.username');
        self::$mdp = Config::get('database.connections.mysql.password');
        $this->monPdo = new PDO(self::$serveur . ';' . self::$bdd, self::$user, self::$mdp);
        $this->monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        $this->monPdo = null;
    }


    /**
     * Retourne les informations d'un visiteur
     * @param $login
     * @param $mdp
     * @return l'id, le nom et le prénom sous la forme d'un tableau associatif
     */



    public function getUnMembre($login, $mdp)
    {
        $req = "SELECT *
                FROM membre
                WHERE login = '$login' AND mdp = '$mdp'";
        $rs = $this->monPdo->query($req);
        $laLigne = $rs->fetch();
        return $laLigne;
    }

    public function getLesMembre()
    {
        $req = "SELECT *
                FROM membre";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }

    public function inscription($nom, $prenom, $mail, $login, $mdp, $tel)
    {
        $req = "INSERT INTO membre(nom, prenom, mail, login, mdp, telephone, role) values ('$nom', '$prenom', '$mail', '$login', '$mdp', '$tel', 0)";
        $this->monPdo->exec($req);
    }

    ///
    ///Competence
    ///

    public function getLesCompetences()
    {
        $req = "SELECT *
                FROM competences
                ORDER BY ordre ASC";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }
    public function getUneCompetence($id)
    {
        $req = "SELECT *
                FROM competences
                WHERE id = '$id'";
        $rs = $this->monPdo->query($req);
        $laLigne = $rs->fetch();
        return $laLigne;
    }

    public function majCompetence($id, $nom, $descripion, $ordre)
    {
        $req = "UPDATE competences
                SET nom = '$nom', description = '$descripion', ordre = '$ordre'
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }
    public function ajtCompetence($nom, $descripion, $ordre)
    {
        $req = "INSERT INTO competences(nom, description, ordre) values ('$nom', '$descripion', '$ordre')";
        $this->monPdo->exec($req);
    }

    public function suppCompetence($id)
    {
        $req = "DELETE FROM competences
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }

    ////
    ////Experience
    ////

    public function getLesExperiences()
    {
        $req = "SELECT *
                FROM experiences
                ORDER BY ordre ASC";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }
    public function getUneExperience($id)
    {
        $req = "SELECT *
                FROM experiences
                WHERE id = '$id'";
        $rs = $this->monPdo->query($req);
        $laLigne = $rs->fetch();
        return $laLigne;
    }

    public function majExperience($id, $nom, $date, $descripion, $ordre)
    {
        $req = "UPDATE experiences
                SET nom = '$nom', date = '$date', description = '$descripion', ordre = '$ordre'
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }

    public function ajtExperience($nom, $description, $date, $ordre)
    {
        $req = "INSERT INTO experiences (nom, description, date, ordre) values('$nom', '$description', '$date', '$ordre')";
        $this->monPdo->exec($req);
    }

    public function suppExperience($id)
    {
        $req = "DELETE FROM experiences
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }

    ////
    ////Scolarite
    ////
    public function getLaScolarite()
    {
        $req = "SELECT *
                FROM scolarite
                ORDER BY ordre ASC";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }
    public function getUneFormation($id)
    {
        $req = "SELECT *
                FROM scolarite
                WHERE id = '$id'";
        $rs = $this->monPdo->query($req);
        $laLigne = $rs->fetch();
        return $laLigne;
    }
    public function majScolarite($id, $diplome, $filiere, $ville, $annee, $ordre)
    {
        $req = "UPDATE scolarite
                SET diplome = '$diplome', filiere = '$filiere', ville = '$ville', annee = '$annee', ordre = '$ordre'
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }

    public function ajtScolarite($diplome, $filiere, $annee, $ordre, $ville)
    {
        $req = "INSERT INTO scolarite (diplome, filiere, annee, ordre, ville) values ('$diplome', '$filiere', '$annee', '$ordre', '$ville')";
        $this->monPdo->exec($req);
    }

    public function suppFormation($id)
    {
        $req = "DELETE FROM scolarite
                WHERE id = '$id'";
        $this->monPdo->exec($req);
    }
    ///
    ///Projets
    ///
    public function getLesProjets()
    {
        $req = "SELECT *
                FROM projets";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }

    public function getUnProjet($id)
    {
        $req = "SELECT *
                FROM projets
                WHERE id = '$id'";
        $rs = $this->monPdo->query($req);
        $laLigne = $rs->fetch();
        return $laLigne;
    }
    public function ajtProjet($nom, $desc, $photo)
    {
        $req = "INSERT INTO projets (nom, description, photo) values ('$nom', '$desc', '$photo')";
        $this->monPdo->exec($req);
    }

}
