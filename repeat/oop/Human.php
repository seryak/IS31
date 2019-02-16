class chelovek {
    public $rost;
    public $ves;
    public $vozrost;
    public $pol;
    public $dr;
    public $name;
    public $surename;
    public function __constructor($name,$surename){
        $this->$name= $name ;
        $this->$surename=$surename;
    }
}
 $Layla= new chelovek("Layla");
Layla->$rost=158;
Layla->$ves=10;
Layla->$vozrost=17;
Layla->$pol="women";
Layla->$dr=12.06.200;
