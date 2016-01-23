<?php

class PlayerKill extends \Phalcon\Mvc\Model
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
    public $match_id;

    /**
     *
     * @var string
     */
    public $map_id;

    /**
     *
     * @var string
     */
    public $killer_name;

    /**
     *
     * @var string
     */
    public $killer_id;

    /**
     *
     * @var string
     */
    public $killer_team;

    /**
     *
     * @var string
     */
    public $killed_name;

    /**
     *
     * @var string
     */
    public $killed_id;

    /**
     *
     * @var string
     */
    public $killed_team;

    /**
     *
     * @var string
     */
    public $weapon;

    /**
     *
     * @var integer
     */
    public $headshot;

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
        $this->hasMany('id', 'Round', 'kill_id', array('alias' => 'Round'));
        $this->belongsTo('killed_id', 'Players', 'id', array('alias' => 'Players'));
        $this->belongsTo('killer_id', 'Players', 'id', array('alias' => 'Players'));
        $this->belongsTo('map_id', 'Maps', 'id', array('alias' => 'Maps'));
        $this->belongsTo('match_id', 'Matchs', 'id', array('alias' => 'Matchs'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayerKill[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayerKill
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
        return 'player_kill';
    }

}
