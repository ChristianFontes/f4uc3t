<?php

// Anti Bot Links 2.00
// by bit.makejar.com NeedIfFindIt https://bitcointalk.org/index.php?action=profile;u=391838
// working demo at http://bit.makejar.com/labs/anti-bot-links-200/
// instructions at http://bit.makejar.com/labs/anti-bot-links-200/install.php

class antibotlinks {
  var $link_count=3;
  var $links_data=array();
  var $link_counter=0;
  var $use_gd=true;
  public function antibotlinks($use_gd=true) {
    $this->use_gd=$use_gd;
  }

  public function generate($link_count=3, $force_regeneration=false) {
    $this->link_count=$link_count;
    if ((!$force_regeneration)&&
        (isset($_SESSION['antibotlinks']))&&
        (is_array($_SESSION['antibotlinks']))&&
        ((isset($_POST['antibotlinks']))||($_SESSION['antibotlinks']['time']>time()-180))) {
      return true;
    }
    if ($this->link_count<3) {
      $this->link_count=3;
    }
    if ($this->link_count>5) {
      $this->link_count=5;
    }
    $word_universe=array();
    $word_universe[]=array('one'=>'7-6', 'two'=>'1+1', 'three'=>'1*3', 'four'=>'9-5', 'five'=>'5', 'six'=>'3*3', 'seven'=>'7', 'eight'=>'2+6', 'nine'=>'10-1', 'ten'=>'2*5');
    $word_universe[]=array('2-1'=>'one', '1+1'=>'two', '3*1'=>'three', '2*2'=>'four', '10-5'=>'five', '2*3'=>'six', '3+4'=>'seven', '10-2'=>'eight', '9*1'=>'nine', '5*2'=>'ten');
    $word_universe[]=array('0n3'=>'I', 'tW0'=>'II', '2+1'=>'III', 'f0uR'=>'IV', '3+2'=>'V', 'S1X'=>'VI', '10-3'=>'VII', '2*4'=>'VIII', '10-1'=>'IX', '10'=>'X');
    $word_universe[]=array('cat'=>'c@t', 'dog'=>'d0g', 'lion'=>'li0n', 'tiger'=>'t!ger', 'monkey'=>'m0nkey', 'elephant'=>'e1eph@nt', 'cow'=>'c0w', 'fox'=>'f0x', 'mouse'=>'m0use', 'ant'=>'@nt');
    $word_universe[]=array('2-1'=>'1', '1+1'=>'2', '1+2'=>'3', '2+2'=>'4', '3+2'=>'5', '2+4'=>'6', '3+4'=>'7', '4+4'=>'8', '1+8'=>'9', '5+5'=>'10');
    $word_universe[]=array('1'=>'3-2', '2'=>'8-6', '3'=>'1+2', '4'=>'3+1', '5'=>'9-4', '6'=>'3+3', '7'=>'6+1', '8'=>'2*4', '9'=>'3+6', '10'=>'2+8');
    $word_universe[]=array('--x'=>'OOX', '-x-'=>'OXO', 'x--'=>'XOO', 'xx-'=>'XXO', '-xx'=>'OXX', 'x-x'=>'XOX', '---'=>'OOO', 'xxx'=>'XXX', 'x-x-'=>'XOXO', '-x-x'=>'OXOX');
    // I hope every faucet owner will make his own word universes
    // that way there will be no single solution to attack all the faucets with the same bot
    // keep 10+ items in the universe arrays
    // keep the part before => short
    // puzzle the people with math and logic instead with complicated language

    $universe_number=mt_rand(0, count($word_universe)-1);
    $universe=$word_universe[$universe_number];

    $antibotlinks_solution='';

    $used_keywords_array=array();

    $antibotlinks_array=array();
    $antibotlinks_array['links']=array();
    for ($z=0;$z<$this->link_count;$z++) {
      $random_number=mt_rand(1000, 9999);
      $antibotlinks_solution.=$random_number.' ';

      // Choose the keyword
      do {
        $keyword=array_rand($universe, 1);
      } while (isset($used_keywords_array[$keyword]));
      $used_keywords_array[$keyword]=1;

      $antibotlinks_array['links'][$z]['link']='<a href="/" rel="'.$random_number.'" class="antibotlinks">'.$universe[$keyword].'</a>';
      $antibotlinks_array['links'][$z]['keyword']=$keyword;
    }

    $info_array=array();
    foreach ($antibotlinks_array['links'] as $link) {
      $info_array[]=$link['keyword'];
    }

    if ($this->use_gd) {
      ob_start();
      $im = imagecreatetruecolor($this->link_count*50, 16);
      $black = imagecolorallocate($im, 0, 0, 0);
      $white = imagecolorallocate($im, 1, 1, 1);
      imagecolortransparent($im, $black);
      imagestring($im, 3, 1, 1, implode(', ', $info_array), $white);
      imagepng($im);
      $imagedata = ob_get_contents();
      ob_end_clean();
      $antibotlinks_array['info']='Click in the following order <img src="data:image/png;base64,'.base64_encode($imagedata).'" alt="" width="'.($this->link_count*50).'" height="16"/>';
    } else {
      $antibotlinks_array['info']='Click in the following order '.implode(', ', $info_array);
    }

    shuffle($antibotlinks_array['links']);

    $antibotlinks_array['time']=time();
    $antibotlinks_array['solution']=trim($antibotlinks_solution);

    if (!$force_regeneration) {
      $antibotlinks_array['valid']=true;
    }

    $_SESSION['antibotlinks']=$antibotlinks_array;
    return true;
  }

  public function check() {
    if ((trim($_POST['antibotlinks'])==$_SESSION['antibotlinks']['solution'])&&(!empty($_SESSION['antibotlinks']['solution']))) {
      $_SESSION['antibotlinks']['valid']=true;
    } else {
      $_SESSION['antibotlinks']['valid']=false;
    }
    return $_SESSION['antibotlinks']['valid'];
  }

  public function show_link() {
    if (!empty($_SESSION['antibotlinks']['links'][$this->link_counter]['link'])) {
      echo $_SESSION['antibotlinks']['links'][$this->link_counter]['link'].'<br />';
    }
    $this->link_counter++;
  }

  public function show_info() {
    echo '<p class="alert alert-info">'.$_SESSION['antibotlinks']['info'].'</p>';
  }

  public function is_valid() {
    return $_SESSION['antibotlinks']['valid'];
  }

  public function get_link_count() {
    return count($_SESSION['antibotlinks']['links']);
  }

}

?>