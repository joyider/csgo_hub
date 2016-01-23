<?php

class PlayersSnapshot extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var string
     */
    public $player_id;

    /**
     *
     * @var string
     */
    public $player_key;

    /**
     *
     * @var string
     */
    public $first_side;

    /**
     *
     * @var string
     */
    public $current_side;

    /**
     *
     * @var string
     */
    public $nb_kill;

    /**
     *
     * @var string
     */
    public $assist;

    /**
     *
     * @var string
     */
    public $death;

    /**
     *
     * @var string
     */
    public $point;

    /**
     *
     * @var string
     */
    public $hs;

    /**
     *
     * @var string
     */
    public $defuse;

    /**
     *
     * @var string
     */
    public $bombe;

    /**
     *
     * @var string
     */
    public $tk;

    /**
     *
     * @var string
     */
    public $nb1;

    /**
     *
     * @var string
     */
    public $nb2;

    /**
     *
     * @var string
     */
    public $nb3;

    /**
     *
     * @var string
     */
    public $nb4;

    /**
     *
     * @var string
     */
    public $nb5;

    /**
     *
     * @var string
     */
    public $nb1kill;

    /**
     *
     * @var string
     */
    public $nb2kill;

    /**
     *
     * @var string
     */
    public $nb3kill;

    /**
     *
     * @var string
     */
    public $nb4kill;

    /**
     *
     * @var string
     */
    public $nb5kill;

    /**
     *
     * @var string
     */
    public $pluskill;

    /**
     *
     * @var string
     */
    public $firstkill;

    /**
     *
     * @var string
     */
    public $round_id;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('player_id', 'Players', 'id', array('alias' => 'Players'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayersSnapshot[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayersSnapshot
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'players_snapshot';
    }

}
