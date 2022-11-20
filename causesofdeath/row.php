<?php
declare(strict_types=1);

class Row{

    private string $date;
    private string $causeOfDeath;
    private string $nonViolentDeathCause;
    private string $violentDeathCircumstances;
    private string $violentDeathCause;

    public function __construct(string $date, string $causeOfDeath, string $nonViolentDeathCause, string $violentDeathCircumstances, string $violentDeathCause)
    {

        $this->date = $date;
        $this->causeOfDeath = $causeOfDeath;
        $this->nonViolentDeathCause = $nonViolentDeathCause;
        $this->violentDeathCircumstances = $violentDeathCircumstances;
        $this->violentDeathCause = $violentDeathCause;
    }
    
    public function getDate(): string{
        return $this->date;
    }
    public function getCauseOfDeath(): string{
        return $this->causeOfDeath;
    }
    public function getNonViolentDeathCause(): ?string{
        if (strlen($this->nonViolentDeathCause) === 0) {
            return null;
        }
        return $this->nonViolentDeathCause;
    }
    public function getViolentDeathCircumstances(): ?string{
        if(strlen($this->violentDeathCircumstances) === 0){
            return null;
        }
        return $this->violentDeathCircumstances;
    }

    public function getViolentDeathCause(): ?string{
        if(strlen($this->violentDeathCause) === 0){
            return null;
        }
        return $this->violentDeathCause;
}
}