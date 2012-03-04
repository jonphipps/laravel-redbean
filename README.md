#RedbeanORM Bundle for Laravel

For documentation and examples [see the Redbean site](http://www.redbeanphp.com/manual/create_a_bean).

##Installation

Install using artisan for Laravel :

	php artisan bundle:install redbean

Now simply add redbean to your `application/bundles.php` with auto start enabled :

	return array('redbean' => array('auto' => true));

Now set up your database as normal in `application/config/database.php`

All done!

---

##License

Redbean is released under the BSD/GPLv2 License.

Redbean ORM

Written by Gabor de Mooij (c) copyright 2009-2011.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.