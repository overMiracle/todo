<?php
namespace app\common\facade;

use think\Facade;

/**
 * @project  优惠券外观
 * @author   千叶
 * @date     2018-04-11
 */
class Coupon extends Facade
{
	/**
	 * 获取当前Facade对应类名
	 * @return string
	 */
	protected static function getFacadeClass()
	{
		return '\\app\\common\\model\\Coupon';
	}

}