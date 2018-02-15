<?php

require_once './Modules/Test/classes/inc.AssessmentConstants.php';

/**
 * Class for error text answers
 *
 * @author Mohammed Helwani <mohammed.helwani@llz.uni-halle.de>
 * @version $Id: $
 * @ingroup    ModulesTestQuestionPool
 *
 */
class assAnswerErrorTextQuestion
{
    /**
     * Array consisting of one errortext-answer
     * E.g. array('text_wrong' => 'Guenther', 'text_correct' => 'Günther', 'points' => 20, 'start_position' => 10, 'error_length' => 4)
     *
     * @var array Array consisting of one errortext-answer
     */
    protected $arrData;

    /**
     * assAnswerErrorText constructor
     *
     * @param string $text_wrong Wrong text
     * @param string $text_correct Correct text
     * @param double $points Points
     * @param int $start_position Points
     * @param int $error_length Points
     *
     */
    public function __construct($text_wrong = "", $text_correct = "", $points = 0.0, $start_position = 0, $error_length = 0)
    {
        $this->arrData = array(
            'text_wrong' => $text_wrong,
            'text_correct' => $text_correct,
            'points' => $points,
			'start_position' => $start_position,
			'error_length' => $error_length
		);
	}

    /**
     * Object getter
     */
    public function __get($value)
    {
        switch ($value) {
            case "text_wrong":
            case "text_correct":
            case "points":
            case "start_position":
            case "error_length":
                return $this->arrData[$value];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * Object setter
     */
    public function __set($key, $value)
    {
        switch ($key) {
            case "text_wrong":
            case "text_correct":
            case "points":
            case "start_position":
            case "error_length":
                $this->arrData[$key] = $value;
                break;
            default:
                break;
        }
    }
}