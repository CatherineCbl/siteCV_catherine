<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	public function index()
	{
		DbFactory::start();

	    $utilisateurs = \ORM::for_table('t_utilisateurs')->find_result_set();
	    $competences = \ORM::for_table('t_competences')->find_result_set();
	    $loisirs = \ORM::for_table('t_loisirs')->find_result_set();
	    $experiences = \ORM::for_table('t_experiences')->find_result_set();
	    $formations = \ORM::for_table('t_formations')->find_result_set();
	    $realisations = \ORM::for_table('t_realisations')->find_result_set();

	    #Affichage de la Vue
	        $this->show('default/index', ['utilisateur' => $utilisateurs, 'competences' => $competences, 'loisirs' => $loisirs, 'experiences' => $experiences, 'formations' => $formations, 'realisations' => $realisations ]);

	}

}
