<?php

/* 
 * Copyright (C) 2016 André Karlsson <andre@sess.se>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @author Andre Karlsson <andre@sess.se>
 */
namespace Application;

error_reporting(E_ALL);

use Phalcon\Di;
use Library\Tools\Application\ApplicationBase;
use Library\Tools\Rcon\Rcon;


class Application extends ApplicationBase 
{
    
 
    private $gameWatcher;
    //Moved to Abstract class pontare
    /*
    public function __construct(\Phalcon\DiInterface $dependencyInjector = null) {
       parent::__construct($dependencyInjector);
    }
    */
    
    public function execute(){
        
        $logdata='';
        //Infinitive loop for now
        //$this->di['rcon']->authenticate('192.168.110.25',27015,'qwerty1234!');
        //$this->di['rcon']->send('mp_restartgame 1');
        
        //$gameWatcher=$this->di['gameWatcher'];
        //$hapWatcher=$this->di['hapWatcher'];
        
        $timeCursor = microtime(true);
        
        while(true) {
            $logdata=$this->di['udpsocket']->recvFrom();
            $data=$logdata[0];
            $ip=$logdata[1];
            
            if (!empty($data)) {
               $happening=  rtrim(substr($data,5));
               echo $happening . ':' . $ip . PHP_EOL;
               
               //echo var_dump($hapWatcher->decodeGameHap($happening));
               
               if ($this->di['gameWatcher']->getWarden($ip) != NULL) {                      //Are there a warden running for the happening source?
                   $this->di['gameWatcher']->getWarden($ip)->manageHaps($happening);        //Manage the Happenings in the log stream using the correct warden.
               }
               
            }
            
            //Extremely crude way of running timed tasks! Need method executor queue!!!
            usleep(50000);
            $currentTime = microtime(true);
            
            if ($timeCursor + 2 <= $currentTime) {
                $timeCursor = $currentTime;
                $this->di['gameWatcher']->status();
            }
            
            $data=FALSE;
            $ip=FALSE;
        }
    }
}