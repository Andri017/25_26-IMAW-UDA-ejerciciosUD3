<?php
    function calculaHipotenusa(float $catetoA, float $catetoB):float{
        $hipotenusa = sqrt($catetoA**2+$catetoB**2);
        return round($hipotenusa);
    }
?>