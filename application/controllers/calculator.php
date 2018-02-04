<?php
    class User extends Ci_controller
    {
        public function index($n1,$n2)
        {
            $sum=$n1+$n2;
            echo "ผลรวม =".$sum;
        }
    }