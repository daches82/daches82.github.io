<?php
class Calculadora {

    public $ind;
	public $xanth;
	public $anthacid;
	public $kyn3oh;
	public $chlorokyn;
	
	public $pr1;
	public $pr2;
	public $pr3; 
	public $pr4;
	public $pr5;
    
	public function setPr2() {
		$this->ind = $_POST["ind"];
		$this->xanth =  $_POST["xanth"];
		$this->anthacid =  $_POST["anthacid"];
		$this->kyn3oh =  $_POST["kyn3oh"];
		$this->chlorokyn =  $_POST["chlorokyn"];
        $this->pr2=round((exp(-14.40+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-14.4+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)))-(exp(-15.93+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-15.93+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn))),2);
        echo $this->pr2;




    }
    public function setPr3() {
    	$this->ind = $_POST["ind"];
		$this->xanth =  $_POST["xanth"];
		$this->anthacid =  $_POST["anthacid"];
		$this->kyn3oh =  $_POST["kyn3oh"];
		$this->chlorokyn =  $_POST["chlorokyn"];
    	$this->pr3 =round((exp(-15.93+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-15.93+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)))-(exp(-18.46+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-18.46+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn))),2);
    	 echo $this->pr3;
 

    }
	public function setPr4() {
		$this->ind = $_POST["ind"];
		$this->xanth =  $_POST["xanth"];
		$this->anthacid =  $_POST["anthacid"];
		$this->kyn3oh =  $_POST["kyn3oh"];
		$this->chlorokyn =  $_POST["chlorokyn"];
		$this->pr4 =round((exp(-18.46+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-18.46+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)))-(exp(-19.0+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-19.0+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn))),2);
		 echo $this->pr4;
	

	}
	public function setPr5() {
		$this->ind = $_POST["ind"];
		$this->xanth =  $_POST["xanth"];
		$this->anthacid =  $_POST["anthacid"];
		$this->kyn3oh =  $_POST["kyn3oh"];
		$this->chlorokyn =  $_POST["chlorokyn"];
		$this->pr5 =round((exp(-19.0+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-19.0+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn))),2);
		 echo $this->pr5;


	}
	public function setPr1() {
		$this->pr1=round(1-(exp(-14.40+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn)/(1+exp(-14.4+0.14*$this->ind+11.71*$this->xanth-0.69*pow($this->xanth,2)-0.25*$this->kyn3oh-0.28*$this->anthacid-12.64*$this->chlorokyn-0.061*$this->ind*$this->xanth+0.0039*$this->ind*pow($this->xanth,2)+0.049*$this->ind*$this->chlorokyn))),2);
		echo $this->pr1;
	}
}


