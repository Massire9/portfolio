<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MyApp\monPdo;
use Illuminate\Contracts\Container\Container;
use Vedmant\FeedReader\FeedReader;

class navigationPage extends Controller
{
    public function sio()
    {
        return view('sio');
    }

    public function listeProjets()
    {
        $monPdo = new monPdo();
        $lesProjets = $monPdo->getLesProjets();

        $view = view('listeProjets')
            ->with('lesProjets', $lesProjets);
        return $view;
    }

    public function cv()
    {
        $monPdo = new monPdo();
        $lesExperiences = $monPdo->getLesExperiences();
        $lesCompetences = $monPdo->getLesCompetences();
        $lesFormations =  $monPdo->getLaScolarite();

        return view('cv')
                ->with('lesFormations', $lesFormations )
                ->with('lesCompetences', $lesCompetences)
                ->with('lesExperiences', $lesExperiences);
    }

    public function afficherContact()
    {
        $erreurs = null;
        if(!is_array(session('membre')))
        {
            $erreurs[] = "Vous n'êtes pas connecté !";
        }
        $messages = null;
        return view('contact')
            ->with('erreurs', $erreurs)
            ->with('messages', $messages);
    }

    public function afficherVeille()
    {
        $c = new \Illuminate\Container\Container();
        $reader = new FeedReader($c);

        $flux = $reader ->read('http://feeds.feedburner.com/lemondeinformatique/reseau');

        $flux->get_title();
        for($i=0; $i < 4; $i++)
        {
            $titres[] = $flux->get_items()[$i]->get_title();
            $contenus[] = strip_tags($flux->get_items()[$i]->get_content());
            $liens[] = $flux->get_items()[$i]->get_link();
            $dates[] = $flux->get_items()[$i]->get_date();
            preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $flux->get_items()[$i]->get_content(), $r);
        }

        return view('veille')
                ->with('titres', $titres)
                ->with('contenus', $contenus)
                ->with('liens', $liens)
                ->with('dates', $dates);
    }

    public function afficherStages()
    {
        $monPdo = new monPdo();
        $lesStages = $monPdo->getLesStages();
        return view('listeStages')
            ->with('lesStages', $lesStages);
    }

    public function afficherInfos()
    {
        return view('infos');
    }

    public function accueil()
    {
        return view('accueil');
    }
}
