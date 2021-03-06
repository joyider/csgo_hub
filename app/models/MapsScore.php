<?php

class MapsScore extends \Phalcon\Mvc\Model
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
    public $map_id;

    /**
     *
     * @var string
     */
    public $type_score;

    /**
     *
     * @var string
     */
    public $score1_side1;

    /**
     *
     * @var string
     */
    public $score1_side2;

    /**
     *
     * @var string
     */
    public $score2_side1;

    /**
     *
     * @var string
     */
    public $score2_side2;

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
        $this->belongsTo('map_id', 'Maps', 'id', array('alias' => 'Maps'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MapsScore[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MapsScore
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
        return 'maps_score';
    }

}
