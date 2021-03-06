<?php

class RoundSummary extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $bomb_planted;

    /**
     *
     * @var integer
     */
    public $bomb_defused;

    /**
     *
     * @var integer
     */
    public $bomb_exploded;

    /**
     *
     * @var string
     */
    public $win_type;

    /**
     *
     * @var string
     */
    public $team_win;

    /**
     *
     * @var integer
     */
    public $ct_win;

    /**
     *
     * @var integer
     */
    public $t_win;

    /**
     *
     * @var integer
     */
    public $score_a;

    /**
     *
     * @var integer
     */
    public $score_b;

    /**
     *
     * @var string
     */
    public $best_killer;

    /**
     *
     * @var string
     */
    public $best_killer_nb;

    /**
     *
     * @var integer
     */
    public $best_killer_fk;

    /**
     *
     * @var string
     */
    public $best_action_type;

    /**
     *
     * @var string
     */
    public $best_action_param;

    /**
     *
     * @var string
     */
    public $backup_file_name;

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
        $this->belongsTo('best_killer', 'Players', 'id', array('alias' => 'Players'));
        $this->belongsTo('map_id', 'Maps', 'id', array('alias' => 'Maps'));
        $this->belongsTo('match_id', 'Matchs', 'id', array('alias' => 'Matchs'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundSummary[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RoundSummary
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
        return 'round_summary';
    }

}
