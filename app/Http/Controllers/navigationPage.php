<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyApp\monPdo;

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
}
