<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{




	public function index()
	{
		DbFactory::start();

	    $utilisateurs = \ORM::for_table('t_utilisateurs')->where('id_utilisateur', '1')->find_one();
	    $competences = \ORM::for_table('t_competences')->find_result_set();
	    $loisirs = \ORM::for_table('t_loisirs')->find_result_set();

		//$experiences_formations = \ORM::for_table('t_experiences')->join('t_formations', array('utilisateur_id', '=', 't_formations.utilisateur_id'))->order_by_desc('dates')->find_result_set();
	    $experiences = \ORM::for_table('t_experiences')->find_result_set();
	    $formations = \ORM::for_table('t_formations')->order_by_desc('dates_f')->find_result_set();
	    $realisations = \ORM::for_table('t_realisations')->find_result_set();

	    #Affichage de la Vue
	        $this->show('default/index', ['utilisateur' => $utilisateurs, 'competences' => $competences, 'loisirs' => $loisirs, 'experiences' => $experiences, 'formations' => $formations, 'realisations' => $realisations ]);
	}

}
