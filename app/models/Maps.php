<?php

class Maps extends \Phalcon\Mvc\Model
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
    public $map_name;

    /**
     *
     * @var string
     */
    public $score_1;

    /**
     *
     * @var string
     */
    public $score_2;

    /**
     *
     * @var string
     */
    public $current_side;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var string
     */
    public $maps_for;

    /**
     *
     * @var string
     */
    public $nb_ot;

    /**
     *
     * @var string
     */
    public $identifier_id;

    /**
     *
     * @var string
     */
    public $tv_record_file;

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
        $this->hasMany('id', 'MapsScore', 'map_id', array('alias' => 'MapsScore'));
        $this->hasMany('id', 'Matchs', 'current_map', array('alias' => 'Matchs'));
        $this->hasMany('id', 'PlayerKill', 'map_id', array('alias' => 'PlayerKill'));
        $this->hasMany('id', 'Players', 'map_id', array('alias' => 'Players'));
        $this->hasMany('id', 'PlayersHeatmap', 'map_id', array('alias' => 'PlayersHeatmap'));
        $this->hasMany('id', 'Round', 'map_id', array('alias' => 'Round'));
        $this->hasMany('id', 'RoundSummary', 'map_id', array('alias' => 'RoundSummary'));
        $this->belongsTo('match_id', 'Matchs', 'id', array('alias' => 'Matchs'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Maps[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Maps
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
        return 'maps';
    }

}
