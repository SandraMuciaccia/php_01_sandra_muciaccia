<?php

/** TRACCIA 1:

- Installare PHP OK 
- Definisci 4 variabili: 
    - Integer ok
    - Float ok
    - String ok
    - Boolean ok
- A schermo, fai comparire il tipo di dato delle varie variabili. (hint: var_dump o print_r) OK 
- Dichiara 4 costanti come l’esercizio di cui sopra, seguendo le convenzioni di nomenclatura.
- Pusha il codice su un nuovo repository di GitHub (nel repository dell’hackademy) con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto. --> -->
 */

$numeroIntero = 321; 
$_decimale = 45.54;
$string = 'Stringa'; 
$boolean = true; 

var_dump($numeroIntero);
print_r ($_decimale);
var_dump($string);
print_r($boolean);



define ("PI_GRECO", 3.14);
var_dump(PI_GRECO);

define ("NUM_INT", 5);
var_dump(NUM_INT);

define ("STRINGA", "ciao");
var_dump(STRINGA);

define ("PROVABOOLEAN", true); 
var_dump (PROVABOOLEAN);




/** TRACCIA 2
- Date le seguenti variabili:


    $1text = "Marco";
    $text2 = "hai";
    $text.3 = "sete";
    $text4 = "?";
    @text5 = "Perchè";
    $te-xt6 = '$text2';
    $text 7 = 'bevuto';
    $text8 = "tutto"


- correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“
 */


$text = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

// $variabile = "$text $text2 $text3 $text4 $text5 $text2 $text7 $text8";

var_dump("$text $text2 $text3 $text4 $text5 $text2 $text7 $text8"); 



/* TRACCIA 3
$words1 = ['una',67,'vita', 'colle', 'mi', 'rosso', [ 'oscura',   'era',  89,  [ 'mezzo',  [ 'cammin', 'Nel', ['selva', 'la', [ 'via', 'una', true,
          ] ],] ], 'ritrovai', 'per'], 'diritta' ]; 
     
$words2 = [ 
  'elemento1' => 25.89, 
  'elemento2' => 'nostra', 
  'elemento3' => [ 
    'Virgilio', 
    'smarrita', 
    'ché' 
  ] 
]; 

- Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, attraverso l’accesso agli array sopra: 
“Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

HINT:
Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.
*/

$words1 = [
    'una',
    67,
    'vita', 
    'colle', 
    ' mi', 
    'rosso', 
    [ 
      ' oscura', 
      ' era', 
      89, 
      [ 
        ' mezzo', 
        [ 
          'cammin', 
          'Nel', 
          [ 
            ' selva', 
            ' la', 
            [ 
              ' via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
      ' ritrovai', 
      'per' 
    ], 
    ' diritta' 
  ];
  
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
      'Virgilio', 
      ' smarrita', 
      ' ché' 
    ] 
  ];
  
  $results = $words1[6][3][1][1] . $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2['elemento2'] . " " . $words1[2] . $words1[4] . $words1[6][4] . " per " . $words1[6][3][1][2][2][1]. $words1[6][3][1][2][0] . $words1[6][0] . $words2['elemento3'][2] . " la diritta" . $words1[6][3][1][2][2][0] . $words1[6][1] . $words2['elemento3'][1];

  print_r($words1);
  print_r ($words2);
  var_dump($results);