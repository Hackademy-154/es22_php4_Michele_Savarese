<?php
abstract class Cpu {
    abstract public function cpuType();
}

class IntelCpu extends Cpu{
    public function cpuType(){
        echo "-Processore Intel. ;) $$$ \n";
    }
}

class AmdCpu extends Cpu{
    public function cpuType(){
        echo "-Processore Amd. I'm sweating. \n";
    }
}

class ArmCpu extends Cpu{
    public function cpuType(){
        echo "-Processore Arm. Just fits in your hands. \n";
    }
}

class PowerPc extends Cpu{
    public function cpuType(){
        echo "-Processore PowerPc. I do not feel old yet. \n";
    }
}



abstract class Gpu {
    abstract public function gpuType();
}

class Nvidia extends Gpu{
    public function gpuType(){
        echo "-Scheda video Nvidia. Tua Nvidia mia la Frza. \n";
    }
}

class AmdGpu extends Gpu{
    public function gpuType(){
        echo "-Scheda video Amd. I'm sweating.  \n";
    }
}

class ArmGpu extends Gpu{
    public function gpuType(){
        echo "-Scheda video Arm. Just fits in your hands. \n";
    }
}

class IntelGpu extends Gpu{
    public function gpuType(){
        echo "-Scheda video Intel. :( - NoMoneyNoPower. \n";
    }
}



abstract class Memory {
    abstract public function memoryType();
}

class HDD extends Memory{
    public function memoryType(){
        echo "-Unità di memoria HDD. Hard drive, not drive hard. \n";
    }
}

class SSD extends Memory{
    public function memoryType(){
        echo "-Unità di memoria SSD. Drive Faster, not harder.  \n";
    }
}

class USB extends Memory{
    public function memoryType(){
        echo "-Unità di memoria USB. From fat to ExtraFat. \n";
    }
}

class EHDD extends Memory{
    public function memoryType(){
        echo "-Unità di memoria External HdD. You life wher ever you want. \n";
    }
}

class Computer{
    public $cpu, $gpu, $memory;
    public function __construct(Cpu $processore,Gpu $schedavideo,Memory $memoria)
    // public function __construct( $processore, $schedavideo, $memoria)

    {
        $this->cpu= $processore;
        $this->gpu=$schedavideo;
        $this->memory=$memoria;
    }

    public function getCpu(){
        $this->cpu->cpuType();
    }

    public function getGpu(){
        $this->gpu->gpuType();
    }
    public function getMemory(){
        $this->memory->memoryType();
    }
    public function showComponents() {
        echo "Componenti del computer:\n";
        $this->getCpu();
        $this->getGpu();
        $this->getMemory();
    }

}

$IMeanTheBudget= new Computer(new IntelCpu(),new IntelGpu(),new SSD());
// var_dump($IMeanTheBudget);
$IMeanTheBudget->showComponents();

?>