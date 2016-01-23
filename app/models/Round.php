<?php

class Round extends \Phalcon\Mvc\Model
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
    public $event_text;

    /**
     *
     * @var string
     */
    public $event_time;

    /**
     *
     * @var string
     */
    public $kill_id;

    /**
     *
     * @var string
     */
    public $attack_id;

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
        $this->belongsTo('kill_id', 'PlayerKill', 'id', array('alias' => 'PlayerKill'));
        $this->belongsTo('map_id', 'Maps', 'id', array('alias' => 'Maps'));
        $this->belongsTo('match_id', 'Matchs', 'id', array('alias' => 'Matchs'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Round[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Round
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
        return 'round';
    }

}
