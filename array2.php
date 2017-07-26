<?php

$inputString = $argv[1];

$arrayStrings = array(
  'abc',
  'abc3',
  'xfy',
  'ttt',
  'tttt4',
  'abc5',
  'abc10',
  'abc11',
  'abc12',
  'abc13',
  'abc14',
  'abc15',
  'abc16',
  'abc17',
  'abc18',
  'abc19',
  'abc20',
  'abc21',
  'abc22',
  'abc23',
  'abc24',
  'abc25',
  'abc26',
  'xyf4',
  'xyf5',
  'xyf6',
  'xyf7',
  'xyf8'
);

// This only works with sorted arrays
function binarySearch($stringMatch, $array, $low = null, $high = null, $mid = null)
{
  // find the middle
  if ($low === null)
    $low = 0;

  if ($high === null)
    $high = max($array);

  if ($mid === null)
    $mid = $low + ($high - $low) / 2;


  // compare
  if (strcmp($array[$mid], $stringMatch) === 0) { // we have a match
    return true;
  } else if () { // value at mid is bigger than search value

  } else { // value at mid is smaller than search value

  }
  
  // recursive
  binarySearch($stringMatch, $array, $low, $high, $mid);
  return false;
}

// sort

echo "Doing a binary search for: ".$inputString."\n";
echo "Result: " binarySearch($inputString, $arrayStrings) ? "TRUE" : "FALSE";
