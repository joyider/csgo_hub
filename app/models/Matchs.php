<?php

class Matchs extends \Phalcon\Mvc\Model
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
    public $ip;

    /**
     *
     * @var string
     */
    public $server_id;

    /**
     *
     * @var string
     */
    public $season_id;

    /**
     *
     * @var string
     */
    public $team_a;

    /**
     *
     * @var string
     */
    public $team_a_flag;

    /**
     *
     * @var string
     */
    public $team_a_name;

    /**
     *
     * @var string
     */
    public $team_b;

    /**
     *
     * @var string
     */
    public $team_b_flag;

    /**
     *
     * @var string
     */
    public $team_b_name;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var integer
     */
    public $is_paused;

    /**
     *
     * @var string
     */
    public $score_a;

    /**
     *
     * @var string
     */
    public $score_b;

    /**
     *
     * @var integer
     */
    public $max_round;

    /**
     *
     * @var string
     */
    public $rules;

    /**
     *
     * @var string
     */
    public $overtime_startmoney;

    /**
     *
     * @var integer
     */
    public $overtime_max_round;

    /**
     *
     * @var integer
     */
    public $config_full_score;

    /**
     *
     * @var integer
     */
    public $config_ot;

    /**
     *
     * @var integer
     */
    public $config_streamer;

    /**
     *
     * @var integer
     */
    public $config_knife_round;

    /**
     *
     * @var integer
     */
    public $config_switch_auto;

    /**
     *
     * @var integer
     */
    public $config_auto_change_password;

    /**
     *
     * @var string
     */
    public $config_password;

    /**
     *
     * @var integer
     */
    public $config_heatmap;

    /**
     *
     * @var string
     */
    public $config_authkey;

    /**
     *
     * @var integer
     */
    public $enable;

    /**
     *
     * @var string
     */
    public $map_selection_mode;

    /**
     *
     * @var integer
     */
    public $ingame_enable;

    /**
     *
     * @var string
     */
    public $current_map;

    /**
     *
     * @var integer
     */
    public $force_zoom_match;

    /**
     *
     * @var string
     */
    public $identifier_id;

    /**
     *
     * @var string
     */
    public $startdate;

    /**
     *
     * @var integer
     */
    public $auto_start;

    /**
     *
     * @var integer
     */
    public $auto_start_time;

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
        $this->hasMany('id', 'Maps', 'match_id', array('alias' => 'Maps'));
        $this->hasMany('id', 'PlayerKill', 'match_id', array('alias' => 'PlayerKill'));
        $this->hasMany('id', 'Players', 'match_id', array('alias' => 'Players'));
        $this->hasMany('id', 'PlayersHeatmap', 'match_id', array('alias' => 'PlayersHeatmap'));
        $this->hasMany('id', 'Round', 'match_id', array('alias' => 'Round'));
        $this->hasMany('id', 'RoundSummary', 'match_id', array('alias' => 'RoundSummary'));
        $this->belongsTo('current_map', 'Maps', 'id', array('alias' => 'Maps'));
        $this->belongsTo('season_id', 'Seasons', 'id', array('alias' => 'Seasons'));
        $this->belongsTo('server_id', 'Servers', 'id', array('alias' => 'Servers'));
        $this->belongsTo('team_a', 'Teams', 'id', array('alias' => 'Teams'));
        $this->belongsTo('team_b', 'Teams', 'id', array('alias' => 'Teams'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Matchs[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Matchs
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
        return 'matchs';
    }

}
