<?php
$heredoc = <<< HEREDOC_ID
some $contents
HEREDOC_ID;

function foo() {
   $a = [0, 1, 2];
   return SomeClass::$shared;
}

// Sample comment

use AnotherClass as SomeAlias;
#[Attribute] class SomeClass extends One implements Another {
   #[Attribute(1, 2)] public $my;
   protected $myProtected;
   private $myPrivate;
   public static $shared;
   const CONSTANT = 0987654321;
   /**
    * Description by <a href="mailto:">user@host.dom</a>
    * Semantic highlighting:
    * Generated spectrum to pick colors for local variables and parameters:
    *  Color#1 SC1.1 SC1.2 SC1.3 SC1.4 Color#2 SC2.1 SC2.2 SC2.3 SC2.4 Color#3
    *  Color#3 SC3.1 SC3.2 SC3.3 SC3.4 Color#4 SC4.1 SC4.2 SC4.3 SC4.4 Color#5
    * @template TValue
    * @param $abc
    * @param TValue $def
    * @property $magic
    * @method m()
    * @return SomeType
    */
   function doSmth($abc, $def, int $foo, SomeClass $bar) {
      /** @var SomeAlias $b */
      $b = new SomeAlias();
      foo();
      $def .=  self::magic;
      $def .=  self::CONSTANT;
      $v = Helper::convert(namedArgument: $abc . "\n {$def}" . $$def);
      $q = new Query( $this->invent(abs(0x80)) );
      $q = new Query( $this->protectedInvent(abs(0x80)) );
      $q = new Query( $this->privateInvent(abs(0x80)) );
      $q = $this->createQueryBuilder()
          ->where("p.id <= :id")
          ->setParameter("id", 1);
      return array($v => $q->result);
   }
}

interface Another {
}

include (dirname(__FILE__) . "inc.php");
`rm -r`;

goto Label;

<p><?php echo "Hello, world!"?></p>

Label:
№
