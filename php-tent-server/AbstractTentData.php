<?php
/**
 * Models persistent user, post, auth, and server configuration data.
 */
abstract class AbstractTentData {

  /**
   * This user's profile
   * @return stdClass
   */
  function getProfile();
  
}