<?php

class PlayersHeatmap extends \Phalcon\Mvc\Model
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
    public $event_name;

    /**
     *
     * @var string
     */
    public $event_x;

    /**
     *
     * @var string
     */
    public $event_y;

    /**
     *
     * @var string
     */
    public $event_z;

    /**
     *
     * @var string
     */
    public $player_name;

    /**
     *
     * @var string
     */
    public $player_id;

    /**
     *
     * @var string
     */
    public $player_team;

    /**
     *
     * @var string
     */
    public $attacker_x;

    /**
     *
     * @var string
     */
    public $attacker_y;

    /**
     *
     * @var string
     */
    public $attacker_z;

    /**
     *
     * @var string
     */
    public $attacker_name;

    /**
     *
     * @var string
     */
    public $attacker_id;

    /**
     *
     * @var string
     */
    public $attacker_team;

    /**
     *
     * @var string
     */
    public $round_id;

    /**
     *
     * @var string
     */
    public $round_time;

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
        $this->belongsTo('attacker_id', 'Players', 'id', array('alias' => 'Players'));
        $this->belongsTo('map_id', 'Maps', 'id', array('alias' => 'Maps'));
        $this->belongsTo('match_id', 'Matchs', 'id', array('alias' => 'Matchs'));
        $this->belongsTo('player_id', 'Players', 'id', array('alias' => 'Players'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayersHeatmap[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlayersHeatmap
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
        return 'players_heatmap';
    }

}
