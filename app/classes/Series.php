<?php


namespace App\classes;


class Series
{
    protected $starting_number;
    protected $ending_number;
    protected $min;
    protected $max;
    protected $series;

    public function __construct($post)
    {
        $this->starting_number = $post['starting_number'];
        $this->ending_number = $post['Ending_number'];
        if ($this->starting_number == $this->ending_number) {
            $this->min = $this->starting_number;
            $this->max = $this->starting_number;
            return $this->starting_number;
        } else if ($this->starting_number < $this->ending_number)
        {
            $this->min = $this->starting_number;
            $this->max = $this->ending_number;
        } else
        {
            $this->min = $this->ending_number;
            $this->max = $this->starting_number;
        }
    }

    public function series()
    {
        $this->series = $this->min;
        $this->min++;
        while ($this->min <= $this->max)
        {
            $this->series = $this->series. ", ". $this->min;
            $this->min++;
        }

        return $this->series;
    }

}