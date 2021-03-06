<?php
/**
 * --------------------------------------------------------------------------
 * Cartify
 * --------------------------------------------------------------------------
 *
 * Cartify, a shopping cart bundle for use with the Laravel Framework.
 *
 * @package  Cartify
 * @version  2.0.0
 * @author   Bruno Gaspar <brunofgaspar1@gmail.com>
 * @link     https://github.com/bruno-g/cartify
 */

namespace Cartify;

/**
 * Libraries we can use.
 */
use Cartify\Libraries\Cart;
use Cartify\Libraries\Whishlist;

/**
 * Cartify class.
 */
class Cartify
{
	/**
	 * Return a new Cart() object.
	 *
	 * @access   public
	 * @param    string
	 * @return   object
	 */
	public static function cart($cart_name = null)
	{
		// Return the cart object.
		//
		return new Cart($cart_name);
	}

	/**
	 * Returns a new Cart() object with the wishlist name.
	 *
	 * @access   public
	 * @param    string
	 * @return   object
	 */
	public static function wishlist($wishlist_name = 'wishlist')
	{
		// Return the cart object.
		//
		return new Cart($wishlist_name);
	}
}
