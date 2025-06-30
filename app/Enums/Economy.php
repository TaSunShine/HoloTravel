<?php
namespace App\Enums;

/***
 * BOOM , NORMAL, SLUMP, CRISIS
 * 
 */
enum Economy:string{
  case BOOM = 'boom';
  case NORMAL = 'normal';
  case SLUMP = 'slump';
  case CRISIS = 'crisis';
  

}