<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Negocios Controller
 *
 * @property \App\Model\Table\NegociosTable $Negocios
 */
class ChallengesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $challenges = [];
        for($i=1;$i<=100;$i++){
            $display = $i;
            $display = $this->mambo($display,15,'Linianos'); 
            $display = $this->mambo($display,5,'IT'); 
            $display = $this->mambo($display,3,'Linio'); 
            $challenges[] = $display;
        }

        //print_r($challenges);     
       $this->set(compact('challenges'));
       $this->set('_serialize', ['challenges']);
    }

    private function mambo($number,$multiple,$msg){
      
        if( !is_string($number) && $number%$multiple==0){
            return $msg;
        }
        return $number;
    }

  
}