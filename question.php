<?php

class question {
	private $question;
    private $alternatives;
    private $points;
    private $type;
    
    public function __construct($question,$alternatives,$type,$points=1) {
		if (is_string($question)) {
			$this->question = $question;
		}
		else {
			throw new InvalidArgumentException('$question should be a string.');			
		}		
        if (is_array($alternatives)) {
            $this->alternatives=$alternatives;
        }
        else {
            throw new InvalidArgumentException('$alternatives should be an array.');
        }
        if (is_numeric($points)) {
            $this->points=$points;
        }
		else {
			throw new InvalidArgumentException('$points should be numeric.');
		} 
		if (is_string($type)) {
			$this->type = $type;
		}
		else {
			throw new InvalidArgumentException('$type should be a string.');		
        
    		}
	}
	public function getRandomOrder() 
	{
		$tempArr=$this->alternatives;
		shuffle($tempArr);
		return $tempArr;
	}
	public function isCorrect($answer)
	{
		return $answer==$this->alternatives[0];
	}
	public function getQuestion() {
		return $this->question;
	}
	public function getType() {
		return $this->type;
	}
}