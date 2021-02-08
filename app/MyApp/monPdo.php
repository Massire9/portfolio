<?php
namespace App\MyApp;
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
}
