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

    public function getLesProjets()
    {
        $req = "SELECT *
                FROM projets";
        $rs = $this->monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }

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

}
