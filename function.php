<?php

    function ljc_dj($a,$b,$c,$d)//等级计算函数
    {

        if(($b==0 && $c==0 && $d==0) && $a!=0)
        {
              echo('<td><b>'.$a.'A</b></td>
            </tr>');
        }
        elseif(($a==0 && $c==0 && $d==0) && ($b!=0))
        {
              echo('<td><b>'.$b.'B</b></td>
            </tr>');
        }
        elseif(($a==0 && $d==0 && $d==0) && ($c!=0))
        {
              echo('<td><b>'.$c.'C</b></td>
            </tr>');
        }
        elseif(($a==0 && $b==0 && $c==0) && ($d!=0))
        {
              echo('<td><b>'.$d.'D</b></td>
            </tr>');
        }
        elseif( ($a!=0 && $b!=0) && ($c==0 && $d==0))
        {
              echo('<td><b>'.$a.'A'.$b.'B</b></td>
            </tr>');
        }
        elseif( ($a!=0 && $c!=0) && ($b==0 && $d==0))
        {
              echo('<td><b>'.$a.'A'.$c.'C</b></td>
            </tr>');
        }
        elseif( ($a!=0 && $d!=0) && ($b==0 && $c==0))
        {
              echo('<td><b>'.$a.'A'.$d.'D</b></td>
            </tr>');
        }
        elseif( ($b!=0 && $c!=0) && ($a==0 && $d==0))
        {
              echo('<td><b>'.$b.'B'.$c.'C</b></td>
            </tr>');
        }
        elseif( ($b!=0 && $d!=0) && ($a==0 && $c==0))
        {
              echo('<td><b>'.$b.'B'.$d.'D</b></td>
            </tr>');
        }
        elseif( ($c!=0 && $d!=0) && ($a==0 && $b==0))
        {
              echo('<td><b>'.$c.'C'.$d.'D</b></td>
            </tr>');
        }
        elseif(($a!=0 && $b!=0 && $c!=0) && $d==0 )
        {
              echo('<td><b>'.$a.'A'.$b.'B'.$c.'C</b></td>
            </tr>');
        }
        elseif(($a!=0 && $b!=0 && $d!=0) && $c==0 )
        {
              echo('<td><b>'.$a.'A'.$b.'B'.$d.'D</b></td>
            </tr>');
        }
        elseif(($a!=0 && $c!=0 && $d!=0) && $b==0 )
        {
              echo('<td><b>'.$a.'A'.$c.'C'.$d.'D</b></td>
            </tr>');
        }
        elseif(($b!=0 && $c!=0 && $d!=0) && $a==0 )
        {
            echo('<td><b>'.$b.'B'.$c.'C'.$d.'D</b></td>
            </tr>');
        }
        elseif($a!=0 && $b!=0 && $d!=0 && $c!=0 )
        {
            echo('<td><b>'.$a.'A'.$b.'B'.$c.'C'.$d.'D</b></td>
            </tr>');
        }


    }

    function ljc_dj_1($a,$b,$c,$d)//等级计算函数
    {

        if(($b==0 && $c==0 && $d==0) && $a!=0)
        {
            $value="$a A";
        }
        elseif(($a==0 && $c==0 && $d==0) && ($b!=0))
        {
              $value="$b B";
        }
        elseif(($a==0 && $d==0 && $d==0) && ($c!=0))
        {
              $value="$c C";
        }
        elseif(($a==0 && $b==0 && $c==0) && ($d!=0))
        {
              $value="$d D";
        }
        elseif( ($a!=0 && $b!=0) && ($c==0 && $d==0))
        {
              $value="$a A $b B";
        }
        elseif( ($a!=0 && $c!=0) && ($b==0 && $d==0))
        {
              $value="$a A $c C";
        }
        elseif( ($a!=0 && $d!=0) && ($b==0 && $c==0))
        {
              $value="$a A $d D";
        }
        elseif( ($b!=0 && $c!=0) && ($a==0 && $d==0))
        {
              $value="$b B $c C";
        }
        elseif( ($b!=0 && $d!=0) && ($a==0 && $c==0))
        {
              $value="$b B $d D";
        }
        elseif( ($c!=0 && $d!=0) && ($a==0 && $b==0))
        {
              $value="$c C $d D";
        }
        elseif(($a!=0 && $b!=0 && $c!=0) && $d==0 )
        {
              $value="$a A $b B $c C";
        }
        elseif(($a!=0 && $b!=0 && $d!=0) && $c==0 )
        {
              $value="$a A $b B $d D";
        }
        elseif(($a!=0 && $c!=0 && $d!=0) && $b==0 )
        {
              $value="$a A $c C $d D";
        }
        elseif(($b!=0 && $c!=0 && $d!=0) && $a==0 )
        {
            $value="$b B $c C $d D";

        }
        elseif($a!=0 && $b!=0 && $d!=0 && $c!=0 )
        {
            $value="$a A $b B $c C $d D";
        }

        return $value;
    }


?>