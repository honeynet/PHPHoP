<?php

function eval_interesting($qs) 
{
  $decoded_qs=urldecode($qs);
  $double_decoded_qs=urldecode($decoded_qs);

  if (ereg('(wget|id|curl|echo|ftp|cat|http://)',$qs.$decoded_qs.$double_decoded_qs)) {
    return true;
  }

  return false;
}

?>