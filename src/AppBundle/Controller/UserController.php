<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\Type\UserType;

/**
*@Route("/user")
*/

class UserController extends Controller{
  /**
   * @Route()
   * @Method("GET")
   */

   public function indexAction()
   {
     # code...
   }

   /**
    * @Route("/account", name="user_account")
    */
    public function accountAction()
    {
      # code...
    }

   /**
    * @Route("/password", name="user_password")
    */
    public function passwordAction()
    {
      # code...
    }

    /**
     * @Route("/estate", name="user_estate")
     */
     public function estate_indexAction()
     {
       # code...
     }

   /**
    * @Route("/estate/create", name="user_estate_create")
    */
    public function estate_createAction()
    {
      # code...
    }

    /**
     * @Route("/estate/{id}", name="user_estate_show")
     */
     public function estate_showAction()
     {
       # code...
     }

   /**
    * @Route("/estate/{id}/delete", name="user_estate_delete")
    */
    public function estate_deleteAction()
    {
      # code...
    }

  /**
   * @Route("/estate/{id}/photo/create", name="user_photo_create")
   */
   public function photo_createAction()
   {
     # code...
   }

   /**
    * @Route("/estate/{id}/photo/delete", name="user_photo_delete")
    */
    public function photo_deleteAction()
    {
      # code...
    }




}
