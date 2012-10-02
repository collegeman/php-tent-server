<?php
/**
 * Interface for modeling access to Tent.io user and server data.
 */
interface iTentData {

  /**
   * This user's profile
   * @return stdClass
   */
  function getProfile();
  
}