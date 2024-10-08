<?php


abstract class Cpu {
abstract public function cpuType();

}

class Intel extends Cpu{
public function cpuType(){
echo "-Processore Intel. ;) $$$ \n";
}

}

class Amd extends Cpu{
    public function cpuType(){
    echo "-Processore Amd. I'm sweating. \n";
    }
    }

    class Arm extends Cpu{
        public function cpuType(){
        echo "-Processore Arm. Just fits in your hands. \n";
        }
        }

        class PowerPc extends Cpu{
            public function cpuType(){
            echo "-Processore PowerPc. I do not feel old yer. \n";
            }
            }

?>
