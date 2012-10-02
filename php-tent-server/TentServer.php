<?php
/**
 * Implements Tent Server API in compliance with Tent.io protocol.
 * @see http://tent.io/docs/app-server
 * @license MIT
 */
class TentServer {

  // an impl of iTentData
  private $_D;
  // an impl of AbstractTentRequest
  private $_R;

  private function __construct(/* iTentData */ $data, /* AbstractTentRequest */ $request) {
    $this->_D = $data;
    $this->_R = $R;
  }

  /**
   * @return AbstractTentResponse
   */
  private function _exec() {
    $function = strtolower($this->_R->getMethod()).ucwords($this->_R->getFunctionName());
    if (strpos($function, '_') === 0) {
      return TentResponse::error(500, 'Invalid Function: '.$function);
    }
    $callable = array($this, $function);
    return call_user_func_array($callable, $this->_R->getPathArgs());
  }

  static function exec(/* iTentData */ $data, /* AbstractTentRequest */ $request) {
    $server = new TentServer($data, $request);
    return $server->_exec();
  }

  /**
   * @return bool
   */
  private function _isAuthorized() {

  }

  /** 
   * @param string Perimission scope
   * @return bool Should return false if TentServer::isAuthorized is false
   * @see http://tent.io/docs/app-auth
   */
  private function _hasScope($scope) {

  }

  /**
   * Before authenticating a user, the application must be registered with
   * the specified Tent entity. The first step is to perform discovery on the provided entity url.
   */
  function head() {

  }

  function postApps() {

  }

  /**
   * Apps can request the user's profile from the server.
   */
  function getProfile() {
    return $this->_D->getProfile();
  }

  /**
   * Apps can add or edit information in a user's profile including 
   * adding new profile info types. Users choose which apps have permission 
   * to make edits and additions to different sections of their profiles.
   */
  function putProfile($type = null) {

  }

  /**
   * Apps can tell a server to follow another entity.
   */
  function postFollowings() {

  }

  /**
   * Apps can also retrieve a list of the entities currently being followed.
   * Apps can request information on the relationship with a specific entity being followed.
   */
  function getFollowings($id = null) {

  }

  /**
   * Apps can request the server stop following a specific entity.
   */
  function deleteFollowings($id) {

  }

  /**
   * Apps can get a list of current followers.
   * Apps can request information on a specific follower.
   */
  function getFollowers($id = null) {

  }

  /**
   * Apps can end the user's relationship with a follower.
   */
  function deleteFollowers($id) {

  }

  /**
   * To follow a user, send a POST request with acceptable licenses, post types, and views, and a path to send post notifications to.
   * @see http://tent.io/docs/server-protocol
   */
  function postFollowers() {

  }

  /**
   * Apps can create posts by sending them to the server. The server will
   * then send notifications to any entities with permission to see the 
   * post and who either requested the post type in their following request
   * or who were mentioned in the post.
   * Apps can create a new post with an attachment and send both to the server. 
   * Files and binary data are usually transferred as attachments to posts.
   */
  function postPosts() {

  }

  /**
   * Apps can retrieve posts. If the request is not authenticated this will
   * return the user's own public posts. If the request is authenticated and
   * the app has been granted the necessary scopes, this will also return the
   * user's non-public posts, posts from entities the user follows, and posts
   * that mention the user.
   * Apps can retrieve a specific post.
   */
  function getPosts($id = null, $attachments = false, $name = null) {

  }

}